<!DOCTYPE html>
	<head>
		
	</head>
	<body>
		<form action="regnprocess.php" method="post">
			<input type="text" name="rank" placeholder="Enter rank" required><br>
			<input type="text" name="fname" placeholder="Enter full name" required><br>
			<input type="text" name="dname" placeholder="Enter display name" required>(three characters only)<br>
			<input type="text" name="team" placeholder="Enter team" required><br>
			<select name="grp">
				<option value="A">Group A</option>
				<option value="B">Group B</option>
				<option value="C">Group C</option>
				<option value="D">Group D</option>
				<option value="E">Group E</option>
				<option value="F">Group F</option>
				<option value="G">Group G</option>
				<option value="H">Group H</option>
			</select><br>
			<input type="submit" value="Submit">
		</form>
		
		<br><br>
		<a href="index.php"><button id="hbut">Home</button></a>
	</body>
</html>