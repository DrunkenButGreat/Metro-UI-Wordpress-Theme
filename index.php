<? get_header(); ?>
<? get_sidebar(); ?>
    <!-- Area with a slider and a social area -->
    <div id="socialBar">
    	<div id="slider">
        	Placeholder
        </div>
    </div>
    <!-- End area -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
  <div id="post">
            <div id="head"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
            <div id="imageAndCommendWrapper">
                <? 	if ( !has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
                        <img>
                <? 	} else {
                      the_post_thumbnail();
                    } 
                ?>
                <div id="commentNo">
                     <?php comments_number( '0', '1', '%' ); ?> 
                </div>
                <div id="commentLabel"><?php comments_number( 'Kommentare', 'Kommentar', 'Kommentare' ); ?></div>
          </div>
            <div id="textwrapper">
              <div id="content">
                	<?php the_excerpt(); ?>
                </div>
                <div id="readMore">
                	<span style="float:left"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">weiterlesen</span>
                    <img src="<?php bloginfo('template_directory'); ?>/img/continueReading.png" width="15" height="15" style="float:left; margin:7px"></a>
                </div>
               	<div class="subelements" id="postedAtAndBy">von <?php the_author_posts_link() ?> am <?php the_time('d.m.Y') ?> um <?php the_time('H:m'); ?></div>
                <div class="subelements" id="tags">tags: <? the_tags() ?></div>
            </div>
  </div>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>

