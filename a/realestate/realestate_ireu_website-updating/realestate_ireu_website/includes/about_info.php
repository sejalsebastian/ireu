<?php
include('config.php');

// to get main info about page
$sql = "SELECT `abt_id`, `abt_title`, `abt_overview`, `abt_banner_img`, `abt_vision_title`, `abt_vision_desc`, `abt_mission_title`, `abt_mission_desc`, `abt_commitment_title`, `abt_commitment_desc`, `abt_why_ireu_title`, `abt_ceo_title`, `abt_ceo_quote`, `abt_ceo_img`, `abt_ceo_desc` FROM `about` WHERE `abt_id` = 1";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$abtDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $abtDetails[] =  $row;
  }
}

// to get about why IREU points
$sql1 = "SELECT `abt_why_id`, `abt_id`, `abt_why_answers` FROM `abt_why_answers` WHERE `abt_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$abt_features_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $abt_features_Details[] =  $row;
  }
}
