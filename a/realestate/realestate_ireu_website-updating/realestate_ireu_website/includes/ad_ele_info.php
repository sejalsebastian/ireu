<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ad_ele_heading_title`, `ad_ele_des` FROM `ad_eligibility`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ad_ele_Details = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ad_ele_Details[] =  $row;
  }
}

?>