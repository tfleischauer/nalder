/*
Theme Name: Nalder
Script Description: Scripts for main navigation, FlexSlider, and WordPress Gallery
Author: Troy Fleischauer
Author URI: http://www.portfolio.troyfleischauer.com
*/

$(window).load(function() { // when the window loads...

  // START NAV-MAIN TOGGLE FUNCTION
  $("#toggle").click(function() { // when toggle is clicked
	  $("nav#nav-main").slideToggle(); // open or close navigation
	  return false; // disable anchor text target
  }); // end when toggle is clicked
  // END NAV-MAIN TOGGLE FUNCTION

  // START HIDE/SHOW NAV-MAIN @860px
  var loadWidth = window.innerWidth; // save window load width as a variable
  
  $(window).resize(function() { // when the window is resized...
	  if (loadWidth !== window.innerWidth) { // trigger for width only
		  if (window.innerWidth <= 860) { // if width is less than or equal to 860px
			  $("nav#nav-main").hide(); // hide main navigation items
		  } else {
			  $("nav#nav-main").show(); // show main navigation items
		  } 
	  } // end if - trigger for width only	
   }); // end window.resize
   // END HIDE/SHOW NAV-MAIN @860px
   
   // START ACTIVATE FLEXSLIDER FOR FRONT-PAGE.PHP
   $('.flexslider').flexslider({
		animation: "fade",
		slideshow: true,
		smoothHeight: true,
		slideshowSpeed: 7000,  // Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 500    // Integer: Set the speed of animations, in milliseconds
	});
	// END ACTIVATE FLEXSLIDER FOR FRONT-PAGE.PHP
 
	// START RESPONSIVE FLEXSLIDER SIZING FOR FRONT-PAGE.PHP	
	var loadWidth2 = window.innerWidth; // save window load width as a variable
	
	$(window).resize(function() { // when the window is resized...
		if (loadWidth2 !== window.innerWidth) { // trigger for width only
			if (window.innerWidth < 725) { // if width is less than 725px
				$('flex-active-slide').removeProp('width');
			} else {
				// $(".about-content section div.wp-caption").addClass("alignright");
			} 
		} // end if - trigger for width only
	}); // end window.resize
	// END RESPONSIVE FLEXSLIDER SIZING FOR FRONT-PAGE.PHP
  
}); // ...end window load


// START WORDPRESS GALLERY FUNCTIONS
  // Start Make Columns with WordPress Gallery
  var gallery = jQuery('.gallery'); // Cache the Gallery element
  if ( gallery.length > 0 ) {
	// Find the WordPress class that tells us how many columns to use
	var columns = jQuery.grep(gallery.attr('class').split(' '), function(v, i) {
		return v.indexOf('gallery-columns') === 0;
	}).join();
	// Get the number out of the class and calculate the width
	gallery.find('.gallery-item').width( 100/parseInt(columns.replace('gallery-columns-', '')) + '%' );
  }
  // End Make Columns with WordPress Gallery
  
  // Start Hyperlink Figcaption Using the Parent's HREF Attribute (for WP GALLERY)
  jQuery(document).ready(function($){
	$('figcaption').wrap('<a />');
	$('figcaption').parent().attr('href', function() {return $(this).parent().find('div > a').attr('href') } );
  });
  // End Hyperlink Figcaption Using the Parent's HREF Attribute (for WP GALLERY)
// END WORDPRESS GALLERY FUNCTIONS

