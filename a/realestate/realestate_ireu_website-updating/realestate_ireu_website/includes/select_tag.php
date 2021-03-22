<?php

//sql for program info select tag.
$sql_course = "SELECT DISTINCT `course_type` FROM `course`";
$result = mysqli_query($db, $sql_course);
$resultCheck = mysqli_num_rows($result);
$courses = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $courses[] =  $row;
  }
}

?>
 