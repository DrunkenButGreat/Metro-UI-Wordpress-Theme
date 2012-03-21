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
  <div id="page_banner_2sidepanel">
  	<div id="banner">
    	<a href="<? echo get_post_meta(get_the_ID(), "bannerLink", true); ?>">
        	<img src="<? bloginfo('template_directory'); echo '/'.get_post_meta(get_the_ID(), "bannerImg", true); ?>">
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
    <div id="footer">
    	  &copy;<?php bloginfo('name'); ?> <br>
          Powered by Wordpress <?php bloginfo('version'); ?> | Theme: <a href="https://github.com/nedien/Metro-UI-Wordpress-Theme" >Metro UI for Wordpress (join the development)</a> | Idea by <a href="http://www.nedien.de">Nedien</a><br>
    </div>
</div>
</body>

