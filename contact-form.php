<?php
/* 
	$visitor_email = $_POST['message'];
	
	$email_from = 'dani@mmtuts.net';
	
	$email_subject = "New form submission";
	
	$email_body = "User Name: $Name.\n".
				  "User Email:$visitor_email.\n".
				  "User Message:$message.\n";
					   
	$to="saumyavkg1500@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $visitors_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: contactpage.html");
 */
 if($_POST["message"]){
	 mail("saumyavkg1500@gmail.com" , "Form to email message" , $_POST["Message"] , "From: an@email.address" )
 }
 ?> 
