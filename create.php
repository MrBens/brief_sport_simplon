<?php
require_once 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (
    isset($_POST['nom'], $_POST['prenom'], $_POST['num'], $_POST['mail'], $_POST['sujet'], $_POST['message'])
    && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['num']) && !empty($_POST['mail']) && !empty($_POST['sujet']) && !empty($_POST['message'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['num'];
    $email = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $sql = "INSERT INTO messages (`nom`, `prenom`, `tel`, `mail`, `sujet`, `message`) VALUES ('$nom', '$prenom', '$tel', '$email', '$sujet', '$message')";
    
    if (mysqli_query($sqli, $sql)) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_CLIENT;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'benji050197@gmail.com';               //SMTP username
            $mail->Password   = 'bxxzyyjyjdzzbqpy';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            $mail->setFrom($email, 'CONTACT ' . $nom . ' ' . $prenom);
            $mail->addAddress('benji050197@gmail.com', $nom . ' ' . $prenom);     //Add a recipient
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $sujet;
            $mail->Body    = $message;
            $mail->send();

            
            //Recipients
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            //Content
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        header('location: messages.php');
    }else{
        echo 'error';
    }
}