<?php 
include('config.php');

if(isset($_POST['progID'])){
    $progID = $_POST['progID'];
  }else{
    $progID = 0;
}



$course_name_sql ="SELECT `courses_id`, `prog_id`, `course_name` FROM `courses` WHERE `prog_id`= $progID";
$result = mysqli_query($db, $course_name_sql);
$resultCheck = mysqli_num_rows($result);
$courseNameDisplay= array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $courseNameDisplay[] =  $row;
  }
}

echo json_encode($courseNameDisplay);

?>