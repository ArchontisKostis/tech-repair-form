<?php
  include 'backend/createHTMLmail.php';

  use PHPMailer\PHPMailer\PHPMailer;

  require_once './phpmailer/Exception.php';
  require_once './phpmailer/PHPMailer.php';
  require_once './phpmailer/SMTP.php';

  if(isset($_POST['submit'])){
    $mail = new PHPMailer(true);
    $mailToSender = new PHPMailer(true);
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $deviceType = $_POST['device'];
    $problemType = $_POST['problem'];
    $comments = $_POST['comments'];
  
    // SENT MESSAGE TO RECEIVER
    $mail->isSMTP();
    $mail->CharSet  = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'archontisfreelance@gmail.com'; // Mail address which you want to use as SMTP server
    $mail->Password = 'guifqxkqjjbcpiyz'; // Mail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';
  
    $mail->setFrom('archontisfreelance@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('archontisfreelance@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
  
    $mail->isHTML(true);
    $mail->Subject = "New Message";
    // HTML MESSAGE BODY
    $mail->Body = createHTMLmail($name, 
                                  $email, 
                                  $phoneNumber, 
                                  $deviceType, 
                                  $problemType, 
                                  $comments
  );
  
    if($mail->send()){
      header("Location: #sent");
    }
    else{
      header("Location: #notsent");
    }
  }


?>