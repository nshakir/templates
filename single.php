<?php get_header(); ?>

<div id="middle"><img src="<?php bloginfo('template_directory'); ?>">
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>">
<article id="post-<?php the_ID(); ?>" class="post">
<?php the_title(); ?></a></h2>
<small>Posted on <?php the_time('F j, Y'); ?> by
<?php the_author(); ?> in <?php the_category(', '); ?>
</small>
<?php the_post_thumbnail( 'large'); ?>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
<small>single.php</small>
<?php get_footer(); ?>