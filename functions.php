<?php
/*
Theme Name: Nectar Shakir's Wordpress Demo
Author: Nectar Shakir
Author URL: nectarshakir.com
Description: This is a demo theme for WEB 170 WordPress Class
Version 1.0
*/

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
?>



