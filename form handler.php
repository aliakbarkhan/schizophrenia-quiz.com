<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from='https://aliakbarkhan.github.io./';

$email_subject='New Form Submission';

$email_body="Username:$name.\n".
    "User email:$visitor_email.\n".
    "Subject:$subject.\n"
    "User message:$message.\n";
$to ='ali.khan20@vit.edu';


$headers ="from:$email_from \r\n";

$headers .="reply-to:$visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>
