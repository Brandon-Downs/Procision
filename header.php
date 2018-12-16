<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Procision Sound</title>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/base.css">
    
    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    
    <!-- SLICKNAV -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slicknav.css" />
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.slicknav.min.js"></script>
    
    <!-- SLICK SLIDE -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css"/>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/loadScripts.js"></script>

    <?php wp_head(); ?>
</head>
    
<body>
    <header>
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