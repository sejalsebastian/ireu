<?php
 include('config.php');

// to get main info placements(cas) page
$sql = "SELECT `cas_id`, `cas_main_title`, `cas_img`, `cas_overview`, `cas_pre_place_activity_title`, `cas_resources_main_title` FROM `career assistance and support` WHERE `cas_id` = 1";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$casDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $casDetails[] =  $row;
  }
}

// to get pre-pacement-points
$sql1 = "SELECT `cas_pre_id`, `cas_id`, `cas_pre_place_activities` FROM `cas_pre-placement activities` WHERE `cas_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$cas_pre_placement_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $cas_pre_placement_Details[] =  $row;
  }
}

// to get resource ttile and description
$sql2 = "SELECT `cas_res_id`, `cas_id`, `cas_res_title`, `cas_res_title_desc` FROM `cas_resources` WHERE `cas_id` = 1";
$result2 = mysqli_query($db, $sql2);
$resultCheck1 = mysqli_num_rows($result2);
$cas_resources_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result2)) {
    $cas_resources_Details[] =  $row;
  }
}
