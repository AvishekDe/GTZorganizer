<?php session_start(); ?>

<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
	<title>
		
	</title>
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
<h2>Enter match details:</h2><br>
		<form method="post" action="updateprocess.php">
			<input type="text" name="dname1" placeholder="Enter Display Name" required>
			<input type="text" name="score1" placeholder="Enter score" required> &nbsp - &nbsp
			<input type="text" name="score2" placeholder="Enter score" required>
			<input type="text" name="dname2" placeholder="Enter Display Name" required><br>
			<input type="submit" value="submit">
		</form>

		<br><br>
		<a href="home.php"><button id="hbut">Home</button></a>
	</body>
</html>