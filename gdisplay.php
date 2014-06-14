<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>List of Goal Scorers:</h2><br>
	<table border="1">
		<tr class="h">
			<th>Rank</th>
			<th>Display Name</th>
			<th>Player Name</th>
			<th>Goals</th>
		</tr>
	

<?php
	$i = 1 ;
	$con = mysqli_connect("mysql17.000webhost.com" , "a8304808_root" , "gtztourney6" , "a8304808_GTZ");

	$result = mysqli_query($con , "SELECT * FROM goals ORDER BY tgoals DESC");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<th>" . $i . "</th>";
		echo "<th>" . $row['dname'] . "</th>";
		echo "<th>" . $row['player'] . "</th>";
		echo "<th>" . $row['tgoals'] . "</th>";
		echo "</tr>";
		$i++;
	}
?>



</table>
<br><br>
		<a href="home.php"><button id="hbut">Admin-Home</button></a>
		<br>
		<a href="homeg.php"><button id="hbut">Guest-Home</button></a>
</body>
</html>