<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ac_about`  FROM `ac_overview`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ac_overviews = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ac_overviews[] =  $row;
  }
}

// to get main info about page
$sql1 = "SELECT  `ac_heading`, `ac_content`, `ac_over_img` FROM `ac_overview_section`";
$result1 = mysqli_query($db, $sql1);
$resultCheck = mysqli_num_rows($result1);
$ac_over_sections = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $ac_over_sections[] =  $row;
  }
}
