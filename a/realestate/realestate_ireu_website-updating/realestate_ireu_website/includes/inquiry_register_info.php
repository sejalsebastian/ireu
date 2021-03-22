<?php
include("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nationality= htmlspecialchars($_POST['nationality']);
$stdname = htmlspecialchars($_POST['stdname']);
$stdemail = htmlspecialchars($_POST['stdemail']);
$stdmobnum = htmlspecialchars($_POST['stdmobnum']);
$program_type = htmlspecialchars($_POST['program_type']);
$course_name = htmlspecialchars($_POST['course_name']);
$g_recaptcha_response = htmlspecialchars($_POST['g-recaptcha-response']);

$errors = array('nationality' => '','stdname' => '','stdemail' => '','stdmobnum' => '',
                 'program_type' => '', 'course_name' => '','validEmail' =>'',
                 'validMobile'=>'','stdname_valid'=>'','g_recaptcha_response'=>'', 'gerror' => '');

//check nationality
    if (empty($nationality) || $nationality == "Select Nationality") { 
        $errors['nationality'] = 'nationality is empty <br />';
        print json_encode(array("nationality"=>"*Nationality is empty, please enter."));   
    } 
//check std_name
    else if (empty($stdname)) { 
        $errors['stdname'] = 'stdname is empty <br />';
        print json_encode(array("stdname"=>"*Name is empty, please enter."));   
    } 
//check std_email
   else  if (empty($stdemail)) { 
        $errors['stdemail'] = 'stdemail is empty <br />';
        print json_encode(array("stdemail"=>"*Email is empty"));   
    }
//check std_mobile_number
  else if (empty($stdmobnum)) { 
        $errors['stdmobnum'] = 'stdmobnum is empty <br />';
        print json_encode(array("stdmobnum"=>"*Mobile Number is empty, please enter."));   
    }
//check $course_name
    else if (empty($program_type)|| $program_type == "default") { 
        $errors['program_type'] = 'program_type is empty <br />';
        print json_encode(array("program_type"=>"*Program type is empty, please select."));   
    }
//check course_name
    else if (empty($course_name)|| $course_name == "default") { 
        $errors['course_name'] = 'course_name is empty <br />';
        print json_encode(array("course_name"=>"*Course name is empty, please select."));   
    }
//check g_recaptcha_response
else if (empty($g_recaptcha_response)) { 
    $errors['g_recaptcha_response'] = 'g_recaptcha_response is empty <br />';
    print json_encode(array("g_recaptcha_response"=>"*complete recaptcha to register"));   
}    
//check email,name,mobile-number valid, 
    else if (!filter_var($stdemail, FILTER_VALIDATE_EMAIL))   {
        $errors['validEmail'] =  'email must be valid';
        print json_encode(array("validEmail"=>"*email must be valid"));
      
    }
    else if(strlen($stdname)<4){
        $errors['stdname_valid'] = 'std_name is empty <br />';
        print json_encode(array("stdname_valid"=>"*Name length should be a miniumum of 4 characters"));
    }
    else if(!preg_match('/^[6-9]\d{9}$/', $stdmobnum)){
        $errors['validMobile'] = 'validMobile is empty <br />';
        print json_encode(array("validMobile"=>"*Eneter a vlaid mobile number"));
    }
   
if (array_filter($errors)) {
        $errors['gerror'] = 'there is error';
    } else { 
        $select_sql ="SELECT `email`, `mobile` FROM `inquiry` WHERE email ='".$_POST['stdemail']."' OR mobile ='".$_POST['stdmobnum']."';"; 
        $select_result = mysqli_query($db, $select_sql);
        $resultCheck = mysqli_num_rows($select_result);
        if ($resultCheck > 0) {
            // row exists.
            print json_encode(array("failure_msg"=>"Student already registered."));
        }
        else{
            $insert_sql= "INSERT INTO `inquiry` (`Inq_id`, `nationality`, `name`, `email`, `mobile`, `programtype`, `coursename`) VALUES (NULL, '$nationality', '$stdname','$stdemail','$stdmobnum', '$program_type','$course_name' );";
            $result = mysqli_query($db, $insert_sql);                                                                                                                                      
            print json_encode(array("success_msg"=>"STEP 1 Completed redirecting to next step"));
        }
      
    }


}else{
    echo "get";
    echo '<pre>';
    echo var_dump($_SERVER) . "<br>";
    echo '</pre>';
}



?>