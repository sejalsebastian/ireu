<?php

$sql = "SELECT * FROM `registeredusers`;";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$details = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $details[] =  $row;
  }
}



?>