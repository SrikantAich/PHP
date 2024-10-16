<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$to = 'test@example.com';
$subject = 'Test Email';
$message = 'This is a test email using MailHog on Windows.';
$headers = 'From: webmaster@example.com' . "\r\n" .
// 'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
echo 'Email sent successfully!';
} else {
echo 'Failed to send email.';
}
?>

</body>
</html>