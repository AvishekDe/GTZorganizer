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
	$con = mysqli_connect("localhost" , "root" , "password" , "GTZorganizer");

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
	
	<h2>Enter details:</h2><br>
	<form action="ugoalsprocess.php" method="post">
		<input type="text" name="dname" placeholder="Enter display name"> <br>
		<input type="text" name="player" placeholder="Enter player name"> (use correct spelling) <br>
		<input type="text" name="goals" placeholder="Enter number of goals"><br>
		<input type="submit" value="submit">
	</form>

	<br><br>
		<a href="home.php"><button id="hbut">Home</button></a>
</body>
</html>