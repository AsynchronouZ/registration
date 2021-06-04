<?php
include_once "../include/_autoloader.inc.php";
session_start();
$adminAuth = new AdminLogin();
$res = $adminAuth->authPass($_POST["username"], $_POST["password"]);

function saveCookie(String $name, String $value) {
   setcookie($name, $value, time() + 3200, "/");  // 86400 = 24 hour / 1day
}

if ($res["error"] === "username") {
   header("location: ../login.php?error=Username Not found");
} else if ($res["error"] === "password") {
   header("location: ../login.php?error=Incorrect Password");
} else {
   if (!empty($_POST["remember"])) {
      saveCookie("username", $_POST["username"]);
      saveCookie("password", $_POST["password"]);
      saveCookie("remember", $_POST["remember"]);
   } else {
      saveCookie("username", "");
      saveCookie("password", "");
      saveCookie("remember", "");
   }

   $_SESSION["user"] = $res["admin_username"];
   $_SESSION["profile"] = $res["admin_profile"];
   $_SESSION["def_profile"] = $res["admin_default_profile"];
   $_SESSION["name_first"] = $res["name_first"];
   $_SESSION["name_last"] = $res["name_last"];

   header("location: ../dashboard.php");
}