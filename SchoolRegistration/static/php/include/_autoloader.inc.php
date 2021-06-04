<?php

spl_autoload_register(function ($className) {
   $url = $_SERVER["PHP_SELF"];
   $pathPrefix = "static/php/class/";
   $pathExt = ".class.php";

   if (preg_match("(php/)", $url)) {
      $pathPrefix = "class/";
   }
   if (preg_match("(.inc|.class|.sys)", $url)) {
      $pathPrefix = "../class/";
   }

   $path = $pathPrefix . $className . $pathExt;

   if (!file_exists($path)) {
      return false;
   }

   include_once $path;
});