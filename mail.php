<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    include(__DIR__.'/enviornment.php');

    $mail = new PHPMailer; 
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.in';
    $mail->SMTPAuth = true;
    $mail->Username = $env_SMTP_Username;
    $mail->Password = $env_SMTP_Password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
     
    // Sender info 
    $mail->From = $env_SMTP_Username;
    $mail->FromName = 'ACM USICT';

    // $mail->WordWrap = 50;

    /*
        configure PHPMAILER composer package run the👇🏻 command in ACM-New directory
        $ php ./composer.phar update

        to send mail import mail.php & configure details 👇🏻
        $mail->addAddress('jainabhishek7204@gmail.com');
        $mail->Subject = 'Hello';
        $mail->Body    = 'Testing some Mailgun awesomness';
        if(!$mail->send()) {
            echo 'Message could not be sent.';
        } else {
            echo 'Message has been sent';
        }
    */

?>