<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

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
    $mail->setFrom('srikantaich01@gmail.com', 'Your Name'); // Ensure this matches the authenticated email
    $mail->addAddress('1062000k@gmail.com', 'Recipient Name'); // Add a recipient
    $mail->addReplyTo('reply-to-email@domain.com', 'Reply-To Name');
    $mail->addCC('cc-recipient-email@domain.com', 'CC Recipient Name');
    // $mail->addBCC('bcc-recipient-email@domain.com'); // Optional BCC

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Email sent via Gmail SMTP Server using PHPMailer';
    $mail->Body    = '<b>This is a test email sent via Gmail SMTP Server using PHPMailer.</b>';
    $mail->AltBody = 'This is a test email sent via Gmail SMTP Server using PHPMailer.'; // For non-HTML email clients

    $mail->send();
    echo 'Email has been sent successfully';
} catch (Exception $e) {
    echo "Email could not be sent. PHPMailer Error: {$mail->ErrorInfo}";
}
?>
