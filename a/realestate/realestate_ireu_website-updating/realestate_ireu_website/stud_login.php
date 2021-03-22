<?php

session_start();
include("includes/config.php");

$email = $password = ""; //might have to change password
$errors = array('email' => '', 'password' => '', 'gerror' => '');
if (isset($_POST['stdlogin'])) {
  //check email
  if (empty($_POST['email'])) {
    $errors['email'] = 'email is empty <br />';
  } else {
    $email = htmlspecialchars($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] =  'email must be valid';
    }
  }
  //check password
  if (empty($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    $errors['password'] = 'password is empty <br />';
  }
  // else{
  // $errors['password'] = htmlspecialchars($_POST['password']);
  // } 



  if (array_filter($errors)) {
    $errors['gerror'] = 'there is error';
  } else {
    //sql query to ckeck if user exists in db
    $sql = "SELECT email, password FROM `registeredusers` WHERE email ='" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "' ";
    $result = mysqli_query($db, $sql);



    if (mysqli_fetch_assoc($result)) {
      $_SESSION['email'] = $_POST['email'];
      header('Location: user_application.html');
      die;
    } else {
      $errors['gerror'] = 'please enter correct username and password';
    }
  }
}


?>

