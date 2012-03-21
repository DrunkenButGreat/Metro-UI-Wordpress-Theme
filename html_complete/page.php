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
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
  <div id="page">
            <div id="head"><?php the_title(); ?>
            </div>
    <div id="subHead"><? if(get_post_meta(get_the_ID(), "Subhead", true)=="") { echo get_post_meta(get_the_ID(), "Subhead", true); } else { echo "Ups.. there was no time for a second Headline :)"; } ?>
    </div>
    <div id="content">
				<?php the_content(); ?>
            </div>
    <div class="subelements" id="postedAtAndBy">by <?php the_author_posts_link() ?> <?php the_time('F jS, Y') ?> at <?php the_time('g:i a'); ?></div>
            <div class="subelements" id="tags">tagged: <? the_tags() ?></div>   
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

