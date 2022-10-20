<?php
//ini_set('display_errors', 1 );
ini_set('Show errors here', 1);
error_reporting(E_ALL);
//Write your Email Test address here
$from = 'jmattz23@hotmail.com';
//Write the email address you are sending the email to
$to = 'alfred.mattz@gmail.com';
$subject = 'PHP Mail Test';
$message = 'This is a simple test to check if your PHP Mail works';
//Remember the header parameter is optional
$headers = 'From:' . $from;
mail($to, $subject, $message, $headers);
$sent_mail = mail ($to, $subject, $message, $headers, '-fwebmaster@example.com');
$error_message = 'Mail not sending';
if ($sent_mail) echo 'Mail sent successfully!';
else echo $error_message;
?>

