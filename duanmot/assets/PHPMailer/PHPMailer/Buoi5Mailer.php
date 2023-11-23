<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
class Mailer
{
// Create an instance; passing `true` enables exceptions
 public function sendMail($content, $title, $addressMail)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'toan2211w1@gmail.com'; // SMTP username
        $mail->Password = 'zmti aemh gncd ycqb'; // SMTP password
        $mail->SMTPSecure = "ssl"; // Enable implicit TLS encryption
        $mail->Port = 465;
        $mail->setFrom('toanncps32635@fpt.edu.vn', 'Nguyen Ty Phu');
        $mail->addAddress($addressMail); // Name is optional

        // Content
        $mail->isHTML(true); 
        $mail->Subject = $title;
        $mail->Body = $content;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
}

?>
