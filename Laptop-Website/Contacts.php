<?php

// These lines will post the user's details within the email
$fullname = $_POST['full-name'];
$visitor_email = $_POST['email'];
$phonenumber = $_POST['phone-number'];
$message = $_POST['message'];

$email_from = 'sebastian_poiana_2007@yahoo.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Telephone: $phonenumber.\n".
              "User Message: $message.\n";

// Enquiries will be received on this email
$to = "sebastianpoiana2015@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contacts.html");

?>