<?php
  include 'backend/createHTMLmail.php';

  use PHPMailer\PHPMailer\PHPMailer;

  require_once './phpmailer/Exception.php';
  require_once './phpmailer/PHPMailer.php';
  require_once './phpmailer/SMTP.php';

  // Start the session
  session_start();

  if(isset($_POST['submit'])){
    $mail = new PHPMailer(true);
    $mailToSender = new PHPMailer(true);
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone-num'];
    $deviceType = $_POST['device'];
    $problemType = $_POST['problem'];
    $comments = $_POST['comments'];
  
    // SENT MESSAGE TO RECEIVER - PETROS MAIL
    $mail->isSMTP();
    $mail->CharSet  = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'archo.uom@gmail.com'; // Mail address which you want to use as SMTP server
    $mail->Password = 'ivkcwhbgzaftsrww'; // Mail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';
  
    $mail->setFrom('archo.uom@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('archo.uom@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
  
    $mail->isHTML(true);
    $mail->Subject = "New Message";
    // HTML MESSAGE BODY
    $mail->Body = createHTMLmailForReceiver($name, 
                                  $email, 
                                  $phoneNumber, 
                                  $deviceType, 
                                  $problemType, 
                                  $comments
  );
  
    if($mail->send()){
      $_SESSION["sent"] = true;
      // Confirmation email to sender
      $mailToSender->isSMTP();
      $mailToSender->CharSet  = 'UTF-8';
      $mailToSender->Host = 'smtp.gmail.com';
      $mailToSender->SMTPAuth = true;
      $mailToSender->Username = 'archo.uom@gmail.com'; // Mail address which you want to use as SMTP server
      $mailToSender->Password = 'ctuehjlojwgwadnr'; // Mail address Password
      $mailToSender->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mailToSender->Port = '587';
  
      $mailToSender->setFrom('archo.uom@gmail.com'); // Gmail address which you used as SMTP server
      $mailToSender->addAddress($email);
      $mailToSender->isHTML(true);
      $mailToSender->Subject = "Λάβαμε το Μύνημα Σας!";
      // Mail Body
      $mailToSender->Body = createHTMLmailForSender();
      // Sent confirmation
      $mailToSender->send();

      header("Location: backend/messageSent.php");
    }
    else{
      $_SESSION["sent"] = false;
      header("Location: backend/messageSent.php");
    }
  }

  


?>