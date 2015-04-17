<?php session_start(); ?>

<html>
<head></head>
<body>
	<h2>Enter Knockout stage to proceed:</h2><br>
	<form method="get" action="kviewprocess.php">
		<select name="rnd">
			<option value="r">Round of 16</option>
			<option value="q">Quarter Finals</option>
			<option value="s">Semi Finals</option>
			<option value="f">Finals</option>
		</select><br>
		<input type="submit" value="Submit">
	</form>

	<br><br>
</body>
</html>