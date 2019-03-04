<?php
function procision_theme_scripts() {
    //wp_enqueue_style( 'style', get_stylesheet_uri() );
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:600,700,800', false ); 
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css', false ); 
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.1', 'all');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.css', array(), '1.1', 'all');

    
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array ( ), 1.1, true);
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array ( 'jquery' ), NULL, false);
    wp_enqueue_script( 'loadScripts', get_template_directory_uri() . '/js/loadScripts.js', array ( 'jquery' ), NULL, false);
}
add_action( 'wp_enqueue_scripts', 'procision_theme_scripts' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'secondary-menu' => __( 'Secondary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );