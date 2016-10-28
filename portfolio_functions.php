<?php

ini_set('display_errors', '1');

//$func = !empty($_POST['func']) ? $_POST['func'] : null;
$func = !empty($_GET['func']) ? $_GET['func'] : null;

//$name = !empty($_GET['name']) ? $_GET['name'] : null;
//$email = !empty($_GET['email']) ? $_GET['email'] : null;
//$phone = !empty($_GET['phone']) ? $_GET['phone'] : null;
//$message = !empty($_GET['message']) ? $_GET['message'] : null;

//function send_email($name, $email, $phone, $message) {
	function send_email() {
	//FILTER_VALIDATE_URL
/*	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// invalid email address
	}
*/	
	$from = 'From: rybarczyk.julie@gmail.com';
	
	$style = 'Content-Type: text/html;charset=ISO-8859-1';
	
	$cc = "";
	$cc = 'CC: ' . $cc;
	
	$message = "test";
	$subject = "test";
	
	$to = "rybarczyk.julie@gmail.com";

	$mail_result = mail($to, $subject, $message, $from . "\r\n" . $style . "\r\n" . $cc . "\r\n");
	
	echo $mail_result;
}

switch($func) {
	case "send_email":
		//send_email($name, $email, $phone, $message);
		send_email();
		break;
	default: 
		$func_call_error = array(
			"error"	=> "An invalid function name was called: " . $func
		);
		echo json_encode($func_call_error);
		break;
}
?>