<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'zaynmansueto23@gmail.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n".;




$to = 'unseenblade9@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email\r\n";

main($to,$email_subject,$email_body,$headers);

header("Location: contact.html");





?>