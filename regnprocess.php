<?php session_start(); ?>

<?php
	$grp="";
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);
	$flag=0;

	$rank = $_POST['rank'];
	$fname = $_POST['fname'];
	$dname = $_POST['dname'];
	$team = $_POST['team'];

	

	
	while(true){
		$random=rand(1,8);
		$pot=(int)(($rank-1)/8);
		$position=($pot*8)+$random;

		$result=mysqli_query($con,"SELECT * FROM randomizer WHERE rank='$position'");
		$row = mysqli_fetch_array($result);

		if($row==null){
			mysqli_query($con,"INSERT INTO randomizer (rank) VALUES ('$position')");
			$flag=1;
			break;
		}
	}	
		$grp = chr($random+64);	?>

		<html><script> var grouping = '<?php echo $grp; ?>'; </script></html>

	<?php $points = $_POST['points'];

	

	mysqli_query($con , "INSERT INTO central (rank , fname , dname , team , grp , points) VALUES ('$rank' , '$fname' , '$dname' , '$team' , '$grp' , '$points')"); 
?>


<html>
	<script>
		window.alert("Registration Successful. Placed in Group "+grouping);
		window.location.replace("registration.php");
	</script>
</html>