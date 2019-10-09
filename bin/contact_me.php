<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body	
$to = 'greg.rothstein@gprwebdesignservices.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "New Message From:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@gprwebdesignservices.com\n";
$headers .= "Reply-To: $email_address";

//create confirmation Email body
$confirmedsubject = "Thank you, your message has been recieved.";
$confirmedheaders = "From: Gregory Rothstein\n";
$confirmedmessage = "Your request has been recieved.";

//send it
mail($to,$email_subject,$email_body,$headers);
mail($email_address,$confirmedsubject,$confirmedmessage,$confirmedheaders);
return true;			
?>