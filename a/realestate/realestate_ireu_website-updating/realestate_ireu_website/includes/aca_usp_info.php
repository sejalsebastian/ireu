<?php
 include('config.php');

// title page of usp
$sql = "SELECT `ac_usp_title` FROM `ac_usp`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$aca_usps = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $aca_usps[] =  $row;
  }
}
// list of usp page
$sql = "SELECT `ac_usp_id_list` FROM `ac_usp_list`";
$result1 = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result1);
$aca_usp_lists = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $aca_lists[] =  $row;
  }
}

?>