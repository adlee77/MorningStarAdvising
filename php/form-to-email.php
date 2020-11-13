<?php
session_start();
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$subject = $_POST['subject'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'morningstaradvising.com';

$email_subject = "Client Inquiry";

$email_body = "You have received a new message from the user $firstName $lastName.\n".
                "Here is the subject: $subject\n".
                "Here is the message:\n $message".

$to = "andrewimg@gmail.com";

$headers = "From: $email_from \r\n";
              
$headers .= "Reply-To: $visitor_email \r\n";


if (mail($to,$email_subject,$email_body,$headers)) {
    echo "Mail Sent.";
} else {
    echo "failed";
}
?>