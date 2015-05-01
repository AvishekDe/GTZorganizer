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

    $("#button-point-table").click(function(){
        flag=false;
        if($("#points-display-g").hasClass("active")){
            flag=true; // To check if div is already displayed
        }

        $(".multi-disp").removeClass("active");
        $(".multi-disp").addClass("inactive");

        if(flag){
            $("#default-display-g").addClass("active");
        }
        else{
            $("#points-display-g").addClass("active");
        }
        activedisplay();
    });

    $("#button-top-scorers").click(function(){
        flag=false;
        if($("#top-scorers-g").hasClass("active")){
            flag=true; // To check if div is already displayed
        }

        $(".multi-disp").removeClass("active");
        $(".multi-disp").addClass("inactive");

        if(flag){
            $("#default-display-g").addClass("active");
        }
        else{
            $("#top-scorers-g").addClass("active");
        }
        activedisplay();
    });

    $("#button-top-assists").click(function(){
        flag=false;
        if($("#top-assists-g").hasClass("active")){
            flag=true; // To check if div is already displayed
        }

        $(".multi-disp").removeClass("active");
        $(".multi-disp").addClass("inactive");

        if(flag){
            $("#default-display-g").addClass("active");
        }
        else{
            $("#top-assists-g").addClass("active");
        }
        activedisplay();
    });

    $("#button-view-results").click(function(){
        flag=false;
        if($("#view-results-g").hasClass("active")){
            flag=true; // To check if div is already displayed
        }

        $(".multi-disp").removeClass("active");
        $(".multi-disp").addClass("inactive");

        if(flag){
            $("#default-display-g").addClass("active");
        }
        else{
            $("#view-results-g").addClass("active");
        }
        activedisplay();
    });

    $("#button-view-knockouts").click(function(){
        flag=false;
        if($("#view-knockouts-g").hasClass("active")){
            flag=true; // To check if div is already displayed
        }

        $(".multi-disp").removeClass("active");
        $(".multi-disp").addClass("inactive");

        if(flag){
            $("#default-display-g").addClass("active");
        }
        else{
            $("#view-knockouts-g").addClass("active");
        }
        activedisplay();
    });

    function activedisplay(){
    	$(".inactive").css('display' , 'none');
    	$(".active").css('display', 'block');
    }

    $(".ClassyCountdown-value").css('font-family' , 'robotolight');




    //CONTACT INFO
    $(".contact-div").mouseenter(function(){
        $(this).children(".contact-name-div").stop().animate({top: "20%", 'font-size' : "35px"});
        $(this).children(".contact-description-div").stop().animate({top : "15%" , 'font-size' : "15px"});
        $(this).children(".contact-number-div").stop().fadeIn(1000);
        $(this).children(".social-icons-div").stop().fadeIn(1000);

    });

    $(".contact-div").mouseleave(function(){
        $(this).children(".contact-name-div").stop().animate({top: "40%" , 'font-size' : "45px"});
        $(this).children(".contact-description-div").stop().animate({top : "40%" , 'font-size' : "20px"});
        $(this).children(".contact-number-div").stop().fadeOut(200);
        $(this).children(".social-icons-div").stop().fadeOut(200);
    });

});