<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    include(__DIR__.'/enviornment.php');

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.mailgun.org';
    $mail->SMTPAuth = true;
    $mail->Username = $env_SMTP_Username;
    $mail->Password = $env_SMTP_Password;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->From = $env_SMTP_Username;
    $mail->FromName = 'ACM USICT';    

    $mail->WordWrap = 50;

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