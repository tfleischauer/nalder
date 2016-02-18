<?php get_header(); ?>

<div><span id="nav-back-more"><a class="back" href="garden-dahlias-2.php">&lt; Back</a> <a class="next" href="portfolio-garden.php"> More &gt;</a></span> </div> 

<!-- Start Middle - includes sidebar -->
<div class="middle">
<!-- Start Content - does not include sidebar-->
<div class="content">

  <article id="page-content-<?php the_ID(); ?>" class="page-content">
    <h2>Search Results</h2>
    
    <?php if ( have_posts() ) : ?>
    <p>Here is what we found for you...</p>
  
    <?php while ( have_posts() ) : the_post(); // start the loop ?>
    
    <div id="page-excerpt-<?php the_ID(); ?>" class="page-excerpt">
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
        <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); // put anchor tag around the URL for the permalink ?>">View &raquo;</a></p>
    </div>
    
    <?php endwhile; ?>
	
    <ul class="post-navigation">
  		<li class="post-navigation-previous"><?php previous_posts_link( '&laquo;&nbsp;Newer' ) ?></li>
    	<li class="post-navigation-next"><?php next_post_link( 'Older&nbsp;&raquo;'); ?></li>
  	</ul>
    
    <section class="search-again">
    	<p>Still not satisified... Try another search?</p>
    	<?php get_search_form(); ?>
    </section>
    
    <?php else : ?>
    <p>No posts found. Try a different search?</p>
    <?php get_search_form(); ?>
    <?php endif; ?>

   </article>  
  
  <small>search.php</small>

</div>
<!-- End Content -->

<?php get_sidebar(); ?>

</div>
<!-- End Middle -->

<?php get_footer() ?>