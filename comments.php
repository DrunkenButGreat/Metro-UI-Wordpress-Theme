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
            Kommentare (<? echo get_comments_number() ?>)
          </div>
            <?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use twentyten_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define twentyten_comment() and that will be used instead.
					 * See twentyten_comment() in twentyten/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'twentyeleven_comment' ) );
				?>

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
  <? comment_form(); ?>
  </div>