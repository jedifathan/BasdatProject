<!DOCTYPE html>
<html>
<head>
	<title>Pet House</title>
</head>

<body>
	<header>
        <h2>Pet House</h2>
		<h3>We Are Happy Family</h3>
	</header>

	<h4>New user? Sign Up First!</h4>
	<nav>
		<ul>
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="login.php">Sign In</a></li>
		</ul>
	</nav>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'success'){
				$message = "Data saved successfully";
				echo "<script type='text/javascript'>alert('$message');</script>";
			} else {
				$message = "Something went wrong i guess ...";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
