<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ac_imsnpgm_title`  FROM `ac_imsn_pgm`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ac_imms = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ac_imms[] =  $row;
  }
}

// to get main info about page
$sql = "SELECT  `ac_impgm_points` FROM `ac_imsn_pgm_sub`";
$result1 = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result1);
$ac_impgms = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $ac_impgms[] =  $row;
  }
}


?>