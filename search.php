<?php get_header(); ?>

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
	
    <nav class="prev-next-posts">
     <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
     <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
  	</nav>
    
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

