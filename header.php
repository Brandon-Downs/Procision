<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
    
<body>
    <header id="header" class="parallax-container" data-parallax="scroll" data-speed=".5" data-image-src="<?php bloginfo('template_url'); ?>/images/adi-goldstein-796588-unsplash.jpg">
        <div class="container">
            <div id="logo">
                <h1>Procision Sound</h1>
            </div>

            <nav id="main-nav">
                <div class="">
                    <?php wp_nav_menu(array( 
                        'container_class' => 'menu-header', 
                        'theme_location' => 'header-menu', 
                        'menu_class' => 'menu cf'
                    )); ?>
                </div>
            </nav>
            
        </div>
    
    </header>