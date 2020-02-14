<!DOCTYPE html>
<html>
<head>
	<title>Anonymous| Sign Up</title>
</head>
<body>
<?php include('layouts/header.php'); ?>
<section>
	<form action="process/register.php" method="POST" align="center">
		<label>FirstName</label><br>
		<input type="text" name="first_name" placeholder="Enter First Name"><br>
		<label>LastName</label><br>
		<input type="text" name="last_name" placeholder="Enter Last Name"><br>
		<label>Email</label><br>
		<input type="email" name="email" placeholder="Enter Email"><br>
		<label>Phone Number</label><br>
		<input type="number" name="phone" placeholder="Enter Phone Number"><br>
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Enter Username"><br>
		<label>Password</label><br>
		<input type="password" name="password" placeholder="Enter Password"><br>
		<button type="submit">Sign Up</button>
	</form>
</section>
<footer>
	<p>&copy;2020</p>
</footer>
</body>
</html>