<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once '../../src/vendor/autoload.php';
require_once("../../src/vendor/phpmailer/phpmailer/src/SMTP.php");
require_once("../../src/vendor/phpmailer/phpmailer/src/PHPMailer.php");
require_once("../../src/vendor/phpmailer/phpmailer/src/Exception.php");

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'riancontatoprofissional@gmail.com';
    $mail->Password   = "<senha aqui>";
    $mail->SMTPSecure = 'TSL';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('riancontatoprofissional@gmail.com', 'Mailer');
    $mail->addAddress('riancontatoprofissional@gmail.com', 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
