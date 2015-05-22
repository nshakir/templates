<?php get_header(); ?>

<img src="<?php bloginfo('template_directory'); ?>">
<div id="middle">
<div id="services">
<h2>ABOUT US</h2>
seattle premiere recording
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); 
?>
<?php the_content(''); ?>
<?php endwhile; endif; ?><br><br>

Also Find Us Here:<br>
<img src="images/facebook29_off.png" class="icons" width=45><img src="images/twitter2_off.png" class="icons" width=45><img src="images/googleplus_off.png" class="icons" width=45>
</div>
<div id="blog">
<h2>BLOG FEED</h2>
<?php rewind_posts(); ?>
<?php query_posts('showposts=4');  ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</div> <!--END BLOG DIV -->
</div> <!--END MIDDLE DIV -->
<small>front-page.php</small>
<?php get_footer(); ?>