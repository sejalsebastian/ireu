<?php
 include('config.php');

// to get main info pivacy page
$sql = "SELECT `Priv_id`, `Priv_main_title`, `Priv_subheading` FROM `privacy policy`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$privDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $privDetails[] =  $row;
  }
}

// to get privacy points
$sql1 = "SELECT `priv_sub_id`, `priv_id`, `priv_sub_desc` FROM `priv_subheading_decription` WHERE `priv_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$priv_features_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $priv_features_Details[] =  $row;
  }
}



?>