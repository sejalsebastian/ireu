<?php
include('config.php');
// $sql ="SELECT `prog_id`, `prog_name` FROM `programmes`";
$sql = "SELECT * FROM `programmes`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$programmesDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $programmesDetails[] =  $row;
  }
}



?>
 