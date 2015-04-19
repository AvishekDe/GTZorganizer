<?php session_start(); ?>

<!DOCTYPE html>
<head></head>
<body>
	<div class="options-title"> Enter group name to view results </div>
	<form method="get" action="vresultsprocess.php">
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
</body>
</html>