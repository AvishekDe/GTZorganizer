<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
	</head>
	<body>
		<div class="options-title">Points Table </div>
		<form method="get" action="displayprocess.php">
			<select id="group-fetch" class="d-buttons" name="gname">
				<option value="A">Group A</option>
				<option value="B">Group B</option>
				<option value="C">Group C</option>
				<option value="D">Group D</option>
				<option value="E">Group E</option>
				<option value="F">Group F</option>
				<option value="G">Group G</option>
				<option value="H">Group H</option>
				<option value="X">All Groups</option>
			</select><br>
			<button id="group-select" class="d-buttons formsubmit">Submit</button>
		</form>
		<div id="maincont"></div>

		<script>
			$('#group-select').click(function(e){
				//Get Selected Value
				var sel = document.getElementById("group-fetch");
				var strUser = sel.options[sel.selectedIndex].value;

				//Load Data through Ajax
			    e.preventDefault();
			    $.ajax({
			        type: "GET",
			        url: "displayprocess.php",
			        data: {gname:strUser },
			        success: function(data){
			            $('#maincont').html(data);
			        }
			    });
			});
		</script>
	</body>
</html>