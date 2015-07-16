<?php

ob_start();

$errors = '';
$myemail = 'rachel@makeityou.co.nz';

if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['subject'])||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$purchase = $_POST['purchase'];
$cardtype = $_POST['cardtype'];
$promo = $_POST['promo'];
$cardselected = $_POST['cardselected'];
$message = $_POST['message'];



if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail;
	$email_subject = "Make it you enquiry submission: $name";
	$email_body = "You have received a new enquiry. ".
	" Here are the details:\n \n Name: $name \n ".
	"Email: $email_address\n Subject: $subject \n";

	if(purchase == "Card") $email_body += "Card type: $cardtype \n Card: $cardselected \n";
	else if(purchase == "Scrapbook") $email_body += "Scrapbook chosen \n ";

	if(promo != "") $email_body += "Promo code: $promo \n \n";

	$email_body += "Message: \n $message";
	
		//redirect to the 'thank you' page
	header('Location: thankyou.html');

	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email_address";
	mail($to,$email_subject,$email_body,$headers);
} else
{
	echo($errors);
}