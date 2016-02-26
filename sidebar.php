<!-- Begin Sidebar -->
<div class="sidebar">

  <!-- Begin Sub-Navigation -->
  <div id="sub-navigation" class="widget">
	<?php if (is_page()) : // if we are in 'pages'... ?>
      <h2 class="sub-navigation-title">
          <?php echo get_the_title($post->post_parent); // ... get the gateway page title ?>
      </h2>
      <ul class="sub-navigation-items">
          <?php
              if ($post ->post_parent) { // if the page has a parent...
                  wp_list_pages( array(
				  	'child_of' => $post->post_parent, 
					'title_li' => __('')
				     )); // list the sub-pages with no title
              } else { // if the page does not have a parent... (a gateway page)
                  wp_list_pages( array(
				  	'child_of' => $post->ID, 
					'title_li' => __('')
				     )); // ... list the sub-pages with no title
              }
          ?>
       </ul>
     <?php endif; // end if we are in 'pages' ?>
     
     <?php if (!(is_page())) : // if we are NOT in 'pages' ?>
         <h2 class="sub-navigation-title">Blog</h2>
         <ul class="sub-navigation-items">
            <?php wp_list_categories( array(
				'title_li' => __('')
				 )); // list the categories with no title 
			?>
         </ul>
     <?php endif; // end if we NOT are in 'pages' ?>
     
  </div>
  <!-- End Sub-Navigation -->
    
  <!-- Begin Quote -->
  <?php if(get_post_meta($post->ID, 'Quote', true)) : ?> <!-- 3 parameters: post ID, the key, the value. If the key of Quote exists. -->
  <div class="widget">  
        <blockquote> <?php echo (get_post_meta($post->ID, 'Quote', true)); ?> </blockquote> <!-- use echo to call the value -->
  </div>   
  <?php endif; ?>
  <!-- End Quote -->
  
  <!-- Begin Widgets -->
  <div class="widget">
      <?php dynamic_sidebar(1); // Search ?>
      <?php if (!( is_page() || is_search() || is_404() )) : ?>
      <?php dynamic_sidebar(2); // Tag Cloud ?>
      <?php endif; ?>
      <?php dynamic_sidebar(3); // Extra Sidebar ?>
  </div>
  <!-- End Widgets -->
  
  <small>sidebar.php</small>
     
 </div>
 <!-- End Sidebar -->
 
	