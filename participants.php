<?php session_start(); ?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>List of participants:</h2><br>
	<table border="1">
		<tr class="h">
			<th>Rank</th>
			<th>Name</th>
			<th>Display Name</th>
			<th>Group</th>
		</tr>
	

<?php
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	$result = mysqli_query($con , "SELECT * FROM central ORDER BY rank");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<th>" . $row['rank'] . "</th>";
		echo "<th>" . $row['fname'] . "</th>";
		echo "<th>" . $row['dname'] . "</th>";
		echo "<th>" . $row['grp'] . "</th>";
		echo "</tr>";
	}
?>



</table>
<br><br>
		<a href="home.php"><button id="hbut">Admin-Home</button></a>
		<br>
		<a href="homeg.php"><button id="hbut">Guest-Home</button></a>
</body>
</html>