<?php



namespace App\Controller;

require_once('../../src/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require_once('../../src/vendor/phpmailer/phpmailer/src/SMTP.php');
require_once('../../src/vendor/phpmailer/phpmailer/src/Exception.php');
require_once('../../src/vendor/autoload.php');



use PhpMailer\PHPMailer\PHPMailer;

use PhpMailer\PHPMailer\SMTP;

use PhpMailer\PHPMailer\Exception;

class ControllerPhpMailer
{

    protected $mail;

    public function EnviarEmail()
    {

        $this->mail = new PHPMailer(true);

        try {

            //Server settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = '6f54f849cc0ccc';                     //SMTP username
            $this->mail->Password   = '20be6f29e79c84';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mail->setFrom('gguicido.viana@gmail.com');
            $this->mail->addAddress('riancontatoprofissional@gmail.com', 'Rian Carlos');     //Add a recipient
            // $this->mail->addCC('cc@example.com');
            // $this->mail->addBCC('bcc@example.com');

            //Attachments
            // $this->mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Here is the subject';
            $this->mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $this->mail->send();

            echo 'Message has been sent';

        } catch (Exception $e) {

            echo $this->mail->ErrorInfo;
        }
    }
}

$obj = new ControllerPhpMailer();

$obj->EnviarEmail();