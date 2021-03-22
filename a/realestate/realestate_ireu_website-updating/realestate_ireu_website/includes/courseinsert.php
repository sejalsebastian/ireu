<?php
include("../config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$course_id = $_POST['course_id'];
$course_name = $_POST['course_name'];
$course_details = $_POST['course_details'];
$course_image = $_POST['course_image'];
$added_by = $_POST['added_by'];
$added_datetime = $_POST['added_datetime'];
$modified_by = $_POST['modified_by'];
$modified_datetime = $_POST['modified_datetime'];
echo $_POST['modified_by'];

$sql= "INSERT INTO `course` ( `course_id`, `course_name`, `course_details`, `course_image`, `added_by`, `added_datetime`, `modified_by`, `modified_datetime`) VALUES ( '$course_id','$course_name', '$course_details', '$course_image', '$added_by', '$added_datetime', '$modified_by', '$modified_datetime');";
$result = mysqli_query($db, $sql);


echo '<pre>';
    echo var_dump($result) . "<br>";
    echo '</pre>';
echo "done dan";

}else{
    echo "get";
    echo '<pre>';
    echo var_dump($_SERVER) . "<br>";
    echo '</pre>';
}



?>