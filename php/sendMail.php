<?php
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/OAuth.php';
    require 'PHPMailer/POP3.php';
    require 'PHPMailer/Exception.php';

    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $message = $_POST["message"];
    $subject = $_POST["sujet"];
    $sujet = utf8_decode($subject);
    $sujet = mb_encode_mimeheader($subject,"UTF-8", "B", "\n");
    mysqli_query($bdd,"SET NAMES 'utf8'");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port = 465;
    $mail ->Timeout=5;
    $mail ->IsHTML(true);
    $mail ->Username = "gbengara08@gmail.com";
    $mail ->Password = "20126113ghaythbengara";
    $mail ->SetFrom($email,$nom);
    $mail ->Subject = $sujet;
    $mail ->Body = "<p>$message </p>
    <br>
    <p><b>De :<b/> $email </p>
    <hr>
    e-mail : gbengara08@gmail.com.";
    $mail ->AddAddress("gbengara08@gmail.com");
    if($mail ->Send()){
        echo "Succés";
    }
    else {
        echo "Erreur";
    }
 ?>
