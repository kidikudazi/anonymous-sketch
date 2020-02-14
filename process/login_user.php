<?php 
	session_start();

	// include connection
	include('../config/connect.php');


	// check and register user
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// collect data
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5(sha1($password));


		// validate login details
		$validateLoginDetails = "SELECT * FROM users WHERE user_name = '".$username."' AND password = '".$password."' ";
		$validateLoginDetailsResult = mysqli_query($connect, $validateLoginDetails);
		$validateLoginDetailsOutput = mysqli_num_rows($validateLoginDetailsResult);
		
		if($validateLoginDetailsOutput > 0){
			// collect user details
			$userDetails = mysqli_fetch_assoc($validateLoginDetailsResult);
			$_SESSION['user_id'] = $userDetails['id'];
			$_SESSION['username'] = $userDetails['user_name'];
			$_SESSION['fullname'] = $userDetails['first_name'].' '.$userDetails['last_name'];

			header("Location: ../index.php");
			exit();
		}else{
			header("Location: ../signin.php");
			exit();
		}
	}


?>