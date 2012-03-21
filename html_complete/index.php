<!-- for offline designing purpose -->
<style type="text/css">
	@import url("../style.css");
</style>
<body>
<div id="wrapper">

	<!-- Rightcorner Menu -->
    <div id="headerMenu">
        <ul>
          <li><a href="#">Rss</a></li>
          <li>About</li>
        </ul>
    </div>
    <!-- End Rightcorner Menu -->
    <!-- Box with Blog Title -->
    <div id="logoBox">
    	<div id="main"><? bloginfo("name") ?>Bla</div>
        <div id="sub"><? wp_title() ?>blub</div>
    </div>
    <!-- End of Box -->
    <!-- Main Navigationbar -->
    <div id="navBar">
      <div id="mainMenu">
      	<ul>
            <a href="#"><li>Home</li></a>
            <li><a href="#">News</a>
            	<ul>
                	<li><a href="#">Test</a></li>
                    <li>Test</li>
                </ul>
            </li>
        </ul>	              
      </div> 
   	  <div id="search">
        	<form>
        	  <input type="text" name="search" id="searchfield">
       	  </form>
        </div>
    </div>
    <!-- End of Main Navigation -->

      <div id="sidebar">
  		<div id="socialBox">
        	<div id="subscribe">
            </div>
            <div id="rss"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png" width="95" height="95">
            </div>
            <div id="twitter"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" width="95" height="95">
            </div>
            <div id="facebook"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" width="95" height="95">
            </div>
        </div>
    </div>
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
                <div id="commentLabel">comments</div>
          </div>
            <div id="textwrapper">
              <div id="content">
                	<?php the_content(); ?><p>test</p>
                </div>
                <div id="readMore">
                	<span style="float:left"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Continue reading</span>
                    <img src="<?php bloginfo('template_directory'); ?>/img/continueReading.png" width="15" height="15" style="float:left; margin:7px"></a>
                </div>
               	<div class="subelements" id="postedAtAndBy">by <?php the_author_posts_link() ?> <?php the_time('F jS, Y') ?> at <?php the_time('g:i a'); ?></div>
                <div class="subelements" id="tags">tagged: <? the_tags ?></div>
            </div>
  </div>
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
    <div id="footer">
    	  &copy;<?php bloginfo('name'); ?> <br>
          Powered by Wordpress <?php bloginfo('version'); ?> | Theme: <a href="https://github.com/nedien/Metro-UI-Wordpress-Theme" >Metro UI for Wordpress (join the development)</a> | Idea by <a href="http://www.nedien.de">Nedien</a><br>
    </div>
</div>
</body>

