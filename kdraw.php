<?php session_start(); ?>
<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>

<html>
	<head>
		<style type="text/css">
			input {
				width:250px;
			}
		</style>
	</head>
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

		<h3>Enter the draw for knockout stages:</h3><br>
		<form method="post" action="kdrawprocess.php">
			<select name="rnd">
				<option value="r">Round of 16</option>
				<option value="q">Quarter Finals</option>
				<option value="s">Semi Finals</option>
				<option value="f">Finals</option>
			</select><br>
			<input type="text" name="mn" placeholder="Enter match number"> (unique for each set of players) (Start with 1 and increase to 8/4/2/1)<br>
			<input type="text" name="tone" placeholder="Enter Display name of first player" required><br>
			<input type="text" name="ttwo" placeholder="Enter Display name of second player" required><br>
			<input type="submit" value="Submit"><br>
		</form>

		<br><br>
		<a href="home.php"><button id="hbut">Home</button></a>
	</body>
</html>