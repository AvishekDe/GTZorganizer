<?php session_start(); ?>

<?php
	$rank = $_POST['rank'];
	$fname = $_POST['fname'];
	$dname = $_POST['dname'];
	$team = $_POST['team'];
	$grp = $_POST['grp'];
	$points = $_POST['points'];

	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	mysqli_query($con , "INSERT INTO central (rank , fname , dname , team , grp , points) VALUES ('$rank' , '$fname' , '$dname' , '$team' , '$grp' , '$points')"); 
?>

<html>
	<script>
		window.alert("Registration Successful");
		window.location.replace("registration.php");
	</script>
</html>