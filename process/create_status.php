<?php 
	session_start();

	// connect to db
	include('../config/connect.php');


	// check and create new status
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// collect data
		$user_id = $_SESSION['user_id'];
		$user_status = $_POST['status'];

		// validate if user exist
		$validateUserId = "SELECT id FROM users WHERE id = ".$user_id."";
		$validateUserIdResult = mysqli_query($connect, $validateUserId);
		$validateUserIdOutput = mysqli_num_rows($validateUserIdResult);

		if($validateUserIdOutput < 1){
			$_SESSION['error'] = 'Failed to create status. Try again later.';
			header("Location: ../status.php");
			exit();
		}


		// create new status for user
		$createUserStatus = "INSERT INTO status (user_id, user_status) VALUES (".$user_id.", '".$user_status."') ";

		if(mysqli_query($connect, $createUserStatus)){
			$_SESSION['success'] = 'Status Created Successfully';
			header("Location: ../status.php");
			exit();
		}
	}

?>