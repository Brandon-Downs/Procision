<?php 
/**
*	
**/
get_header(); 
global $post;

$page = $wp_query->post->ID;

?>

<?php 
    $slides = get_posts(array(
        'post_type' => 'service', //If your CPT slug is not slide replace slide with your slug
        'post_status' => 'publish',
        'meta_key'    => '_thumbnail_id', //Checks if the post has a feat img
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    ));
?>

<div id="hero">
    <?php if($slides): ?>
        <div id="slides">
            <ul class="slide">
                <?php foreach($slides as $post): setup_postdata($post); 
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
                $full_url = $url;
                ?>
                    <li class="wrapper" style="background-image: url(<?php echo $full_url; ?>); background-size: cover;">
                        <div id="sliderText">
                            <h2><?php the_title(); ?></h2>   
                        </div>
                        <div class="overlay"></div>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
</div>
<div id="about">
    <div class="container">
       <?php 
    
        if( have_rows('about_section', 'options') ):
            while( have_rows('about_section', 'options') ) : the_row(); 
            ?>
                <h1><?php the_sub_field('about_section_title', 'options'); ?></h1>
                <div class="aboutWrap cf">
                    <div class="description halfBox">
                        <div class="halfBoxWrap">
                            <p><?php the_sub_field('company_description', 'options'); ?></p>
                        </div>
                    </div>
                    <div class="contactInfo halfBox">
                        <div class="halfBoxWrap">
                            <p><?php the_sub_field('company_phone_number', 'options'); ?></p>
                            <p><?php the_sub_field('company_address', 'options'); ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php 
    $slides = get_posts(array(
        'post_type' => 'service', //If your CPT slug is not slide replace slide with your slug
        'post_status' => 'publish',
        'meta_key'    => '_thumbnail_id', //Checks if the post has a feat img
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => 3
    ));
?>
<div id="services" class="wrapper">
    <div class="container cf">
      
            <h1><?php the_field('services_section_title', 'options'); ?></h1>
     
        
        <div class="serviceWrap">
        <?php foreach($slides as $post): setup_postdata($post); ?>
            <div class="box">
                <div class="boxWrap">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <div class="three-by-two aspect-ratio"></div>
                        <?php if ( has_post_thumbnail() ) : ?>
                            
                            <img src="<?php the_post_thumbnail_url('services'); ?>"/>
                          
                        <?php endif; ?>
                        <div class="text">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<div id="mission">
    <?php if(get_field('mission_statement_title', 'options')): ?>
        <h2><?php the_field('mission_statement_title', 'options'); ?></h2>
        <p><?php the_field('mission_statement', 'options'); ?></p>
    <?php endif; ?>
</div>

<?php 
    $freq = get_posts(array(
        'post_type' => 'procision_faq', //If your CPT slug is not slide replace slide with your slug
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => 3
    ));
?>

<div id="faq">
    <?php foreach($freq as $post): setup_postdata($post); ?>
        <div class="container">
            <div class="faqWrap">
                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>

            </div>
        </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
</div>


<?php get_footer(); ?>