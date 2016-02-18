<?php get_header(); ?>

<div class="middle">

<!-- Start Flex Slider -->
<?php add_flexslider(); ?>
<!-- End Flex Slider -->

<!-- Start Widgets -->
<div id="widgets">
    <section class="widget-item">
        <h2>About Me:</h2>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
        <?php the_content(''); // get the home page's content ?>
        <?php endwhile; endif; // end loop one ?>
    </section>
    <section class="widget-item">
        <h2>Latest Postings:</h2>
        <ul> <!-- needs to be outside the loop -->
        <?php rewind_posts(); // stop loop one. Rewind the loop posts in order to re-use the same query in different locations on a page ?>
        <?php query_posts('posts_per_page=4'); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <!-- an li is within the loop -->
        <?php endwhile; // end loop two ?>
        </ul>
    </section>
    <section class="widget-item">
        <h2>Contact Me:</h2>
        <p><strong>Phone: </strong>206.543.2567<br><strong>Email: </strong><a href="mailto:sinkum@uw.edu">sinkum@uw.edu</a></p>
        <p>428 Sieg Hall<br>University of Washington<br>Seattle, WA 98195</p> 
    </section>
</div>
<!-- End Widgets -->

<small>front-page.php</small>

</div>
<!-- End Middle -->

<?php get_footer() ?>
