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
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Looper -->
  <div id="single">
            <div id="head"><?php the_title(); ?></div>
            <div class="subelements" id="postedAtAndBy">by <?php the_author_posts_link() ?> <?php the_time('F jS, Y') ?> at <?php the_time('g:i a'); ?></div>
            <div id="content">
            	<? 	if ( !has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
                     		<img>
                    <? 	} else {
                          the_post_thumbnail();
                       	} 
               	?>
            	<div class="subelements" id="tags">tagged: <? the_tags ?></div>
				<?php the_content(); ?><p>test</p>
            </div>   
  </div>
  
  <div id="comment">
  	<?php if ( post_password_required() ) : ?>
		<div id="nopassword">Diese Eintr&auml;ge sind Passwort gesch&uuml;zt</div>
	<?php
		echo '</div><!-- #comments -->';
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>
		<?php if ( have_comments() ) : ?>
          <div id="title">
            Kommentare (<? get_comments_number() ?>)
          </div>
		  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>        
    <div id="comment-nav">
                <div class="assistive-text">Komentarnavigation</div>
      <div class="nav"><?php previous_comments_link('&larr; &Auml;ltere Kommentare'); ?></div>
        <div class="nav"><?php next_comments_link('Neuere Kommentare &rarr;'); ?></div>
      </div>
        <?php endif; // check for comment navigation ?>
			
            <div class="comment_list">
            	<?php if ( $comment->comment_approved == '0' ) : ?>
					<div class="awaitingMod">Kommentar m&ouml;chte morderiert werden!</div>
	  			<?php endif; ?>
            	<div class="avatar"><?php echo get_avatar( $comment, 150 ); ?></div>
                <div class="says"><?  echo get_comment_author_link() ?> <span style="font-weight:bold">sagte:</span></div>
                <div class="commentText"><?php comment_text(); ?></div>
                <div class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
            </div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
        <div id="comment-nav">
            <div class="assistive-text">Komentarnavigation</div>
            <div class="nav"><?php previous_comments_link('&larr; &Auml;ltere Kommentare'); ?></div>
            <div class="nav"><?php next_comments_link('Neuere Kommentare &rarr;'); ?></div>
        </div>
		<?php endif; // check for comment navigation ?>
  <?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<div id="nocomments">Bisher gibt es keine Kommentare</div>
	<?php endif; ?>
  <div id="respond">
				<h3 id="reply-title">Hinterlasse eine Antwort <small><a rel="nofollow" id="cancel-comment-reply-link" href="/?p=1#respond" style="display:none;">Antworten abbrechen</a></small></h3>
									<form action="http://area51.nedien.de/wp-comments-post.php" method="post" id="commentform">
																			<p class="comment-notes">Deine E-Mail-Adresse wird nicht veröffentlicht. Erforderliche Felder sind markiert <span class="required">*</span></p>							<p class="comment-form-author"><label for="author">Name</label> <span class="required">*</span><input id="author" name="author" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-email"><label for="email">E-Mail-Adresse</label> <span class="required">*</span><input id="email" name="email" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="text" value="" size="30" /></p>
												<p class="comment-form-comment"><label for="comment">Kommentar</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						<p class="form-allowed-tags">Du kannst folgende <abbr title="HyperText Markup Language">HTML</abbr>-Tags benutzen:  <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						<p class="form-submit">
							<input name="submit" type="submit" id="submit" value="Kommentar abschicken" />
							<input type='hidden' name='comment_post_ID' value='1' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
											</form>
							</div><!-- #respond -->
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

