<?php 
/* Commonly used functions:  , array( 'post', 'page' )*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 324, 324, true ); 
	//add_image_size( 'single-post-thumbnail', 160, 100, true ); 
	//add_image_size('index-categories', 150, 150, true);
    //add_image_size('page-single', 350, 350, true);
	add_image_size('recent_posts_widget', 100, 100, true);
    add_image_size('customer-logo', 150, 100, true);
    add_image_size('banner', 1920, 650, true);
    add_image_size('services', 370, 260, true);
?>