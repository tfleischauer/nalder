<?php get_header(); ?>

<!-- Start Middle - includes sidebar -->
<div class="middle">
<!-- Start Content - does not include sidebar-->
<div class="content fourzerofour">
  
  <article id="page-content-<?php the_ID(); ?>" class="page-content">
  	<h2>404 Error:</h2>
  	<p>The page you are looking for does not exist... Try a search?</p>
  	<?php get_search_form(); ?>
  </article>
  
  <small>404.php</small>

</div>
<!-- End Content -->

<?php get_sidebar(); ?>

</div>
<!-- End Middle -->

<?php get_footer() ?>

