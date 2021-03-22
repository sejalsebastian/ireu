<?php
include("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$user_name = $_POST['user_name'];
$password= $_POST['password'];



$sql= "INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES (NULL, '$user_name', '$password');";
$result = mysqli_query($db, $sql);
echo "done";
}else{
    echo "get";
    echo '<pre>';
    echo var_dump($_SERVER) . "<br>";
    echo '</pre>';
}



?>