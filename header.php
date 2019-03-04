<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
    
<body>
    <header id="mastHead" class="parallax-container" data-parallax="scroll" data-speed=".5" data-image-src="<?php bloginfo('template_url'); ?>/images/adi-goldstein-796588-unsplash.jpg"> 
        <div id="logo">
            <h1>Procision Sound</h1>
        </div>
        <div class="tagWrapper fixedWrapper">
            <div id="tag">
                <h2><?php the_field('tag_line', 'options'); ?></h2>
            </div>
        </div>
        <div class="ctaWrapper fixedWrapper">
            <div id="cta">
                <a class="btn" href="#"><?php the_field('cta_text', 'options'); ?></a>
            </div>
        </div>
        <?php get_search_form(); ?>
        <nav id="main-nav">
            <div class="container">
                <div class="stickyLogo"></div>
                <?php if(is_front_page()): ?>
                <?php wp_nav_menu(array( 
                    'container_class' => 'menu-header', 
                    'theme_location' => 'header-menu', 
                    'menu_class' => 'menu cf'
                )); ?>
                <?php else: ?>
                <?php wp_nav_menu(array( 
                    'container_class' => 'menu-header', 
                    'theme_location' => 'secondary-menu', 
                    'menu_class' => 'menu cf'
                )); ?>
                <?php endif; ?>
            </div>    
        </nav>
    </header>
    
    <div id="main">