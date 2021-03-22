<?php
include("includes/config.php");
if (isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset']) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //   mysql_connect('localhost','root','');
    //   mysql_select_db('sample');
    $sql = "UPDATE `student` SET `stu_password`= $pass WHERE `stu_email`= $email";
    $result = mysqli_query($db, $sql);
    //   $select=mysql_query("update user set password='$pass' where email='$email'");
}
