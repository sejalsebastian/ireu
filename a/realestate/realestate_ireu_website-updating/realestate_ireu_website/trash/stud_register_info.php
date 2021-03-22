<?php
include("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nationality= $_POST['nationality'];
$stdname = $_POST['stdname'];
$stdemail= $_POST['stdemail'];
$stdmobnum= $_POST['stdmobnum'];
$stdpassword= $_POST['stdpassword'];




$sql= "INSERT INTO `student` ( `stu_id`, `stu_nationality`, `stu_name`, `stu_email`, `stu_ph_num`,`stu_password`) VALUES (NULL, '$nationality', '$stdname','$stdemail','$stdmobnum', '$stdpassword' );";
$result = mysqli_query($db, $sql);                                                                                                                                        
echo "done registering student";
}else{
    echo "get";
    echo '<pre>';
    echo var_dump($_SERVER) . "<br>";
    echo '</pre>';
}



?>