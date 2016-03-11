<?php /* Template Name: Page-Dynamic-Sidebar-Only */ ?>

<?php get_header(); ?>

<!-- Start Middle - includes sidebar -->
<div class="middle">
<!-- Start Content - does not include sidebar -->
<div class="content page">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <!--<article class="blog-excerpt">-->
    
      <?php the_title("<h1>", "</h1>"); ?>
      
      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); // put anchor tag around the URL for the permalink ?>">
	  	<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
      </a>
      
      <?php the_content(); ?>
      <?php // get_child_pages(); ?>
      
    <!--</article>-->
  <?php endwhile; else : ?>
	<p><?php // _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; // end the loop ?>
  
  <!--<small>page.php</small>-->

</div>
<!-- End Content -->

<!-- Begin Widgets -->
<div class="widget sidebar">
    <?php dynamic_sidebar(1); // Show on every page ?>
    <?php if (!( is_page() || is_search() || is_404() )) : // Show on every page except page.php, 404.php, and search.php ?>
    <?php dynamic_sidebar(2); // Appears on index.php ?>
    <?php endif; ?>
    <?php dynamic_sidebar(3); // Show on every page ?>
</div>
<!-- End Widgets -->
  
</div>
<!-- End Middle -->

<?php get_footer() ?>

