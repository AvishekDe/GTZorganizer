$(document).ready(function(){

    $("#prevwinleftscroll").click(function(){
        $("#prevwincontainer").animate({scrollLeft: "-="+360});
    });
    $("#prevwinrightscroll").click(function(){
        $("#prevwincontainer").animate({scrollLeft: "+="+360});
    });        

    $("#about-button").click(function() {
	    $('html,body').animate({
	        scrollTop: $("#about").offset().top},
	        'slow');
	});

});