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
<script src="<?php bloginfo('template_directory'); ?>/scripts/scripts.js"></script>
<!-- End External Scripts -->

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>

<body <?php body_class(); ?>>

<!-- Start Wrapper -->
<div id="wrapper">

<!-- Start Header -->
<header>

	<!-- Start Logo -->
	<div id="logo">
    	<a href="<?php echo get_settings('home'); ?>" title="Link to Nan Nalder Artist Home Page">
        	<img class="desktop" src="<?php bloginfo('template_directory'); ?>/images/logo-nalder-no-bg-357x125px.png" alt="Nan Nalder Artist logo" />
            <img class="phone" src="<?php bloginfo('template_directory'); ?>/images/logo-nalder-no-bg-257x90px.png" alt="Nan Nalder Artist logo" />
        </a>
    </div>
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

<!--<small>header.php</small>-->

