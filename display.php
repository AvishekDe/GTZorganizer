<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
	</head>
	<body>
		<div class="options-title">Points Table </div>
		<form method="get" action="displayprocess.php">
			<select class="d-buttons" name="gname">
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
			<input class="d-buttons formsubmit" type="submit" value="Submit"><br>
		</form>
	</body>
</html>