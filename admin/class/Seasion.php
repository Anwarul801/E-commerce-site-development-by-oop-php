<?php
     /**
      * Seasion
      */
     class Seasion{
       public static function init(){
         session_start();
       }
       public static function set($key, $val){
         $_SESSION['$key'] = $val;
       }
       public static function get(){
         if (isset($_SESSION['$key'])) {
           return $_SESSION['$key'];
         } else{
           return false;
         }
       }
       public static function checkSeasion(){
         self::init();
         if (self::get("info") == false) {
           self::destroy();
           header("Location:index.php");
         }
       }
       public static function destroy(){
         session_destroy();
         header("Location:index.php");
       }
     }



 ?>
