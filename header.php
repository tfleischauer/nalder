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
<!--<meta name="viewport" content="user-scalable=no, intial-scale=1.0, maximum-scale=1.0" />-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- End Meta -->

<!-- Start Links -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/x.ico" />
<!-- End Links -->

<!-- Start Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />
<!-- End Styles -->

<!-- Start Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Start Flex Slider -->
<script>
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "fade",
			slideshow: true,
			smoothHeight: true,
			slideshowSpeed: 7000,    //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 500      //Integer: Set the speed of animations, in milliseconds
		});
	});
</script>
<!-- End Flex Slider -->

<!-- Start Toggle Menu -->
<script>
	/*$(window).load(function() { //enable function on window load
		$("#toggle").click(function() { // when toggle is clicked
			$("#navigation").toggle(); // open or close navigation
		});
	});*/
	
	
	/*$(".current_page_parent").click().slideToggle('slow');*/
	
</script>
<!-- End Toggle Menu -->

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
    <!--<div id="toggle">
    	<a href="#"><span class="glyph">&#8801;</span>Menu</a>
    </div>-->
    <!-- End Toggle -->
    
</header>
<!-- End Header -->

<!-- Start Main Menu -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'nav-main' ) ); ?>
<!-- End Main Menu -->

<small>header.php</small>
