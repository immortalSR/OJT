jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function sports_league_menu_open() {
	jQuery(".menu-brand.primary-nav").addClass('show');
}
function sports_league_menu_close() {
	jQuery(".menu-brand.primary-nav").removeClass('show');
}

var sports_league_Keyboard_loop = function (elem) {
    var sports_league_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var sports_league_firstTabbable = sports_league_tabbable.first();
    var sports_league_lastTabbable = sports_league_tabbable.last();
    /*set focus on first input*/
    sports_league_firstTabbable.focus();

    /*redirect last tab to first input*/
    sports_league_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            sports_league_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    sports_league_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            sports_league_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$('.mobiletoggle').click(function () {
        sports_league_Keyboard_loop($('.menu-brand.primary-nav'));
    });
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});

jQuery('document').ready(function($){
    $('.main-search span a').click(function(){
        $(".searchform_page").slideDown(500);
        sports_league_Keyboard_loop($('.searchform_page'));
    });

    $('.close a').click(function(){
        $(".searchform_page").slideUp(500);
    });
}); 
