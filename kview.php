<?php session_start(); ?>

<html>
<head></head>
<body>
	<div class="options-title">Knockouts</div>
	<form method="get" action="kviewprocess.php">
		<select name="rnd" id="round-fetch" class="d-buttons">
			<option value="r">Round of 16</option>
			<option value="q">Quarter Finals</option>
			<option value="s">Semi Finals</option>
			<option value="f">Finals</option>
		</select><br>
		<button id="round-select" class="d-buttons formsubmit">Submit</button>
	</form>
	<div id="maincont3"></div>

	<script>
			$('#round-select').click(function(e){
				//Get Selected Value
				var sel = document.getElementById("round-fetch");
				var strUser = sel.options[sel.selectedIndex].value;

				//Load Data through Ajax
			    e.preventDefault();
			    $.ajax({
			        type: "GET",
			        url: "kviewprocess.php",
			        data: {rnd:strUser },
			        success: function(data){
			            $('#maincont3').html(data);
			        }
			    });
			});
		</script>
</body>
</html>