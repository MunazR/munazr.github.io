<?php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {
	
	
	$to = 'contact@munaz.me';	// insert your email for contacts form sending data
	$subject = stripslashes($_POST['name']) ." via profile site";
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);	
	$message = trim($_POST['message']);		
	$message = "$message";
	$message.="---Best regards, $name $email";		
	$Reply= $email;
	$from= $name;	
			
	// Let's send the email.
		
	$headers = "from: $from <$Reply>\nReply-To: $Reply \nContent-type: text/html";
	
	$mail = mail($to, $subject, $message);	
	
	if($mail) {
		echo 'Your email has been sent successfully. I will try and contact you back within the next few days. Thank you for your patience.';
		}
}
?>