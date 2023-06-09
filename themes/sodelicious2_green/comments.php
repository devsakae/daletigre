<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>
<div class="commentlist">
<p>
<strong>
<?php comments_number(__('No Comments'), __('1 Comment(s)'), __('% Comments')); ?>
</strong>
</p>
</div>
<?php if ( $comments ) : ?>

<div class="commentlist">
<div class="commentlist_box">

	<?php foreach ($comments as $comment) : ?>

	<div class="comment_ind <?php comment_ID() ?>">
		<div class="comment_by"><strong><?php comment_author_link() ?></strong><br /><span style="font-size:9px; color:#b9cf95;"><?php comment_date() ?></span></div>
		<div class="comment_content"><?php comment_text() ?></div>
	</div>
	

<?php endforeach; ?>

</div>
</div>

<?php else : ?>
<p><?php _e('No comments yet.'); ?></p>
<?php endif; ?>

<p>
<?php comments_rss_link(__('Comments RSS')); ?> 
<?php if ( pings_open() ) : ?>

<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack Identifier URI'); ?></a>

<?php endif; ?>
</p>

<?php if ( comments_open() ) : ?>
<div class="commentlist">
<p><strong><?php _e('Leave a comment'); ?></strong></p>
</div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Mail (will not be published) <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea></p>

<input name="submit" type="image" src="<?php bloginfo('template_url'); ?>/images/submit.gif" id="submit" tabindex="5" value="Submit Comment" style="float:left;" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>