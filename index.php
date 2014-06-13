<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		
	</head>

	<body>
		<form method="post" action="admintest.php">
			<input type="text" name="user" placeholder="Enter user name">
			<input type="password" name="pass" placeholder="Enter password">
			<input type="submit" value="Enter as Admin">
		</form><br>
		<h2> or <h2><br>

		<a href="homeg.php"><button>Enter as Guest</button></a>
	</body>
</html>