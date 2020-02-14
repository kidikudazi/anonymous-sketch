<?php 
	session_start();
	$page = $_GET['page'];
	$_SESSION['error'] = '';

	header("Location: ../".$page);
?>