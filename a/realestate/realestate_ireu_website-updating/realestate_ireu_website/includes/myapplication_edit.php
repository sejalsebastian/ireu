<?php
include("config.php");
// session_start();
// echo '<pre>';
// echo var_dump($_SESSION);
// echo '</pre>';
$appid = $_GET['applicationnumber'];
$student_id = $_SESSION['stu_id'];


//to get classtype 1 result for stu_edu and other form data
$sql = "SELECT application.*,program.*,stu_per_info.*,stu_com_info.*,stu_othr_info.*,stu_edu.* 
        FROM `application` LEFT JOIN program ON program.app_id = application.app_id 
        LEFT JOIN stu_per_info ON stu_per_info.app_id = application.app_id 
        LEFT JOIN stu_com_info ON stu_com_info.app_id = application.app_id 
        LEFT JOIN stu_othr_info ON stu_othr_info.app_id = application.app_id 
        LEFT JOIN stu_edu ON stu_edu.app_id = application.app_id WHERE application.stu_id = $student_id 
        AND stu_edu.stu_class_type = 1 AND application.app_id = $appid"; 


$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$details = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $editdetails[] =  $row;
  }
}

//to get classtype 2 result for stu_edu
$sql2 = "SELECT stu_edu.* FROM `stu_edu` WHERE stu_edu.stu_id = $student_id AND stu_edu.stu_class_type = 2 AND stu_edu.app_id =$appid";
$result = mysqli_query($db, $sql2);
$resultCheck = mysqli_num_rows($result);
$studetails = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $studetails[] =  $row;
  }
  // echo '<pre>';
  // echo var_dump($studetails);
  // echo '</pre>';
}

?>
<!-- $sql = "SELECT application.app_id,program.prog_type,program.prog_name FROM `application` LEFT JOIN program ON program.stu_id = application.stu_id WHERE application.stu_id = $student_id"; -->











































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php foreach ($editdetails as $editdetail) { ?>
    <select class="form-control wizard-required" id="prg_type">
       <option value="<?php $editdetail['firstname'];?>"><?php echo $editdetail['firstname'];?></option>
       <option value="Ug">Ug</option>
       <option value="pg (Lateral Entry)">pg (Lateral Entry)</option>
    </select>
    <br>
   
<?php } ?>


</body>
</html>   -->

