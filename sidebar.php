    <!-- End of Main Navigation -->

      <div id="sidebar">
  		<div id="socialBox">
        	<div id="search" class="tile">
            	<div id="big">Suche</div>
              	<div id="small">Alles mit einem Klick</div>
               	<form>
                  <input type="text" name="search" id="searchfield">
              	</form>
    		</div>
            <div id="rss" class="tile">
            	<a href="<?php bloginfo('rss2_url'); ?>" target="_blank">
                	<img src="<?php bloginfo('template_directory'); ?>/img/rss.png" width="95" height="95">
               	</a>
            </div>
            <div id="twitter" class="tile">
            	<a href="http://twitter.com/nedien" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" width="95" height="95">
            	</a>
            </div>
            <div id="facebook" class="tile">
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