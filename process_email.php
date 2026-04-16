<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;             
use PHPMailer\PHPMailer\Exception;

//require 'vendor/autoload.php';

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);

try {
    // SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'thandolwethu.dlamini1509@gmail.com';
    $mail->Password   = 'yvarzeztslafhumk'; // NOT your normal password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // FORM DATA
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $msg   = $_POST["msg"];

    // EMAIL CONTENT
    $mail->setFrom($email, $name);
    $mail->addAddress('thandolwethu.dlamini1509@gmail.com');

    $mail->isHTML(false);
    $mail->Subject = 'Contact Form Message';
    $mail->Body    = "Name: $name\nEmail: $email\nMessage: $msg";

    $mail->send();
    echo  "<script> alert('Successfully sent message!');
        window.open('contact_us.php','_self');
        </script>";
		;

} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

?>