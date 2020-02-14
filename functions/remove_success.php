<?php 
	session_start();
	$page = $_GET['page'];
	$_SESSION['success'] = '';

	header("Location: ../".$page);
?>