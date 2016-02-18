<!-- Start Footer -->
<footer>

<!-- Start Footer Navigation -->
<!--<nav id="nav-footer">-->
<?php wp_nav_menu( array('theme_location' => 'footer-menu', 'container' => 'nav', 'container_id' => 'nav-footer')); ?>
<!--</nav>-->

<nav id="nav-sitemap">
    <ul>
      <li>&copy; <?php print ("" . date ('Y') . ""); ?> Nan Nalder</li>
      <li>  | </li>
      <li><a href="site-map.php">Site Map</a></li>
      <li> | </li>
      <li>Site Credits</li>
      <li> | </li>
      <li><span class="login"><?php wp_loginout(); ?></span></li>
      <!--<li> | </li>-->
      <li><?php // wp_register('','.'); ?></li>
    </ul>
</nav>
<!-- End Footer Navigation -->

<small>footer.php</small>

</footer>
<!-- End Footer -->

<!-- Start Analytics -->
<!-- End Analytics -->

</div>
<!-- End Wrapper -->

<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>
