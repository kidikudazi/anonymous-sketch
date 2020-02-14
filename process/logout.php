<?php 
	// start session
	session_start();

	// destroy all session
	session_unset();
	session_destroy();

	// redirect back
	header("Location: ../index.php");
?>