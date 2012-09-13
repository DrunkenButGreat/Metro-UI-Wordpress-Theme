<?php
/*
Template Name: Page Panel Whole Site
*/
?>
<? get_header(); ?>
<? get_sidebar(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<!-- Looper -->
	<div id="page">
            <div id="head"><?php the_title(); ?>
            </div>
    <div id="subHead"><? if(get_post_meta($post->ID, 'Subhead', true)) { echo get_post_meta($post->ID, 'Subhead', true); } else { echo "Ups.. there was no time for a second Headline :)"; }  ?>
    </div>
    <div id="content">
				<?php the_content(); ?>
    </div> 
  </div>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>

