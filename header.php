<!doctype html>
<html>
<head>
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | PUSH/PULL Studio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<!-- LINK STYLES -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<!-- Begin Toggle Menu -->
<script type="text/javascript">


	$(window).load(function() {
				
		$("#toggle").click(function() {
			
			
			$("#toggle-nav").toggle();
			
		});
		
	});
</script>
<!-- End Toggle Menu -->
</head>
<?php wp_head(); ?>
<!--END HEADER PHP-->
<body>
<!-- BEGIN NAVIGATION -->
<div id="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'navigation',  ) ); ?>
<!-- END OF NAV LINKS DIV -->

<!-- BEGIN SUB NAV -->
<ul class="sub-navigation-items"><?php
	if ($post->post_parent) {
		wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __ ('')));
	} else {
		wp_list_pages(array('child_of'=> $post->ID, 'title_li' => __('')));
	}
	?></ul>
    <?php if (is_page()) : // if we are in "pages"... ?>
<?php endif; // end if we are in "pages" ?>
<?php if (!(is_page())) : // if we are not in "pages"... ?>
<?php endif; ?>
    </div> <!--end sidebar div-->
    </div> <!--end navigation div-->
<!-- END SUB NAV -->

<div id="wrapper">
<!--END NAV PHP-->
<small>header.php</small>