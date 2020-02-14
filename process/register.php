<?php 
	// include connection
	include('../config/connect.php');


	// check and register user
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// collect data
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5(sha1($password));


		// validate email
		$validateEmail = "SELECT email FROM users WHERE email = '".$email."'";
		$validateEmailResult = mysqli_query($connect, $validateEmail);
		$validateEmailOutput = mysqli_num_rows($validateEmailResult);

		if($validateEmailOutput > 0){
			header("Location: ../signup.php");
			exit();
		}

		// validate phone
		$validatePhone = "SELECT phone FROM users WHERE phone = '".$phone."'";
		$validatePhoneResult = mysqli_query($connect, $validatePhone);
		$validatePhoneOutput = mysqli_num_rows($validatePhoneResult);

		if($validatePhoneOutput > 0){
			header("Location: ../signup.php");
			exit();
		}


		// validate username
		$validateUsername = "SELECT user_name FROM users WHERE user_name = '".$username."'";
		$validateUsernameResult = mysqli_query($connect, $validateUsername);
		$validateUsernameOutput = mysqli_num_rows($validateUsernameResult);

		if($validateUsernameOutput > 0){
			header("Location: ../signup.php");
			exit();
		}


		// register user
		$registerUser = "INSERT INTO users (first_name, last_name, email, phone, user_name, password) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$phone."', '".$username."', '".$password."') ";


		if(mysqli_query($connect, $registerUser)){
			header("Location: ../signin.php");
			exit();
		}
	}

 ?>