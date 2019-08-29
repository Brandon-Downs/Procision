<?php 

/**

*	Template Name: Services

**/

get_header(); 
global $post;
$page = $wp_query->post->ID;
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php if(has_post_thumbnail()): ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); ?>
    <?php endif; ?>
    <div class="interiorHeader" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),  url(<?php echo $backgroundImg[0]; ?>)">
        <h1><?php the_title(); ?></h1>
    </div>

    <section id="main-content" class="services cf container">
        
        <div class="sidebar">
            <?php 
                $navItems = get_posts(array(
                    'post_type' => 'page', //If your CPT slug is not slide replace slide with your slug
                    'post__in' => array(389,393,391,421,419),
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
        </div>
        
        <div class="statementBlock">
            <?php the_content(''); ?>
        </div>
        
    </section>
	
<?php endwhile; endif; ?>
<div class="container">       
        


<?php get_footer(); ?>