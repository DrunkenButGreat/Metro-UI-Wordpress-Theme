<? get_header(); ?>
<? get_sidebar(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
 <div id="single">
            <div id="head"><?php the_title(); ?></div>
            <div class="subelements" id="postedAtAndBy">von <?php the_author_posts_link() ?> am <?php the_time('d.m.Y') ?> um <?php the_time('G:i'); ?></div>
            <div id="content">
            	<? 	if ( !has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
                     		
                    <? 	} else {
                          the_post_thumbnail( array(150,150) );
                       	} 
               	?>
            	<div class="subelements" id="tags"><? the_tags() ?></div>
				<?php the_content(); ?>
            </div>   
  </div>
  <?php comments_template() ?>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>

