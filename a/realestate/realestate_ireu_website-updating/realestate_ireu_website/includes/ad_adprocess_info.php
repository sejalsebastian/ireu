<?php
 include('config.php');

// to get main info about admission  process page
$sql = "SELECT `ad_ad_id`, `ad_ad_about`, `ad_Helpline_title`, `ad_helpline_Subtitle` FROM `ad_admission_process` WHERE `ad_ad_id` = 1";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ad_adpr_main_Details = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ad_adpr_main_Details[] =  $row;
  }
}

// to get admission process helpine ug numbers
$sql1 = "SELECT  `ad_ad_id`, `ad_help_course_title`, `ad_help_number` FROM `ad_helpline_numbers` WHERE `ad_ad_id` = 1 AND `ad_help_course_title` = 'Under Graduate'";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$UG_Numbers = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $UG_Numbers[] =  $row;
  }
}

// to get admission process helpine ug numbers
$sql2 = "SELECT  `ad_ad_id`, `ad_help_course_title`, `ad_help_number` FROM `ad_helpline_numbers` WHERE `ad_ad_id` = 1 AND `ad_help_course_title` = 'Post Graduate'";
$result2 = mysqli_query($db, $sql2);
$resultCheck2  = mysqli_num_rows($result2);
$PG_Numbers = array();
if ($resultCheck2  > 0) {
  while ($row = mysqli_fetch_assoc($result2)) {
    $PG_Numbers[] =  $row;
  }
}

// to get admission process helpine ug numbers
$sql3 = "SELECT  `ad_ad_id`, `ad_help_course_title`, `ad_help_number` FROM `ad_helpline_numbers` WHERE `ad_ad_id` = 1 AND `ad_help_course_title` = 'Diploma'";
$result3 = mysqli_query($db, $sql3);
$resultCheck3  = mysqli_num_rows($result3);
$Diploma_Numbers = array();
if ($resultCheck3  > 0) {
  while ($row = mysqli_fetch_assoc($result3)) {
    $Diploma_Numbers[] =  $row;
  }
}

//to get online and offiline content
$sql4 = "SELECT `ad_sub _adn_id`, `ad_ad_id`, `ad_ad_heading`, `ad_ad_content`, `ad_ad_link` FROM `ad_sub_adn_process` WHERE `ad_ad_id` = 1";
$result4 = mysqli_query($db, $sql4);
$resultCheck4  = mysqli_num_rows($result4);
$on_off_contents = array();
if ($resultCheck4  > 0) {
  while ($row = mysqli_fetch_assoc($result4)) {
    $on_off_contents[] =  $row;
  }
}

//to get offiline table points
$sql5 = "SELECT `ad_sub_pro`, `ad_sub_adn_id`, `ad_sub_adn_off_list` FROM `ad_sub_adn_pro` WHERE `ad_sub_adn_id` = 2";
$result5 = mysqli_query($db, $sql5);
$resultCheck5  = mysqli_num_rows($result5);
$offline_table_points = array();
if ($resultCheck5  > 0) {
  while ($row = mysqli_fetch_assoc($result5)) {
    $offline_table_points[] =  $row;
  }
}


?>