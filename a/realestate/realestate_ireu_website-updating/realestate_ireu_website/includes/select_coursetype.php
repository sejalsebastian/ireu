<?php
include('config.php');
$output = array();
$course_name_sql = "SELECT `courses_id`, `prog_id`, `course_name` FROM `courses` WHERE `prog_id`='" . $_POST["program_type"] . "'";
$result1 = mysqli_query($db, $course_name_sql);

if ($_POST["program_type"] == "default") {
    $output[] = '<option value="default">Select Course Name</option>';
    echo $output[0];
} else {
    $resultCheck1 = mysqli_num_rows($result1);
    if ($resultCheck1 > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
            $output[] = '<option value="' . $row['course_name'] . '">' . $row['course_name'] . '</option>';
        }
        foreach ($output as $key => $value) {
            echo $value;
        }
    }
}
