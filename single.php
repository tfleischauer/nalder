<?php get_header(); ?>

<div><span id="nav-back-more"><a class="back" href="garden-dahlias-2.php">&lt; Back</a> <a class="next" href="portfolio-garden.php"> More &gt;</a></span> </div> 

<!-- Start Middle - includes sidebar -->
<div class="middle">
<!-- Start Content - does not include sidebar-->
<div class="content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article id="post-<?php the_ID(); ?>" class="post">
      <?php the_title('<h2>', '</h2>'); ?>
      <small class="by-line">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> in <?php the_category(', ') ?></small>
      <?php the_post_thumbnail( 'large'); // get the featured image ?>
      <?php the_content(''); // get the page or posting written content ?>
      
      <ul class="post-navigation">
        <li class="post-navigation-previous"><?php previous_posts_link( '&laquo;&nbsp;Newer' ) ?></li>
        <li class="post-navigation-next"><?php next_post_link( 'Older&nbsp;&raquo;'); ?></li>
      </ul>
    </article>
      <?php comments_template(''); ?>
 
  <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; // end the loop ?>
  
  <small>single.php</small>

</div>
<!-- End Content -->

<?php get_sidebar(); ?>

</div>
<!-- End Middle -->

<?php get_footer() ?>
