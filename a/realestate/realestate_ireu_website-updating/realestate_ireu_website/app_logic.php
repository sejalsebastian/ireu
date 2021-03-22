<?php 

session_start();
$errors = [];
$user_id = "";
// connect to database
include('includes/config.php');
// $db = mysqli_connect('localhost', 'root', '', 'password-reset-php');

// LOG USER IN
// if (isset($_POST['login_user'])) {
//   // Get username and password from login form
//   $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
//   $password = mysqli_real_escape_string($db, $_POST['password']);
//   // validate form
//   if (empty($user_id)) array_push($errors, "Username or Email is required");
//   if (empty($password)) array_push($errors, "Password is required");

//   // if no error in form, log user in
//   if (count($errors) == 0) {
//     $password = md5($password);
//     $sql = "SELECT * FROM users WHERE username='$user_id' OR email='$user_id' AND password='$password'";
//     $results = mysqli_query($db, $sql);

//     if (mysqli_num_rows($results) == 1) {
//       $_SESSION['username'] = $user_id;
//       $_SESSION['success'] = "You are now logged in";
//       header('location: index.php');
//     }else {
//       array_push($errors, "Wrong credentials");
//     }
//   }
// }

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT stu_email FROM student WHERE stu_email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));
  $url = "http://website.ireu.education/new_password.php?token=" . $token;
  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql1 = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql1);

    // Send email to user with the token in a link they can click on
    // $to = $email;
    // $subject = "Reset your password on examplesite.com";
    // $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
    // $msg = wordwrap($msg,70);
    // $headers = "From: ireutech@gmail.com";
    // mail($to, $subject, $msg, $headers);
    // header('location: pending.php?email=' . $email);
    
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Hi there, click on this to reset your password on our site</p>';		
$output.= '<a href="' . $url . '">' . $url . '</a>';
//$output.='<a href="http://website.ireu.education/new_password.php?token="'.$token.'>http://website.ireu.education/new_password.php?token='.$token.'</a>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>AllPHPTricks Team</p>';
$body = $output; 
$subject = "Password Recovery - IREU Group";

$email_to = $email;
$fromserver = "ireutech@gmail.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "ireutech@gmail.com"; // Enter your email here
$mail->Password = "ireu@098"; //Enter your passwrod here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "ireutech@gmail.com";
$mail->FromName = "IREU Group";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    header('location: pending.php?email=' . $email);
// echo "<div class='error'>
// <p>An email has been sent to you with instructions on how to reset your password.</p>
// </div><br /><br /><br />";
	}

		
    
  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);


  // Grab to token that came from the email link
  $token = $_POST["token"];
  echo $token;
  // echo "<script>console.log($token)</script>";
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  echo count($errors);
  if (count($errors) == 0) {
    echo 'Hello';
    // select email address of user from the password_reset table 
    $sql2 = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql2);
    if ($results > 0) {
      while ($row = mysqli_fetch_assoc($results)) {
        $emails[] =  $row["email"];
      }
    }
    // $email = mysqli_fetch_assoc($results)['email'];
   foreach ($emails as $email) {
    echo $email['email'];

   }

    if ($email) {
      $new_pass = md5($new_pass);
      $sql3 = "UPDATE student SET stu_password='$new_pass' WHERE stu_email='$email'";
      $results = mysqli_query($db, $sql3);
      header('location: index.php');
    }
  }
}
