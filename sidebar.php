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
            <div id="rss">
            	<a href="<?php bloginfo('rss2_url'); ?>" target="_blank">
                	<img src="<?php bloginfo('template_directory'); ?>/img/rss.png" width="95" height="95">
               	</a>
            </div>
            <div id="twitter">
            	<a href="http://twitter.com/nedien" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" width="95" height="95">
            	</a>
            </div>
            <div id="facebook">
            	<a href="https://www.facebook.com/julian.kipka" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" width="95" height="95">
            	</a>
            </div>
        </div>
        <ul id="dynSidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
		</ul>
    </div>
    <!-- Area with a slider and a social area -->