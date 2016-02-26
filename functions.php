<?php

/*
Theme Name: Nalder
Author: Troy Fleischauer
Author URI: http://www.portfolio.troyfleischauer.com
Description: Custom theme for nannalder.com
*/

// Register Sidebars
register_sidebars( 3, array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // will otherwise be a list item
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));
// End Register Sidebars

// Register My Menus
register_nav_menus( array(
	'main-menu' => _( 'Main' ),
	'footer-menu' => _( 'Footer Menu' ),
));
// End Register My Menus

// Create Post Thumbnails - we are using the post-thumbnail function, 
// but we are creating a 'featured image'. Confusing nomenclature, yes.
add_theme_support( 'post-thumbnails' );
// End Create Post Thumbnails

// Enable Excerpts for Pages
add_post_type_support( 'page', 'excerpt' );
// End Enable Excerpts for Pages

// Declare support for HTML5 Galleries and Captions
// add_theme_support( 'html5', array( 'gallery', 'caption' ) );
add_theme_support( 'html5', array( 'gallery') );
// End Declare support for HTML5 Galleries and Captions

// Get My Title Tag by Mike Sinkula
function get_my_title_tag() {
	
	// The post variable exists outside of the function. 
	// We need to tell the post variable to be accessible inside the function.
    global $post;  
    
    if ( is_front_page() ) { // for the site's From Page
    	bloginfo('description'); // retrieve the tagline
    }
    
    elseif ( is_page() || is_single() ) { // for your site's Pages or Postings
    	the_title(); // retrieve the page or posting title
    }
	
	else { // for everything else
		bloginfo('description'); // retrieve the site tagline
	}
	
	if ($post->post_parent) { // if there is a parent
		echo ' | '; // seperator with spaces
		echo get_the_title($post->post_parent); // retrieve the Parent Page title (aka Category)
	}
	
	echo ' | '; // seperator with spaces
	bloginfo('name'); // retrieve the site name
	echo ' | ';
	echo 'Seattle, WA'; // write in the location
}
// End Get My Title Tag by Mike Sinkula

// Add Flexslider by Mike Sinkula
function add_flexslider() {
	
	global $post;	
	
	$attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image' ));
				   
	if ($attachments) { // see if there are images attached to the posting
		
		echo '<div class="flexslider">';
		echo '<ul class="slides">';
		
		foreach ( $attachments as $attachment_id => $attachment ) { // create the list items for images with captions
			
			// $img_source = wp_get_attachment_image_src( $attachment_id, 'large' ); // to attach to larger image
			
			echo '<li>';
			// echo '<a href="'.$img_source[0].'">'; // to attach to larger image
			echo wp_get_attachment_image($attachment_id, 'large');
			// echo '</a>'; // to attach to larger image
			// echo '<p>'; // not using post fields or paragraphs for home page on this site
			// echo get_post_field('post_excerpt', $attachment->ID);
			// echo '</p>';
			echo '</li>';
			
		}
		
		echo '</ul>';
		echo '</div>';
	} // END see if there are images attached to the posting
	
}
// End Add Flexslider by Mike Sinkula

?>

