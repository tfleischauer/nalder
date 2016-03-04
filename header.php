<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--
Theme Name: Nalder
Author: Troy Fleischauer
Author URI: http://www.portfolio.troyfleischauer.com
Description: Custom theme for nannalder.com
-->

<!-- Start Title Tag -->
<title><?php get_my_title_tag(); ?></title>
<!-- End Title Tag -->

<!-- Start Meta -->
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="keywords" content="">
<!-- to prevent rescaling in iphone -->
<!--<meta name="viewport" content="user-scalable=no, intial-scale=1.0, maximum-scale=1.0" />-->
<!-- typical mobile optimized viewport (mdn) -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- earthship seattle viewport -->
<!--<meta name="viewport" content="initial-scale=1">-->
<!-- End Meta -->

<!-- Start Links -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/x.ico" />
<!-- End Links -->

<!-- Start Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />
<!-- End Styles -->

<!-- Start External Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- End External Scripts -->

<!-- Start Scripts -->
<!-- Start Flex Slider for front-page.php -->
<script>
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "fade",
			slideshow: true,
			smoothHeight: true,
			slideshowSpeed: 7000,  // Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 500    // Integer: Set the speed of animations, in milliseconds
		});
	});
</script>
<!-- End Flex Slider for front-page.php -->

<!-- Start Toggle Menu -->
<script>
	$(window).load(function() { // enable function on window load
	
		$("#toggle").click(function() { // when toggle is clicked
		
			$("nav#nav-main").slideToggle(); // open or close navigation
			
			return false; // disable anchor text target
			
		}); // end when toggle is clicked
	
	  var loadWidth = window.innerWidth; // save window load width as a variable
	  
	  $(window).resize(function() { // when the window is resized...
	  
			if (loadWidth !== window.innerWidth) { // trigger for width only
			
				if (window.innerWidth < 840) { // if width is less than 840px
				
					$("nav#nav-main").hide(); // hide main navigation items
			
				} else {
				
					$("nav#nav-main").show(); // show main navigation items
					
				} 
				
			} // end trigger for width only
				
		}); // end window.resize
		
		///////
		
		var loadWidth2 = window.innerWidth; // save window load width as a variable
		
		$(window).resize(function() { // when the window is resized...
	  
			if (loadWidth2 !== window.innerWidth) { // trigger for width only
			
				if (window.innerWidth < 725) { // if width is less than 725px
				
					// $(".about-content section div.wp-caption").removeClass("alignright");
					// $(".about-content section div.wp-caption").addClass("alignleft");
					
					$('flex-active-slide').removeProp('width');
			
				} else {
				
					// $(".about-content section div.wp-caption").addClass("alignright");
					
				} 
				
			} // end trigger for width only
				
		}); // end window.resize
		
		
		
		
		
	  
	}); // end enable function on window load
	
</script>
<!-- End Toggle Menu -->

<!-- Start Image Rollover -->
<!--The <script> tags are HTML, not JavaScript.-->
<script>
	$(document).ready(function() {
	$("img.rollover").hover( 
	function() { this.src = this.src.replace("_off", "_on"); 
	}, 
	function() { this.src = this.src.replace("_on", "_off"); 
	});
	}); 
	
	<!--  now this is a javaScript comment! 
  
    -->
</script>
<!-- End Image Rollover -->
 
<!-- Start Make Columns with WordPress Gallery --> 
<script>
  // Cache the Gallery element
  var gallery = jQuery('.gallery');
  if ( gallery.length > 0 ) {
	// Find the WordPress class that tells us how many columns to use
	var columns = jQuery.grep(gallery.attr('class').split(' '), function(v, i) {
		return v.indexOf('gallery-columns') === 0;
	}).join();
	// Get the number out of the class and calculate the width
	gallery.find('.gallery-item').width( 100/parseInt(columns.replace('gallery-columns-', '')) + '%' );
  }
</script>
<!-- End Make Columns with WordPress Gallery --> 

<!-- Start Figcaption with Hyperlink Using the Parent's HREF Attribute -->
<script>
jQuery(document).ready(function($){

$('figcaption').wrap('<a />');
$('figcaption').parent().attr('href', function() {return $(this).parent().find('div > a').attr('href') } );

});
</script>
<!-- End Figcaption with Hyperlink Using the Parent's HREF Attribute -->

<!-- End Scripts -->

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>

<body id="home" <?php body_class(); ?>>

<!-- Start Wrapper -->
<div id="wrapper">

<!-- Start Header -->
<header>

	<!-- Start Logo -->
	<h1 id="logo"><a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-nalder-no-bg-460x161px.png" alt="Nan Nalder logo" /></a></h1>
    <!-- End Logo -->
    
    <!-- Start Toggle -->
    <div id="toggle">
    	<a href="#"><span class="glyph">&#8801;</span>&nbsp;MENU</a>
    </div>
    <!-- End Toggle -->
    
</header>
<!-- End Header -->

<!-- Start Main Menu -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'nav-main' ) ); ?>
<!-- End Main Menu -->

<small>header.php</small>

