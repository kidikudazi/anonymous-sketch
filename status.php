<!DOCTYPE html>
<html>
<head>
	<title>Anonymous</title>
</head>
<body>
<?php include('layouts/header.php'); ?>
<section>
	<?php 

		if(!empty($_SESSION['success'])){
	?>

		<div>
			<p><?php echo $_SESSION['success']; ?> &nbsp;&nbsp;&nbsp; <a href="functions/remove_success.php?page=status.php">&times;</a></p>
		</div>
	<?php 

		}
	?>

	<?php 

		if(!empty($_SESSION['error'])){
	?>

		<div>
			<p><?php echo $_SESSION['error']; ?> &nbsp;&nbsp;&nbsp; <a href="functions/remove_error.php?page=status.php">&times;</a></p>
		</div>
	<?php 

		}
	?>
	<form action="process/create_status.php" method="POST" align="center">
		<label>Enter New Status</label><br>
		<textarea rows="20" cols="50" style="resize: none;" name="status"></textarea>
		<button type="submit" class="btn">Post</button>
	</form>

	<article class="status-view">
		<ul id="statuslist">
			<?php include('process/fetch_user_status.php'); ?>
		</ul>
	</article>
</section>
<footer>
	<p>&copy;2020</p>
</footer>
</body>
</html>