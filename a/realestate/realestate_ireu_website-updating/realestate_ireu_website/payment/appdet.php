<?php
include('../includes/config.php');


$last_id = $_SESSION['last_id'];
$sql = "SELECT `firstname`, `lastname`, `email`, `registered_mob_num` FROM `stu_per_info` WHERE stu_per_info.app_id = $last_id";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$appdetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $appdetails[] =  $row;
  }
}

$sql1 = "SELECT `app_id`, `prog_type`, `prog_name` FROM `program`  WHERE program.app_id = $last_id";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $details[] =  $row;
  }
}


?>