<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ac_res_title` FROM `ac_research_report`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$aca_res_titles = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $aca_res_titles[] =  $row;
  }
}
$sql = "SELECT `ac_res_sub_point` FROM `ac_research_sub`";
$result1 = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result1);
$aca_res_subs = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $aca_res_subs[] =  $row;
  }
}

?>