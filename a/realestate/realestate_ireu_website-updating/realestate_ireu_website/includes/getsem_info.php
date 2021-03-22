<?php
include('config.php');


// get semester and details of sem of the courses
$sql ="SELECT `cour_stu_det_id`, `cour_str_id`, `sem_type`, `cour_sem_details` FROM `cour_stu_details` WHERE `sem_type` = '{$_POST['s1']}' ";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$sem_col1_info = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $sem_col1_info[] =  $row;
  }
  // sending questions and answers to ajax
} 

// get semester and details of sem of the courses
$sql ="SELECT `cour_stu_det_id`, `cour_str_id`, `sem_type`, `cour_sem_details` FROM `cour_stu_details` WHERE `sem_type` = '{$_POST['s2']}' ";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$sem_col2_info = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $sem_col2_info[] =  $row;
  }
  // sending questions and answers to ajax

} 

$response = array(
    'sem_col1_info' => $sem_col1_info,
    'sem_col2_info'  => $sem_col2_info
);
echo json_encode($response);

?>