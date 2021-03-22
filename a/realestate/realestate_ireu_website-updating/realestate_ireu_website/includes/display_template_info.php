<?php
 include('config.php');

if(isset($_GET['iden'])){
  $iden = $_GET['iden'];
  // echo $_GET['iden'];
}else{
  $iden = null;
  // echo 'not set';
}
$course_id = $_GET['course_id'];
// var_dump($_GET);




$sql = "SELECT  `course_id`,  `cour_eligibility`, `cour_overview`, `cour_duration` FROM `course_details` WHERE `course_id`= $course_id";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$templateDetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $templateDetails[] =  $row;
  }
}

$sql1 = "SELECT `course_name` FROM `course` WHERE `course_id` = $course_id";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$templateNames = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $templateNames[] =  $row;
  }
}

$sql2="SELECT `course_feat_desc` FROM `course_features` WHERE `course_id`= $course_id";
$result2 = mysqli_query($db, $sql2);
$resultCheck2 = mysqli_num_rows($result2);
$keyFeatures = array();
if ($resultCheck2 > 0) {
  while ($row = mysqli_fetch_assoc($result2)) {
    $keyFeatures[] =  $row;
  }
}
//get years of course
$sql3="SELECT  `cour_str_id`,`cour_year` FROM `course_structure` WHERE `course_id`= $course_id";
$result3 = mysqli_query($db, $sql3);
$resultCheck3 = mysqli_num_rows($result3);
$years = array();
if ($resultCheck3 > 0) {
  while ($row = mysqli_fetch_assoc($result3)) {
    $years[] =  $row;
  }
}

//get faq title of course
$sql4="SELECT `faq_id`,`faq_title` FROM `faq` WHERE `course_id`= $course_id";
$result4 = mysqli_query($db, $sql4);
$resultCheck4 = mysqli_num_rows($result4);
$faqtitles = array();
if ($resultCheck4 > 0) {
  while ($row = mysqli_fetch_assoc($result4)) {
    $faqtitles[] =  $row;
  }
}

// get faq title of course
$sql5="SELECT `faq_details`.*, `faq`.`course_id` FROM `faq_details` LEFT JOIN `faq` ON `faq_details`.`faq_id` = `faq`.`faq_id` 
WHERE `faq`.`course_id` = $course_id AND `faq`.`faq_id` ='".$iden."' ";
$result5 = mysqli_query($db, $sql5);
$resultCheck5 = mysqli_num_rows($result5);
$faqQa = array();
if ($resultCheck5 > 0) {
  while ($row = mysqli_fetch_assoc($result5)) {
    $faqQa[] =  $row;
  }
  // sending questions and answers to ajax
  echo json_encode($faqQa);
}
