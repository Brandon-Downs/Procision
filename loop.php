<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class("cf") ?> id="post-<?php the_ID(); ?>">
		<?php if(has_post_thumbnail()): ?>
        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'alignleft', 'title' => get_the_title())); ?></a>
		<?php endif; ?>

		<div class="articleInfo">

			<header>
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="postMeta wideList">
	            	<time datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time> <?php if(has_category()): ?><span> in <?php the_category(', '); ?></span><?php endif; ?>
	            	<!-- <span class="author">by <?php the_author(); ?></span>. 
	            	
					<?php if ( comments_open() ) : ?> - <a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a><?php endif; ?> -->
	            </p>
			</header>        
	        
			<?php the_excerpt(); ?>

			<a href="<?php the_permalink(); ?>" class="more-link">Read More &raquo;</a>

		</div>
  	</article>
	
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
