<?php
$warning = '';
$greeting = '';

//Check if post request submited
if(isset($_POST['submit'])){
	//Prevent spam, automated submission Field
	if(isset($_POST['preventSpam']) && !empty($_POST['preventSpam'])){
		die();
	}
	//Save into variable
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	//NOT empty
	if(!empty($username) && !empty($password) && !empty($email) && !empty($phone)){
		//Validate EMAIL
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false && is_numeric($phone) === false){
			$warning = "Please enter valid EMAIL and PHONE";
		} else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			$warning = "Please enter valid EMAIL";
		} else if (is_numeric($phone) === false) {
			$warning = "Please enter valid PHONE";
		} else {
			$greeting = 'Thank you for registering!';
			$database = new Database();
			$db = $database->connect();

			$user = new Users($db);
			$user->username = $username;
			$user->password = password_hash($password, PASSWORD_DEFAULT);
			$user->email = $email;
			$user->phone = $phone;
			$user->create();
			
		}
	} if (empty($username)){
		$username_error = 'Please enter username';
	} if (empty($password)){
		$password_error = 'Please enter the password';
	} if (empty($email)){
		$email_error = 'Please enter the email';
	} if (empty($phone)){
		$phone_error = 'Please enter the phone';
	}



} 












?>

