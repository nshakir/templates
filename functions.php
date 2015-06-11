<?php
/*
Theme Name: Nectar Shakir's Wordpress Demo
Author: Nectar Shakir
Author URL: nectarshakir.com
Description: This is a demo theme for WEB 170 WordPress Class
Version 1.0
*/

add_post_type_support( 'page', 'excerpt' );

function get_my_title_tag () {
	global $post;
	if ( is_front_page() ) {
		bloginfo('description');
	}
	elseif (is_page() || is_single() ) {
		the_title();
	}
	else {
		bloginfo('description');
	}
	if ( $post->post_parent) {
		echo '  |  ';
		echo get_the_title($post->post_parent);
	}
	
	echo '  |  ';
	blonginfo('name');
	echo '  |  ';
	echo 'Seattle, WA.';
}


//sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_widget' => '<h2>',
	'after_widget' => '<h2>',
	));

//Register my Menus
register_nav_menus(array( 'main-menu' =>__(' Main' ),
));
//

add_theme_support( 'post-thumbnails');
//create post thumbnails

//begin flexslider
function add_flexslider() { 
     
    global $post; 
    
    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image', ));
    
    if ($attachments) { 
        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
        foreach ( $attachments as $attachment_id => $attachment ) { 
            echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<p>';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</p>';
            echo '</li>';
            
        }
    
        echo '</ul>';
        echo '</div>';
        
    } 
    
} 
?>



