<?php
 include('config.php');

// to get main info discalimer page
$sql = "SELECT `dis_id`, `dis_main_title`, `dis_subheading` FROM `disclaimer`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$disDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $disDetails[] =  $row;
  }
}

// to get disclamier points
$sql1 = "SELECT `dis_sub_id`, `dis_id`, `dis_sub_desc` FROM `dis_subheading_description` WHERE `dis_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$dis_features_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $dis_features_Details[] =  $row;
  }
}



?>