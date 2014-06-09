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
				<option value="a">Group A</option>
				<option value="b">Group B</option>
				<option value="c">Group C</option>
				<option value="d">Group D</option>
				<option value="e">Group E</option>
				<option value="f">Group F</option>
				<option value="g">Group G</option>
				<option value="h">Group H</option>
			</select><br>
			<input type="submit" value="Submit">
		</form>
		
		<br><br>
		<a href="index.php"><button id="hbut">Home</button></a>
	</body>
</html>