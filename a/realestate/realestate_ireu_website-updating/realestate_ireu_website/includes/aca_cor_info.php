<?php
 include('config.php');

// corporate page
$sql = "SELECT `ac_corp_title`  FROM `ac_corp_mentors`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ac_cors = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ac_cors[] =  $row;
  }
}

//corporate page
$sql = "SELECT  `ac_sub_corp_points` FROM `ac_corp_mentors_sub`";
$result1 = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result1);
$ac_corrs = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $ac_corrs[] =  $row;
  }
}


?>