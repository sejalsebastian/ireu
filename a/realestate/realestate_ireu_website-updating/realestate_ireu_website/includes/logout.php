<?php
session_start();
 
if(!isset($_SESSION['email']))
{
  header("Location: login.php"); 
}
 else if(isset($_GET['logout'])){
    session_destroy();
    header("Location:login.php");
 }

?>