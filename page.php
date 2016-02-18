<?php get_header(); ?>

<!-- this nav-back-more creates a space that is either off or on on every page, therefore .middle will not appear in the header or footer. -->
<div><span id="nav-back-more"><a class="back" href="garden-dahlias-2.php">&lt; Back</a> <a class="next" href="portfolio-garden.php"> More &gt;</a></span> </div> 

<!-- Start Middle - includes sidebar -->
<div class="middle">
<!-- Start Content - does not include sidebar -->
<div class="content page">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article class="blog-excerpt">
    
      <?php the_title("<h2>", "</h2>"); ?>
      
      
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); // put anchor tag around the URL for the permalink ?>">
	  	<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
      </a>
      
      <?php the_content(); ?>
      <?php // get_child_pages(); ?>
      
    </article>
 
  <?php endwhile; else : ?>
	<p><?php // _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; // end the loop ?>
  
  <small>page.php</small>

</div>
<!-- End Content -->

<?php get_sidebar(); ?>

</div>
<!-- End Middle -->

<?php get_footer() ?>
