<?php get_header(); ?>

<!-- Start Middle - includes sidebar area -->
<div class="middle">
<!-- Start Content - does not include sidebar -->
<!--<div class="content page">-->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
  	<!-- Start About Page -->
    <div class="about-content">
    
      <?php the_title("<h1>", "</h1>"); ?>
      
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); // put anchor tag around the URL for the permalink ?>">
	  	<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
      </a>
      
      <?php the_content(); ?>
      <?php // get_child_pages(); ?>
      
    </div>
    <!-- End About Content -->
 
  <?php endwhile; else : ?>
	<p><?php // _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; // end the loop ?>
  
  <small>page-about-nan.php</small>

<!--</div>-->
<!-- End Content -->

</div>
<!-- End Middle -->

<?php get_footer() ?>

