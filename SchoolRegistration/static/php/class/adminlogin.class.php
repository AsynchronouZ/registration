<?php

class AdminLogin extends AdminDb {
   public function authPass($user, $pass) {
      return $this->getAdmin($user, $pass);
   }
}