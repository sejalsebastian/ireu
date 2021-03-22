<?php
session_start();
 
if(!isset($_SESSION['email']))
{
  header("Location: index.html"); 
}
 else if(isset($_GET['logout'])){
    session_destroy();
    header("Location:register.php");
 }

?>