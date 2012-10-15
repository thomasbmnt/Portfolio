// DOM Ready
$(function() {

    var $el, leftPos, newWidth;
        $mainNav2 = $("#nav_effect");
            
    $("#nav_effect a").click(setCurrent);
    
    $mainNav2.append("<li id='magic-line-two'></li>");
    
    var $magicLineTwo = $("#magic-line-two");
    
    $magicLineTwo
        .width($("#nav_effect:first-child").width())
        .height($mainNav2.height())
        .css("left", $("#nav_effect:first-child a").position().left)
        .data("origLeft", $("#nav_effect:first-child a").position().left)
        .data("origWidth", $magicLineTwo.width())
        .data("origColor", $("#nav_effect:first-child a").attr("rel"));
                
    $("#nav_effect a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        $magicLineTwo.stop().animate({
            left: leftPos,
            width: newWidth,
            backgroundColor: $el.attr("rel")
        })
    }, function() {
        $magicLineTwo.stop().animate({
            left: $magicLineTwo.data("origLeft"),
            width: $magicLineTwo.data("origWidth"),
            backgroundColor: $magicLineTwo.data("origColor")
        });    
    });
    
    function setCurrent($e)
    {
    	/*
$("#nav_effect a.current_page").removeClass("current_page");
	    $(this + ' a').addClass("current_page");
*/	

    }
    
    /* Kick IE into gear */
    $(".current_page a").mouseenter();
       
    
    $("a.lightBox").click(lightBoxing);
    
    function lightBoxing(e)
    {
    	var stylingCssBox = {	
    							'position' : 'fixed',
    							'top' : '0',
    							'left' : '0',
    							'width' : '100%',
    							'height' : '100%',
    							'background' : 'rgba(0, 0, 0, 0.7)',
    							'z-index' : '9999',
    							'text-align' : 'center'
    						};

		e.preventDefault();
		
    
	    $("body").append('<div id="lightbox"></div>');
	    $("#lightbox").css(stylingCssBox);
	    
	    $("#lightbox").append('<div><img src="' + $(this).attr("href") + '" /></div>');	    
	    $("#lightbox div").append('<p id="descriptionLB">' + $(this).find(':first-child').attr("alt") +'</p>');
	    
	    $("#descriptionLB").css("background-color", "rgba(255,255,255, 0.7)");
	    $("#descriptionLB").css("width", $("#lightbox img").width());
	    $("#descriptionLB").css("margin", "auto");
	    
	    setInterval(autoAlign, 100)
	    
	    function autoAlign()
	    {
		    $("#lightbox img").css('margin-top', ($(window).height()/2)-($("#lightbox img").height()/2));
	    }
	    
	    
	    $("#lightbox").click(exitLightBoxing);
    }
    
    function exitLightBoxing(e)
    {
		$("#lightbox").remove();
    }

    
});