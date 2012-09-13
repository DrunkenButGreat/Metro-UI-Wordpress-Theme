<?php
/*
Template Name: Big box Sideoverview
*/
?>
<? get_header(); ?>
<? get_sidebar(); ?>
    <?
	query_posts(array( 'cat' => get_post_meta($post->ID, 'Cat', true), 'post_type' => 'page' ) );
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<!-- Looper -->
    	<a href="<?php the_permalink() ?>">
			<? $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'wholePagePanel' ); ?>
    		<div class="wholePagePanel" style="background-image:url(<? echo $image ?>); background-size: cover; border-color<? if(get_post_meta($post->ID, 'Color', true)) { echo ":".get_post_meta($post->ID, 'Color', true); } ?>">
    			<div class="title" style="background-color<? if(get_post_meta($post->ID, 'Color', true)) { echo ":".get_post_meta($post->ID, 'Color', true); } ?>">
        			<?php the_title(); ?>
        		</div>
        	</div>
        </a>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>

