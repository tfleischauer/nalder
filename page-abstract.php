<?php get_header(); ?>

<!-- Start Middle - includes sidebar -->
<div class="middle">
<!-- Start Content - does not include sidebar -->
<!--<div class="content page">-->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <div>
    
      <?php the_title("<h2>", "</h2>"); ?>
      
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); // put anchor tag around the URL for the permalink ?>">
	  	<?php // echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
        
        <?php echo the_post_thumbnail( 'thumbnail' ); // get the featured image ?>
      </a>
      
      <?php the_content(); ?>
      <?php // get_child_pages(); ?>
      
    </div>
 
  <?php endwhile; else : ?>
	<p><?php // _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; // end the loop ?>
  
  <p> <small>page-abstract.php</small></p>

<!--</div>-->
<!-- End Content -->

</div>
<!-- End Middle -->

<?php get_footer() ?>

