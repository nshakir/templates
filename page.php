<?php get_header(); ?>
<div id="middle">
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a></h2>
<?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
<blockquote><?php echo get_post_meta($post->ID, 'Quote', true) ?></blockquote>
<?php endif; ?>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
<small>page.php</small>
<?php get_footer(); ?>