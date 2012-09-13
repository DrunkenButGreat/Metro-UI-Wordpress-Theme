<!-- for offline designing purpose -->
<style type="text/css">
	@import url("../style.css");
</style>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script>
jQuery(document).ready(function(e) {
   
   
   jQuery("#wholePagePanel").each(function(index, element) {
		jQuery(this).hover(function(e) {
			jQuery(this).children('.title').animate(
			{
				height: '0px',
				top: '240px'
			},
			500);
    	},
		function(e) {
			jQuery(this).children('.title').animate(
			{
				height: '90px',
				top: '150px'
			},
			500);
    	}
		);
		
	});
   
    
});

</script>
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
        	<div id="search">
            	<div id="big">Suche</div>
              <div id="small">Alles mit einem Klick</div>
           	  <form>
                  <input type="text" name="search" id="searchfield">
              </form>
            </div>
            <div id="rss"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png" width="95" height="95">
            </div>
            <div id="twitter"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" width="95" height="95">
            </div>
            <div id="facebook"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" width="95" height="95">
            </div>
        </div>
    </div>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
    <a href="#"><div id="wholePagePanel" style="background-image:url(../raw_img/lupe.png); background-size: cover; border-color">
    	<div class="title" style="background-color">
        	Test<?php the_title(); ?>
        </div>
    </div>
    </a> 
    <?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
    <div class="pageNav"><?php previous_posts_link(); ?> <?php next_posts_link(); ?></div>
    <div id="footer">
    	  &copy;<?php bloginfo('name'); ?> <br>
          Powered by Wordpress <?php bloginfo('version'); ?> | Theme: <a href="https://github.com/nedien/Metro-UI-Wordpress-Theme" >Metro UI for Wordpress (join the development)</a> | Idea by <a href="http://www.nedien.de">Nedien</a><br>
    </div>
</div>
</body>

