<?php

namespace App\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../../src/vendor/autoload.php';
require_once("../../src/vendor/phpmailer/phpmailer/src/SMTP.php");
require_once("../../src/vendor/phpmailer/phpmailer/src/PHPMailer.php");
require_once("../../src/vendor/phpmailer/phpmailer/src/Exception.php");


class ControllerPhpMailer
{
    private $mail;
    private $resultado;

    public function __construct($codigo, $emailUsuario)
    {
        $this->mail = new PHPMailer(true);

        try {
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $this->mail->isSMTP();
            $this->mail->Host       = 'smtp.gmail.com';
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = 'i007rian@gmail.com';
            $this->mail->Password   = "86042781sa";
            $this->mail->Port       = 587;

            $this->mail->setFrom('i007rian@gmail.com');
            $this->mail->addAddress('gguicido.viana@gmail.com');

            $this->mail->isHTML(true);
            $this->mail->Subject = 'Here is the subject';
            $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            return $this->resultado = $this->mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
}

$new = new ControllerPhpMailer('', '');
