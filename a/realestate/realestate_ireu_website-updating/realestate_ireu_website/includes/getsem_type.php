<?php
include('config.php');
// echo ($_POST['YearID']);
if(isset($_POST['YearID'])){
  $YearSemID = $_POST['YearID'];
}else{
  $YearSemID = 0;
}
if(isset($_POST['activeID'])){
  $activeID = $_POST['activeID'];
}else{
  $activeID = 0;
}
// $activeID = $_POST['activeID'];

//only five years allowed
if($YearSemID % 2 == 0){
  //even
    $param = "DESC";
 }else{
  //odd
    $param = "ASC";
 }

// get semester and details of sem of the courses

$sql6 ="SELECT DISTINCT `sem_type` FROM `cour_stu_details` WHERE `cour_str_id` = $activeID OR `cour_str_id` = $YearSemID ORDER BY `sem_type` $param " ;
$result6 = mysqli_query($db, $sql6);
$resultCheck6 = mysqli_num_rows($result6);
$semtypes = array();
if ($resultCheck6 > 0) {
  while ($row = mysqli_fetch_assoc($result6)) {
    $semtypes[] =  $row;
  }
  // sending questions and answers to ajax
  echo json_encode($semtypes);
} 




?>