<?php session_start(); ?>

<?php
	$dname1 = $_POST['dname1'];
	$score1 = $_POST['score1'];
	$score2 = $_POST['score2'];
	$dname2 = $_POST['dname2'];

	$con = mysqli_connect("localhost" , "root" , "password" , "GTZorganizer");

	$result = mysqli_query($con , "SELECT * FROM central");
	
	// Home team wins
	if($score1 > $score2)
	{
		while($row = mysqli_fetch_array($result)) {
			if($row['dname'] == $dname1)
			{
				$g = $row['grp'];
				$tplayed = $row['played'] + 1;
				$twon = $row['won'] + 1;
				$tgf = $row['gf'] + $score1;
				$tga = $row['ga'] + $score2;
				$tgd = $row['gd'] + $score1 - $score2;
				$tpoints = $row['points'] + 3;
				//Update
				mysqli_query($con ,"UPDATE central SET played='$tplayed' , won = '$twon' , gf = '$tgf' , ga='$tga' , gd='$tgd' , points='$tpoints' WHERE dname = '$dname1'");
			}
			if($row['dname'] == $dname2)
			{
				$tplayed = $row['played'] + 1;
				$tlost = $row['lost'] + 1;
				$tgf = $row['gf'] + $score2;
				$tgfa = $row['gfa'] + $score2;
				$tga = $row['ga'] + $score1;
				$tgd = $row['gd'] + $score2 - $score1;
				//update
				mysqli_query($con ,"UPDATE central SET played='$tplayed' , lost = '$tlost' , gf = '$tgf' , gfa='$tgfa' , ga='$tga' , gd='$tgd' WHERE dname = '$dname2'");
			}
		}
	}

	//Away Team Wins
	if($score1 < $score2)
	{
		while($row = mysqli_fetch_array($result)) {
			if($row['dname'] == $dname1)
			{
				$g = $row['grp'];
				$tplayed = $row['played'] + 1;
				$tlost = $row['lost'] + 1;
				$tgf = $row['gf'] + $score1;
				$tga = $row['ga'] + $score2;
				$tgd = $row['gd'] + $score1 - $score2;
				//Update
				mysqli_query($con ,"UPDATE central SET played='$tplayed' , lost = '$tlost' , gf = '$tgf' , ga='$tga' , gd='$tgd' WHERE dname = '$dname1'");
			}
			if($row['dname'] == $dname2)
			{
				$tplayed = $row['played'] + 1;
				$twon = $row['won'] + 1;
				$tgf = $row['gf'] + $score2;
				$tgfa = $row['gfa'] + $score2;
				$tga = $row['ga'] + $score1;
				$tgd = $row['gd'] + $score2 - $score1;
				$tpoints = $row['points'] + 3;
				//update
				mysqli_query($con ,"UPDATE central SET played='$tplayed' , won = '$twon' , gf = '$tgf' , gfa='$tgfa' , ga='$tga' , gd='$tgd' , points='$tpoints' WHERE dname = '$dname2'");
			}
		}
	}

	// Teams draw
	if($score1 == $score2)
	{
		while($row = mysqli_fetch_array($result)) {
			if($row['dname'] == $dname1)
			{
				$g = $row['grp'];
				$tplayed = $row['played'] + 1;
				$tdrew = $row['drew'] + 1;
				$tgf = $row['gf'] + $score1;
				$tga = $row['ga'] + $score2;
				$tpoints = $row['points'] + 1;
				//Update
				mysqli_query($con ,"UPDATE central SET played='$tplayed' , drew = '$tdrew' , gf = '$tgf' , ga='$tga' , points='$tpoints' WHERE dname = '$dname1'");
			}
			if($row['dname'] == $dname2)
			{
				$tplayed = $row['played'] + 1;
				$tdrew = $row['drew'] + 1;
				$tgf = $row['gf'] + $score2;
				$tgfa = $row['gfa'] + $score2;
				$tga = $row['ga'] + $score1;
				$tpoints = $row['points'] + 1;
				//update
				mysqli_query($con ,"UPDATE central SET played='$tplayed' , drew = '$tdrew' , gf = '$tgf' , gfa='$tgfa' , ga='$tga' , points='$tpoints' WHERE dname = '$dname2'");
			}
		}
	}


	$sql = mysqli_query($con , "INSERT INTO results (hdname , hscore , ascore , adname , grp) VALUES ('$dname1' , '$score1' , '$score2' , '$dname2' , '$g')");

	
?>

<html>
	<script>
		window.alert("Score Updated Successfully");
		window.location.replace("update.php");
	</script>
</html>