<?php
$myemail = 'amrits3624@gmail.com';

$to = $myemail;
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
//header('Location: http://singhamrit.me/');
?>

