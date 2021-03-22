<?php

$result = "";

// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
  require  'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer();
  // $mail->SMTPDebug  = 3;
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Username = "ireutech@gmail.com";
  $mail->Password = "ireu@098";
  $mail->SetFrom($_POST['enq_email']);
  $mail->Subject = $_POST['subject'];
  $mail->Body = "welcomeback";
  $mail->AddAddress($to);
  $mail->SMTPOptions = array('ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
  ));
  if (!$mail->send()) {
    $result = "failed sending mail";
    var_dump($mail);
  } else {
    $result = "mail sent";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/enquire_modal.css" />
</head>

<body>
  <h4 class="sent_not"><?= $result; ?></h4>
  <form id="myform" class="col-md-4">
    <div class="form-group">
      <input type="text" class="form-control shadow-none" id="enq_name" placeholder="Enter Full Name *" name="enq_name" required />
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="enq_email" placeholder="Enter Email Address *" name="enq_email" required />
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="enq_phone" placeholder="Enter Mobile Number *" name="enq_phone" required />
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <input type="text" class="form-control" id="subject" placeholder="State *" name="subject" required />
      </div>
    </div>

    <br />
    <div class="col-md-10 text-center">
      <button type="submit" class="btn btn-primary btn-lg sub_btn" name="submit" id="submit">
        Send Email
      </button>
    </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>