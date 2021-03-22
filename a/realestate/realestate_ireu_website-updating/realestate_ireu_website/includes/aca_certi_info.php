<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ac_cert_title`  FROM `ac_ certificate`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ac_cert_titles = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ac_cert_titles[] =  $row;
  }
}


$sql1 = "SELECT `ac_cer_subhg-id`, `ac_cer_sub_id`, `ac_cer_sub_points` FROM `ac_certi_sub` WHERE `ac_cer_sub_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck = mysqli_num_rows($result1);
$ac_cert_sub1s = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $ac_cert_sub1s[] =  $row;
  }
}


$sql2 = "SELECT `ac_cer_subhg-id`, `ac_cer_sub_id`, `ac_cer_sub_points` FROM `ac_certi_sub` WHERE `ac_cer_sub_id` = 2";
$result2 = mysqli_query($db, $sql2);
$resultCheck = mysqli_num_rows($result2);
$ac_cert_sub2s = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result2)) {
    $ac_cert_sub2s[] =  $row;
  }
}


$sql3 = "SELECT `ac_cer_subhg-id`, `ac_cer_sub_id`, `ac_cer_sub_points` FROM `ac_certi_sub` WHERE `ac_cer_sub_id` = 3";
$result3 = mysqli_query($db, $sql3);
$resultCheck = mysqli_num_rows($result3);
$ac_cert_sub3s = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result3)) {
    $ac_cert_sub3s[] =  $row;
  }
}


$sql4 = "SELECT `ac_cer_subhg-id`, `ac_cer_sub_id`, `ac_cer_sub_points` FROM `ac_certi_sub` WHERE `ac_cer_sub_id` = 4";
$result4 = mysqli_query($db, $sql4);
$resultCheck = mysqli_num_rows($result4);
$ac_cert_sub4s = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result4)) {
    $ac_cert_sub4s[] =  $row;
  }
}


?>