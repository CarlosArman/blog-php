<?php

include_once("connection/connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$subject = mysqli_real_escape_string($mysqli, $_POST['subject']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

// $fname = "Juanito";
// $email = "info@example.com"; //to test you must enter a real email address
// $subject = "Test";
// $message = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus repudiandae nisi iure dignissimos amet corporis. Neque, quo quia? Modi hic nulla vero voluptatibus omnis totam ipsa doloremque optio similique expedita, illum quae numquam mollitia sed amet repudiandae, iste magnam! Odio sequi nobis ipsum distinctio soluta qui temporibus illo.";


if (strlen($fname) > 50) {
    echo 'fname_long';
} elseif (strlen($fname) < 2) {
    echo 'fname_short';
} elseif (strlen($email) > 50) {
    echo 'email_long';
} elseif (strlen($email) < 2) {
    echo 'email_short';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($subject) > 50) {
    echo 'subject_long';
} elseif (strlen($subject) < 2) {
    echo 'subject_short';
} elseif (strlen($message) > 500) {
    echo 'message_long';
} elseif (strlen($message) < 3) {
    echo 'message_short';
} else {

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        // if you are going to use gmail, you should first disable access to less secure apps. 
        $mail->Username   = 'your email';                     //SMTP username
        $mail->Password   = 'your password';                               //SMTP password
        $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;             //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $fname);
        $mail->addAddress('your email'); //Add a recipient
        $mail->addAddress($email);               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo true;

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
