jQuery(function($){

    const options = {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      adaptiveHeight: true,
      autoplay: true
    };

    // my slick slider as constant object
    const mySlider = jQuery('.slider').on('init', function(slick) {

      // constant var
      const slider = this;
      
      // slight delay so init completes render
      setTimeout(function() {

        // dot buttons
        let dots = jQuery('.slick-dots > li > button', slider);

        // each dot button function
        jQuery.each(dots, function(i,e) {

          // slide id
          let slide_id = jQuery(this).attr('aria-controls');
          
          // custom dot image
          let dot_img = jQuery('#'+slide_id +' .slider-image-box').data('dot-img');
          
          jQuery(this).html('<img src="' + dot_img + '" alt="" />');

        });

      }, 100);

    }).slick(options);
});

function adventure_trekking_camp_gb_Menu_open() {
	jQuery(".side_gb_nav").addClass('show');
}
function adventure_trekking_camp_gb_Menu_close() {
	jQuery(".side_gb_nav").removeClass('show');
}

jQuery(window).load(function() {
	jQuery(".preloader").delay(2000).fadeOut("slow");
});

jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 120) {
    jQuery('.fixed_header').addClass('fixed');
  } else {
      jQuery('.fixed_header').removeClass('fixed');
  }
});

jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 50) {
    jQuery('.scrollup').addClass('is-active');
  } else {
      jQuery('.scrollup').removeClass('is-active');
  }
});

jQuery( document ).ready(function() {
  jQuery('#adventure-trekking-camp-scroll-to-top').click(function (argument) {
    jQuery("html, body").animate({
           scrollTop: 0
       }, 600);
  })
})

/* Custom Cursor
 **-----------------------------------------------------*/
// Add this in custom-cursor.js
jQuery(document).ready(function($) {
  var cursor = $(".custom-cursor");
  var follower = $(".custom-cursor-follower");
  var offsetX = 15; // Set your desired horizontal offset
  var offsetY = 15; // Set your desired vertical offset

  $(document).mousemove(function(e) {
    cursor.css({
      top: e.clientY - offsetY + "px",
      left: e.clientX - offsetX + "px"
    });
    follower.css({
      top: e.clientY + "px",
      left: e.clientX + "px"
    });
  });

  $("a, button").hover(
    function() {
      cursor.addClass("active");
      follower.addClass("active");
    },
    function() {
      cursor.removeClass("active");
      follower.removeClass("active");
    }
  );
});

/*preloader*/
jQuery(document).ready(function($) {

  // Function to hide preloader
  function hidePreloader() {
    $("#preloader ").delay(2000).fadeOut("slow");
  }

  // Check if all resources have been loaded
  if (document.readyState === "complete") {
    hidePreloader();
  } else {
    window.onload = hidePreloader;
  }
});