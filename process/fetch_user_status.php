<?php

	// include connection
	include('config/connect.php');

	// collect user id
	$user_id = $_SESSION['user_id'];
	
	// fetch all user status
	$fetchUserStatus = "SELECT * FROM status WHERE user_id = ".$user_id." ORDER BY created_at DESC";
	$fetchUserStatusResult = mysqli_query($connect, $fetchUserStatus);
	$fetchUserStatusOutput = mysqli_num_rows($fetchUserStatusResult);

	if($fetchUserStatusOutput > 0){
		while($row= mysqli_fetch_assoc($fetchUserStatusResult)){
			echo "<li>".$row['user_status']."</li>";
		}
	}else{
		echo "<li class='danger'>No Status Found</li>";
		return;
	}

 ?>