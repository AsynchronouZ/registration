<?php

class StudentsView extends DbConn {
   protected function getStudents($limit) {
      $sql = "SELECT * FROM students ORDER BY student_lastname, student_firstname, student_middlename ASC";
      if ($limit) {
         $sql = "SELECT * FROM students WHERE student_status = 'pending' ORDER BY register_date ASC LIMIT 10";
      }
      $stmt = $this->conn()->query($sql);
      return $stmt->fetchAll();
   }
   protected function getStudentsFilter($filter) {
      $sql = "SELECT * FROM students WHERE student_lastname = ? OR student_firstname = ? OR student_middlename = ? OR student_email = ? OR student_phone = ? OR student_status = ? OR student_brgy = ? OR student_city = ? ORDER BY student_lastname, student_firstname, student_middlename ASC";
      $stmt = $this->conn()->prepare($sql);
      $stmt->execute([$filter, $filter, $filter, $filter, $filter, $filter, $filter, $filter]);
      return $stmt->fetchAll();
   }
}