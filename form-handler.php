<?php
$name = $_POST['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];
$email_from = 'ghimireanish36@gmail.com';
$email_subject = 'New Form Submission';

$email_body =  "User Name: $name.\n". 
                  "User Name: $name.\n". 
                  "User Name: $name.\n". 
                   "User Name: $name.\n";


 $to = 'itsmeanis13@gmail.com';
 $headers = "From: $email_from \r\n";
 
 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html");
?>