<?php get_header(); ?>

<div><span id="nav-back-more"><a class="back" href="garden-dahlias-2.php">&lt; Back</a> <a class="next" href="portfolio-garden.php"> More &gt;</a></span> </div> 

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
