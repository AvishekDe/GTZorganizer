<?php session_start(); ?>

<?php
	$rank = $_POST['rank'];
	$fname = $_POST['fname'];
	$dname = $_POST['dname'];
	$team = $_POST['team'];
	$grp = $_POST['grp'];

	$con = mysqli_connect("localhost" , "root" , "password" , "GTZorganizer");

	mysqli_query($con , "INSERT INTO central (rank , fname , dname , team , grp) VALUES ('$rank' , '$fname' , '$dname' , '$team' , '$grp')"); 
?>

<html>
	<script>
		window.alert("Registration Successful");
		window.location.replace("registration.php");
	</script>
</html>