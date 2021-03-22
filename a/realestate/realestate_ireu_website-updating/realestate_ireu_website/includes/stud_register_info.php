<?php
include("config.php");
$flag = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $std_nationality = htmlspecialchars($_POST['std_nationality']);
    $std_name = htmlspecialchars($_POST['std_name']);
    $std_email = htmlspecialchars($_POST['std_email']);
    $std_mobile_number = htmlspecialchars($_POST['std_mobile_number']);
    $std_password1 = htmlspecialchars($_POST['std_password1']);
    $std_confirm_password = htmlspecialchars($_POST['std_confirm_password']);
    $g_recaptcha_response = htmlspecialchars($_POST['g-recaptcha-response']);

    $errors = array(
        'std_nationality' => '', 'std_name' => '', 'std_email' => '', 'std_mobile_number' => '',
        'std_password1' => '', 'std_confirm_password' => '', 'validEmail' => '', 'validPassword' => '', 'validMobile' => '', 'std_name_valid' => '', 'g_recaptcha_response' => '', 'gerror' => ''
    );

    //check nationality
    if (empty($std_nationality) || $std_nationality == "Select Nationality") {
        $errors['std_nationality'] = 'std_nationality is empty <br />';
        print json_encode(array("std_nationality" => "*std_nationality is empty"));
    }
    //check std_name
    else if (empty($std_name)) {
        $errors['std_name'] = 'std_name is empty <br />';
        print json_encode(array("std_name" => "*std_name is empty"));
    }
    //check std_email
    else  if (empty($std_email)) {
        $errors['std_email'] = 'std_email is empty <br />';
        print json_encode(array("std_email" => "*std_email is empty"));
    }
    //check std_mobile_number
    else if (empty($std_mobile_number)) {
        $errors['std_mobile_number'] = 'std_mobile_number is empty <br />';
        print json_encode(array("std_mobile_number" => "*std_mobile_number is empty"));
    }
    //check std_password1
    else if (empty($std_password1)) {
        $errors['std_password1'] = 'std_password1 is empty <br />';
        print json_encode(array("std_password1" => "*std_password1 is empty"));
    }
    //check std_confirm_password
    else if (empty($std_confirm_password)) {
        $errors['std_confirm_password'] = 'std_confirm_password is empty <br />';
        print json_encode(array("std_confirm_password" => "*std_confirm_password is empty"));
    }
    //check g_recaptcha_response
    else if (empty($g_recaptcha_response)) {
        $errors['g_recaptcha_response'] = 'g_recaptcha_response is empty <br />';
        print json_encode(array("g_recaptcha_response" => "*complete recaptcha to register"));
    }
    //check email,password,name,mobile-number valid, 
    else if (!filter_var($std_email, FILTER_VALIDATE_EMAIL)) {
        $errors['validEmail'] =  'email must be valid';
        print json_encode(array("validEmail" => "*email must be valid"));
    } else if ($std_password1 != $std_confirm_password) {
        $errors['validPassword'] =  'email must be valid';
        print json_encode(array("validPassword" => "*passwords doesn't match"));
    } else if (strlen($std_name) < 6) {
        $errors['std_name_valid'] = 'std_name is empty <br />';
        print json_encode(array("std_name_valid" => "*Name length should be a maxiumum of 6 characters"));
    } else if (!preg_match('/^[6-9]\d{9}$/', $std_mobile_number)) {
        $errors['validMobile'] = 'validMobile is empty <br />';
        print json_encode(array("validMobile" => "*Eneter a vlaid mobile number"));
    }

    if (array_filter($errors)) {
        $errors['gerror'] = 'there is error';
    } else {
        $select_sql = "SELECT `stu_email` FROM `student` WHERE stu_email ='" . $_POST['std_email'] . "' OR stu_ph_num='" . $_POST['std_mobile_number'] . "';";
        $select_result = mysqli_query($db, $select_sql);
        $resultCheck = mysqli_num_rows($select_result);
        if ($resultCheck > 0) {
            // row exists.
            print json_encode(array("failure_msg" => "Student already registered."));
        } else {
            $insert_sql = "INSERT INTO `student` ( `stu_id`, `stu_nationality`, `stu_name`, `stu_email`, `stu_ph_num`,`stu_password`) VALUES (NULL, '$std_nationality', '$std_name','$std_email','$std_mobile_number', '$std_password1' );";
            $result = mysqli_query($db, $insert_sql);
            print json_encode(array("success_msg" => "Registered student sucessfully"));
            $flag = 1;
        }
    }
} else {
    echo "get";
    echo '<pre>';
    echo var_dump($_SERVER) . "<br>";
    echo '</pre>';
}


?>

<?php

$result = "";
if ($flag == 1) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require '../PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'ireutech@gmail.com';
        $mail->Password = 'ireu@098';

        //     //Provide file path and name of the attachments
        // $mail->addAttachment("file.txt", "File.txt");        
        // $mail->addAttachment("images/profile.png"); //Filename is optional

        $mail->setFrom($_POST['std_email'], $_POST['std_name']);
        $mail->addAddress($_POST['std_email']);
        $mail->addReplyTo($_POST['std_email'], $_POST['std_name']);

        $mail->isHTML(true);
        $mail->Subject = 'form register';
        $mail->Body = 'Welcome back' . $_POST['std_name'];

        if (!$mail->send()) {
            // $result="mail failed";
            echo "failed";
        } else {
            // $result="mail sent";
            echo "sent";
        }
    }
}
?>