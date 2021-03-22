<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ac_initia_name`,  `ac_initia_pdf`  FROM `ac_initivities`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ac_initis = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ac_initis[] =  $row;
  }
}


?>