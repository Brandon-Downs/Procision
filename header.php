<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,600,700,800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
    
<body>
    <header id="mastHead"> 
        <div class="container cf">
            <?php if(get_field('logo', 'options')): ?>
                <div id="logo">
                    <h1><?php echo wp_get_attachment_image(get_field('logo', 'options'), 'logo'); ?></h1>
                </div>
            <?php endif; ?>
            
            <nav id="main-nav">
                
                <?php wp_nav_menu(array( 
                    'container_class' => 'menu-header', 
                    'theme_location' => 'header-menu', 
                    'menu_class' => 'menu cf'
                )); ?>
                
            </nav>
        </div>
    </header>
    
    <div id="main" style="background: linear-gradient(rgba(105, 72, 78, 0.52), rgb(86, 20, 24)), url(<?php the_field('homepage_background_image', 'options'); ?>) no-repeat center; background-size: cover;">
    