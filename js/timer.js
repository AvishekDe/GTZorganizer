$(document).ready(function(){
	$('#timer').ClassyCountdown({
    theme: "flat-colors-wide",
    end: $.now() + (1434339000000-$.now())/1000, 
});
});