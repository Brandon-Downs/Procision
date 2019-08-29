<?php get_header(); 
global $post;
/**
*	Get Current page object
**/
$page = $wp_query->post->ID;

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php if(has_post_thumbnail()): ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); ?>
    <?php endif; ?>
    <div class="interiorHeader" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),  url(<?php echo $backgroundImg[0]; ?>)">
        <h1><?php the_title(); ?></h1>
    </div>

    <section id="main-content" class="fullWidth">
        <div class="statementBlock">
            <?php the_content(''); ?>
        </div>
    </section>
	
<?php endwhile; endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>