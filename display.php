<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		
	</head>
	<body>
		Enter group Name for Displaying Points Table <br>
		<form method="get" action="displayprocess.php">
			<select name="gname">
				<option value="A">Group A</option>
				<option value="B">Group B</option>
				<option value="C">Group C</option>
				<option value="D">Group D</option>
				<option value="E">Group E</option>
				<option value="F">Group F</option>
				<option value="G">Group G</option>
				<option value="H">Group H</option>
				<option value="X">All Groups</option>
			</select><br>
			<input type="submit" value="Submit"><br>
		</form>

		<br><br>
		<a href="home.php"><button id="hbut">Admin-Home</button></a>
		<br>
		<a href="homeg.php"><button id="hbut">Guest-Home</button></a>
	</body>
</html>