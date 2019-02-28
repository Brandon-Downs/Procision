<?php 
/**
*	Template Name: Homepage
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

<div id="mission">
    <?php if(get_field('mission_statement_title', 'options')): ?>
        <h2><?php the_field('mission_statement_title', 'options'); ?></h2>
        <p><?php the_field('mission_statement', 'options'); ?></p>
    <?php endif; ?>
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
<div id="services">
    <?php foreach($slides as $post): setup_postdata($post); ?>
        <div class="container">
            <div class="serviceWrap">
                <?php the_post_thumbnail('services'); ?>
                <div class="serviceImage">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
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