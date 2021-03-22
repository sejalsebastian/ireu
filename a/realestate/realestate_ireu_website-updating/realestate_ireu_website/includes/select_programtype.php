<?php
// include('config.php');
//sql for program info select tag.
$sql_course = "SELECT * FROM `programmes`";
$result = mysqli_query($db, $sql_course);
$resultCheck = mysqli_num_rows($result);
$programmes = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $programmes[] =  $row;
  }
}
