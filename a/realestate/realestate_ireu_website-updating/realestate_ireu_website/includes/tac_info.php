<?php
 include('config.php');

// to get main info terms and conditions page
$sql = "SELECT `tc_id`, `tc_main_title`, `tc_subheading` FROM `terms & conditions`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$tcDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $tcDetails[] =  $row;
  }
}

// to get t&c points
$sql1 = "SELECT `tc_sub_id`, `tc_id`, `tc_sub_desc` FROM `tc_subheading_description` WHERE `tc_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$tc_features_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $tc_features_Details[] =  $row;
  }
}



?>