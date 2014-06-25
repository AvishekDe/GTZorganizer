<?php session_start(); ?>
<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>

<html>
	<head></head>
	<body>
		<table style="float:right;" border="1">
		<tr>
			<th>Name</th>
			<th>Display Name</th>
			<th>Group</th>
		</tr>
	

<?php
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	$result = mysqli_query($con , "SELECT * FROM central ORDER BY dname");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<th>" . $row['fname'] . "</th>";
		echo "<th>" . $row['dname'] . "</th>";
		echo "<th>" . $row['grp'] . "</th>";
		echo "</tr>";
	}
?>

</table>
		<h2>Update Knockout Stage Results:</h2> <br> <br>
		<form method="post" action="kupdateprocess.php">
			<select name="rnd">
				<option value="r">Round of 16</option>
				<option value="q">Quarter Finals</option>
				<option value="s">Semi Finals</option>
				<option value="f">Finals</option>
			</select><br>
			<input type="text" name="tone" placeholder="Enter display name" required>
			<input type="text" name="hscore" placeholder="Enter home score" required> - 
			<input type="text" name="ascore" placeholder="Enter away score" required>
			<input type="text" name="ttwo" placeholder="Enter display name" required><br>
			<input type="submit" value="Submit"><br>
		</form>

		<br><br>
		<a href="home.php"><button id="hbut">Home</button></a>
	</body>
</html>