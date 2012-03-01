<?php
/*
Template Name: Page Image&2Panels
*/
?>
<? get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
  <div id="page_banner_2sidepanel">
  	<div id="banner">
    	<a href="<? echo get_post_meta(get_the_ID(), "bannerLink", true); ?>">
        	<img src="<? echo get_post_meta(get_the_ID(), "bannerImg", true); ?>"/>
        </a>
    </div>
    <div id="socialBox">
    	<div id="panel" style="margin-bottom:10px">
        	<? echo get_post_meta(get_the_ID(), "1stPanel", true); ?>
        </div>
        <div id="panel">
        	<? echo get_post_meta(get_the_ID(), "2ndPanel", true); ?></div>
    </div>
    <div id="content">
				<?php the_content(); ?>
            </div>
  </div>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>

