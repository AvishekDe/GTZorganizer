<?php session_start(); ?>

<!DOCTYPE html>
<head></head>
<body>
	<div class="options-title"> Results </div>
	<form method="get" action="vresultsprocess.php">
			<select name="gname" id="results-fetch" class="d-buttons">
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
			<button id="results-select" class="d-buttons formsubmit">Submit</button>	
		</form>
		<div id="maincont2"></div>

		<script>
			$('#results-select').click(function(e){
				//Get Selected Value
				var sel = document.getElementById("results-fetch");
				var strUser = sel.options[sel.selectedIndex].value;

				//Load Data through Ajax
			    e.preventDefault();
			    $.ajax({
			        type: "GET",
			        url: "vresultsprocess.php",
			        data: {gname:strUser },
			        success: function(data){
			            $('#maincont2').html(data);
			        }
			    });
			});
		</script>
</body>
</html>