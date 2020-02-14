<?php
	session_start();
?>
<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php if(empty($_SESSION['username'])){ ?>
				<li><a href="signin.php">Sign In</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			<?php }else{?>
				<li><?php echo $_SESSION['fullname']; ?></li>
				<li><a href="status.php">Status</a></li>
				<li><a href="process/logout.php">Logout</a></li>
			<?php }?>
		</ul>
	</nav>
</header>