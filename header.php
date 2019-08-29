<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,600,700,800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
    
<?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body class="<?php echo $body_classes; ?>"><!--<![endif]-->
    

    <header id="mastHead"> 
        <div class="container cf">
            <?php if(get_field('logo', 'options')): ?>
                <div id="logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <h1><?php echo wp_get_attachment_image(get_field('logo', 'options'), 'logo'); ?></h1>
                    </a>
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
    
    
    