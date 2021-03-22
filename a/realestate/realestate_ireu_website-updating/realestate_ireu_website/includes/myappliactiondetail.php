<?php

$student_id = $_SESSION['stu_id'];
$sql = "SELECT application.app_id,application.fee_status,student.stu_name,program.prog_type,program.prog_name FROM application LEFT JOIN student ON student.stu_id = application.stu_id LEFT JOIN program ON program.app_id = application.app_id WHERE application.stu_id = $student_id";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$details = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $details[] =  $row;
  }
}

?>
 