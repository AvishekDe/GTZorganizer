$(document).ready(function(){
    $("#prevwinleftscroll").click(function(){
        $("#prevwincontainer").animate({scrollLeft: "-="+360});
    });
    $("#prevwinrightscroll").click(function(){
        $("#prevwincontainer").animate({scrollLeft: "+="+360});
    });        
});