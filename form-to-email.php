<?php
if(lisset($_POST['submit']))
{
  echo "error; you need to submit the form";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
  echo "Name and email are mandatory";
  exit;
}

$email_form = 'francisbessette07@gmail.com';
$email_subject = 'New Contact Submisson';
$email_body = 'Name: $name \n Email: $visitor_email \n Message: $message';
$to = 'francisbessette07@gmail.com';
$headers = "From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);
?>
