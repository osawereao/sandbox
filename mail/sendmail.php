<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$id = mt_rand();
$from = "support@domain.com";
$to = "eirc.vaig@gmail.com";
$subject = "SendMail - ".$id;
$message = "Hello, just checking if mail works just fine";
$headers = "From:" . $from;
if(mail($to,$subject,$message, $headers)){
	echo "ID: {$id} <br> Email sent to {$to}";
} else {
	echo "The email message was not sent.";
}
?>