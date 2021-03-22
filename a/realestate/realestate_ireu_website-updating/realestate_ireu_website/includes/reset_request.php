<?php
if (isset($_POST["reset-request-submit"])) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://website.ireu.education/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    include('config.php');

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM `pwd_reset` WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an errror";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO `pwd_reset`(`pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an errror";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($db);

    // $to = $userEmail;
    // $subject = "Reset ur password";
    // $message = "<p>link is below fr password reset<p>";
    // $message .= "<p>here is ur password reset link</br>";
    // $message .= '<a href="' . $url . '">' . $url . '</a><p>';

    // $headers = "From:ireutech@gmail.com\r\n";
    // $headers .= "Reply-To:ireutech@gmail.com\r\n";
    // $headers .= "Content-type:text/html\r\n";
    // mail($to, $subject, $message,  $headers);
    // header("Location:../reset_pass.php?reset=success");
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

    $mail->setFrom($userEmail);
    $mail->addAddress($userEmail);
    $mail->addReplyTo($userEmail);

    $mail->isHTML(true);
    $mail->Subject = 'Password Link';
    $mail->Body = '<a href="' . $url . '">' . $url . '</a>';

    if (!$mail->send()) {
        // $result="mail failed";
        header("Location:../reset_pass.php?reset=success");
        echo "failed";
    } else {
        // $result="mail sent";
        header("Location:../reset_pass.php?reset=success");
        echo "sent";
    }
} else {
    header("Location: ../reset_pass.php");
}
