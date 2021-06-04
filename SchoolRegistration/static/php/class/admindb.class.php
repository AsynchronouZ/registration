<?php

class AdminDb extends DbConn {
   protected function getAdmin($user, $pass) {
      $sql = "SELECT * FROM admin WHERE admin_username = ? OR admin_email = ?";
      // $stmt = $this->conn()->query($sql)   ----  just for a getting info 
      $stmt = $this->conn()->prepare($sql);
      $stmt->execute([$user, $user]);
      if (!$stmt->fetch()) {
         return array("error" => "username");
      }

      $sql = "SELECT * FROM admin WHERE (admin_username = ? OR admin_email = ?) AND admin_password = ?";
      $stmt = $this->conn()->prepare($sql);
      $stmt->execute([$user, $user, $pass]);
      $res = $stmt->fetch();
      if (!$res) {
         return array("error" => "password");
      }
      return $res;
   }
}