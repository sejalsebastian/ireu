<?php 
include('config.php');
echo var_dump($_POST);
$output= array();
$course_name_sql ="SELECT `course_name` FROM `course` WHERE course_type='".$_POST["program_type"]."'";
$result1 = mysqli_query($db, $course_name_sql);

if ($_POST["program_type"] =="default") {
$output[]='<option value="default">Select Program Name</option>';    
echo $output[0];
}
else{
$resultCheck1 = mysqli_num_rows($result1);
if ($resultCheck1 > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        $output[]='<option value="'.$row['course_name'].'">'.$row['course_name'].'</option>';
    }
    foreach ($output as $key => $value) {
        echo $value;
    }
}

}
?>