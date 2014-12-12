<?php session_start(); ?>
<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
	<head>
		
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

	<h2> Enter participant details: </h2> <br>
		<form action="regnprocess.php" method="post">
			<input type="text" name="rank" placeholder="Enter rank" required><br>
			<input type="text" name="fname" placeholder="Enter full name" required><br>
			<input type="text" name="dname" placeholder="Enter display name" required>(three characters only)<br>
			<input type="text" name="team" placeholder="Enter team" required><br>
			<input type="text" name="points" placeholder="Enter initial points" required><br>
			<input type="submit" value="Submit">
		</form>
		
		<br><br>
		<a href="home.php"><button id="hbut">Home</button></a>
	</body>
</html>