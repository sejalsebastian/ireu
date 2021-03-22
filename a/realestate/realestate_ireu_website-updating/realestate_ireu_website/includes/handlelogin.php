<?php

// studlogin
session_start();
include("config.php");

$email = $password = ""; //might have to change password
$errors = array('email' => '', 'password' => '', 'gerror' => '');
if (isset($_POST['button'])) {
    //check email
    if (empty($_POST['email'])) { 
        $errors['email'] = 'email is empty <br />';
        print json_encode(array("email"=>"*email is empty"));   
    } //check password
    else if (empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
        $errors['password'] = 'password is empty <br />';
        print json_encode(array("password"=>"*password is empty"));   
    }
    else {
        $email = htmlspecialchars($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] =  'email must be valid';
            print json_encode(array("valid"=>"*email must be valid"));
        }
    }


    if (array_filter($errors)) {
        $errors['gerror'] = 'there is error';
    } else {
        //sql query to ckeck if user exists in db
        $sql = "SELECT stu_id,stu_email, stu_password FROM `student` WHERE stu_email ='" . $_POST['email'] . "' AND stu_password = '" . $_POST['password'] . "' ";
        $result = mysqli_query($db, $sql);
       if (mysqli_fetch_assoc($result)) {
            $_SESSION['email'] = $_POST['email'];
            echo "Yes";
            die;
        } else {
            print json_encode(array("correct"=>"*invalid credentials"));
        }

    }
}


?>