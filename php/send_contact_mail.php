<?php
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';
  require 'phpmailer/OAuth.php';
  require 'phpmailer/POP3.php';
  require 'phpmailer/Exception.php';

  $nom = $_POST['nom'];
  $sujet = $_POST['prenom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail ->IsSmtp();
  $mail ->SMTPDebug = 0;
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = 'smtp.gmail.com';
  $mail ->Port = 465;
  $mail ->Timeout = 5;
  $mail ->IsHTML(true);
  $mail ->Username = 'gbengara08@gmail.com';
  $mail ->Password = '20126113ghaythbengara';
  $mail ->SetFrom($email,$prenom);
  $mail ->Subject = $objet;
  $mail ->Sender = ($email);
  $mail ->Body = "<p>$message </p>
                  <br>
                  <p><b>De :<b/> $email </p>
                  <hr>
                  e-mail : gbengara08@gmail.com";
  $mail ->AddAddress('gbengara08@gmail.com');
  $mail ->CharSet = 'UTF-8';
  $mail->send();
?>
