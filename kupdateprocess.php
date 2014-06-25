<?php session_start(); ?>
<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>

<?php
	$rnd = $_POST['rnd'];
	$tone = $_POST['tone'];
	$hscore = $_POST['hscore'];
	$ascore = $_POST['ascore'];
	$ttwo = $_POST['ttwo'];

	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	mysqli_query($con , "UPDATE knockouts SET hscore='$hscore' , ascore='$ascore' WHERE round='$rnd' AND hdname='$tone'");
?>	

<html>
	<script>
		window.alert("Score Updated Successfully");
		window.location.replace("kupdate.php");
	</script>
</html>