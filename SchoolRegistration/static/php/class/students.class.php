<?php

class Students extends StudentsView {
   public function showStudents($filter, $limit) {
      if ($filter !== "") {
         return $this->getStudentsFilter($filter);
      }
      return $this->getStudents($limit);
   }
}