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


    //HOME-GUEST
    var flag;
    $("#button-par").click(function(){
    	flag=false;
    	if($("#participants-g").hasClass("active")){
    		flag=true; // To check if div is already displayed
    	}

    	$(".multi-disp").removeClass("active");
    	$(".multi-disp").addClass("inactive");

    	if(flag){
    		$("#default-display-g").addClass("active");
    	}
    	else{
    		$("#participants-g").addClass("active");
    	}


    	activedisplay();
    });

    function activedisplay(){
    	$(".inactive").css('display' , 'none');
    	$(".active").css('display', 'block');
    }
});