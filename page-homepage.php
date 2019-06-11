<?php 
/**
*	Template Name: Homepage
**/
get_header(); 
global $post;

$page = $wp_query->post->ID;

?>

<div class="container cf">
    <nav id="secondaryNav">
        <?php wp_nav_menu(array( 
            'container_class' => 'menu-header', 
            'theme_location' => 'secondary-menu', 
            'menu_class' => 'menu cf'
        )); ?>
    </nav>
</div>
<div class="container cf">
    <div class="CTA">
        <a href="#">Get Quote</a>
    </div>

    <div class="missionStatement">
        
    </div>
</div>
<?php get_footer(); ?>