<!DOCTYPE html>
<html>
<head>
	<title>Anonymous| Sign In</title>
</head>
<body>
<?php include('layouts/header.php'); ?>
<section>
	<form action="process/login_user.php" method="POST">
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Enter Username"><br>
		<label>Password</label><br>
		<input type="password" name="password" placeholder="Enter Password"><br>
		<button type="submit">Login</button>
	</form>
</section>
<footer>
	<p>&copy;2020</p>
</footer>
</body>
</html>