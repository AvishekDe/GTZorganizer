<?php
	$conf = parse_ini_file("../config.ini");

	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	$result = mysqli_query($con , "SELECT * FROM central ORDER BY rank");

	$rowArray =array();
	$posts = array();

	while($row = mysqli_fetch_array($result)){
		$rank = $row['rank'];
		$fname = $row['fname'];
		$dname = $row['dname'];
		$team = $row['team'];
		$grp = $row['grp'];

		$rowArray[] = array('rank'=>$rank , 'fname'=>$fname , 'dname'=>$dname , 'team'=>$team , 'grp'=>$grp , );
	}

	$posts['participants']= $rowArray;
	echo json_encode($posts);

	$fp = fopen('participants.json', 'w') or die ("Unable to open");
	fwrite($fp, json_encode($posts));
	fclose($fp);

?>