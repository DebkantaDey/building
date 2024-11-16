<?php
 //$requestHeaders = apache_request_headers();
 //print_r($requestHeaders);



$field_name = $_POST['name']; 

$field_email = $_POST['email']; 

$subject_mail = $_POST['subject'];

$message = $_POST['message'];


$field_phone = $_POST['phone'];



$mail_to = 'bdbrickworklimited@gmail.com';
//$mail_to = 'sourav.aotwo@gmail.com';

$subject = 'Sub: Enquiry From Website';
$body_message = '<b>A new customer has submitted an enquiry through contact form on your website. The details are as follows:</b>'."<br />";

$body_message .= 'From: '.$field_name."<br />";
$body_message .= 'E-mail: '.$field_email."<br />";
$body_message .= 'phone: '.$field_phone."<br />";
$body_message .= 'Subject: '.$subject_mail."<br />".'Message: '.$message;





$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { 
	echo "1";
}
else { 
	echo "0";
}
?>