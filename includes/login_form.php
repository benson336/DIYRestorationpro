<?php
//require_once("database.php");
//require_once("users.php");

if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if(!empty($username) && !empty($password)){

		$database = new Database();
		$db = $database->connect();

		$user = new Users($db);
		$user->verify_user($username, $password);

	} if (empty($username)){
		$username_error = 'Please enter username';
	} if (empty($password)){
		$password_error = 'Please enter the password';
	} 
}




?>