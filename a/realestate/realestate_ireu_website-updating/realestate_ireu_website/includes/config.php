<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'realestate_ireu');

   //create connection
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 
  //check connection
   if (!$db) {
     die('connection error ' .mysqli_connect_errno());
    }
?>
