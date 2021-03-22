

<?php
 include('config.php');

// to get main info about page
$sql = "SELECT `ac_exp_name`, `ac_exp_pdf` FROM `ac_ experiential_learning`";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$ac_exps = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $ac_exps[] =  $row;
  }
}


?>