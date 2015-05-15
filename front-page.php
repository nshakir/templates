<?php get_header(); ?>

<div id="middle"><img src="<?php bloginfo('template_directory'); ?>">
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
<small>front-page.php</small>
<?php get_footer(); ?>