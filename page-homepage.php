<?php 

/**

*	Template Name: Homepage

**/

get_header(); 
global $post;
$page = $wp_query->post->ID;
?>

<div id="main" style="background: linear-gradient(rgba(105, 72, 78, 0.52), rgb(86, 20, 24)), url(<?php the_field('homepage_background_image', 'options'); ?>) no-repeat center; background-size: cover;">
    <div class="container cf">
        <div class="CTA">
            <a href="#">Get Quote</a>
        </div>

        <?php if(get_field('mission_statement', 'options')): ?>
            <div class="statementBlock">
                <p><?php the_field('mission_statement', 'options');?></p>
            </div>
        <?php endif; ?>


    </div>
    
</div>
<div class="container">       
        
<?php 
    $navItems = get_posts(array(
        'post_type' => 'page', //If your CPT slug is not slide replace slide with your slug
        'post__in' => array(389,393,391),
        'post_status' => 'publish',
        //'meta_key'    => '_thumbnail_id', //Checks if the post has a feat img
        'orderby' => 'DESC',
        'order' => 'ASC',
        'posts_per_page' => -1
    ));
    $link = get_field('hero_link_to');
?>

<section class="secondaryNav">
    <div class="container cf">
        <?php if($navItems): ?>
            <?php foreach($navItems as $post): setup_postdata($post); ?>
            <?php if(has_post_thumbnail()): ?>
                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'services' ); ?>
            <?php endif; ?>
        
            <a href="<?php echo get_permalink( $post->ID ); ?>" style="background: url(<?php echo $backgroundImg[0]; ?>)">
                <h3><?php the_title(); ?></h3>
            </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>