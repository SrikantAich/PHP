=<?php
require 'vendor/autoload.php'; // Use Composer autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create an instance of PHPMailer
$mail = new PHPMailer(true); // Passing `true` enables exceptions

try {
    // Server settings
    $mail->SMTPDebug  = 0;                      // Disable debug output (use 2 for detailed debug)
    $mail->isSMTP();                             // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';        // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                    // Enable SMTP authentication
    $mail->Username   = 'srikantaich01@gmail.com';  // SMTP username
    $mail->Password   = 'kaioikluqiwfgjth';   // SMTP password (use App Password if 2FA is enabled)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port       = 587;                     // TCP port to connect to


    // Recipients
    $mail->setFrom('srikantaich01@gmail.com', 'Srikant'); // Ensure this matches the authenticated email
    $mail->addAddress('1062000k@gmail.com', 'Srikant'); // Add a recipient
    // $mail->addReplyTo('', '');
    // $mail->addCC('1062000k@gmail.com', 'Srikant');
    // $mail->addBCC('bcc-recipient-email@domain.com'); // Optional BCC


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Email sent via Gmail SMTP Server using PHPMailer';
    $mail->Body    = '<b>Test Email 🫠</b>';
    $mail->AltBody = 'This is a test email sent via Gmail SMTP Server using PHPMailer.'; // For non-HTML email clients

    $mail->send();
    echo 'Email has been sent successfully';
}
 catch (Exception $e) {
    echo "Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}";
}
?>