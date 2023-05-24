<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <title><?php printf(__('%1$s - Comentários em %2$s', 'kubrick'), get_option('blogname'), the_title('','',false)); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
		body { background:#F2F6E7; font:12px Verdana, Arial, Helvetica, sans-serif; padding:0; margin:2; color:#101010; }
	</style>

</head>
<body id="commentspopup">
<p class="cabeca-comentarios"></p>

<?php
/* Don't remove these lines. */
add_filter('comment_text', 'popuplinks');
if ( have_posts() ) :
while( have_posts()) : the_post();
?>

<p><a href="<?php echo get_post_comments_feed_link($post->ID); ?>"><img src="http://www.daletigre.com/wp-content/themes/greenpark/images/icone-rss.gif" border="0" align="right"></a><br></p>

<?php if ( pings_open() ) { ?>
<p align="center"><?php printf(__('%s', 'kubrick'), get_trackback_url()); ?></p>
<?php } ?>

<?php
// this line is WordPress' motor, do not delete it.
$commenter = wp_get_current_commenter();
extract($commenter);
$comments = get_approved_comments($id);
$post = get_post($id);
if ( post_password_required($post) ) {  // and it doesn't match the cookie
	echo(get_the_password_form());
} else { ?>

<?php if ($comments) { ?>

<ol class="commentlist2">
<?php foreach ($comments as $comment) : ?>
<div class="top"></div>
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
<table width="94%" align="center"><tr><td><?php comment_text() ?>
<?php if ($comment->comment_approved == '0') : ?>
<em>Obrigado. Seu comentário será analisado pelo administrador antes de aparecer aqui!</em>
<?php endif; ?>

</td></tr></table>
</li>
<div class="bot"></div>
<div class="gravatar"><cite><?php comment_author_link() ?>, em <?php comment_date('d F Y') ?> às <?php comment_time() ?> <?php edit_comment_link('(editar)','&nbsp;&nbsp;',''); ?></cite></div><br>
<?php
/* Changes every other comment to a different class */
$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
?>
<?php endforeach; /* end for each comment */ ?>
</ol>



<?php } else { // this is displayed if there are no comments so far ?>
	<p><?php _e('Sem comentários.', 'kubrick'); ?></p>
<?php } ?>

<?php if ( comments_open() ) { ?>
<h2><?php _e('Deixe um comentário', 'kubrick'); ?></h2>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
	<p><?php printf(__('Logado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Sair">Sair? &raquo;</a>', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity, wp_logout_url()); ?></p>
<?php else : ?>
	<p>
          <label for="author"><?php _e('Nome', 'kubrick'); ?></label>
	  <input type="text" name="author" id="author" class="textarea" value="<?php echo esc_attr($comment_author); ?>" size="28" tabindex="1" />
	</p>

	<p>
          <label for="email"><?php _e('E-mail', 'kubrick'); ?></label>
	  <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="28" tabindex="2" />
	</p>

	<p>
	  <label for="url"><?php _e('<abbr title="Universal Resource Locator">URL</abbr>', 'kubrick'); ?></label>
	  <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="28" tabindex="3" />
	</p>
<?php endif; ?>

	<p align="center">
	  <label for="comment"><?php _e('Seu comentário', 'kubrick'); ?></label>
	<br />
	  <textarea name="comment" id="comment" cols="70" rows="4" tabindex="4"></textarea>
	</p>

	<p align="right">
	  <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	  <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER["REQUEST_URI"]); ?>" />

<blockquote>
Moderação de comentários ativada. Seu comentário será enviado e analisado pela administração antes de aparecer aqui.
</blockquote>

          <input name="submit" type="submit" tabindex="5" value="<?php _e('Enviar' , 'kubrick'); ?>" class="SubmitComment" onmouseover="javascript:changeSty('SubmitCommentIE');" onmouseout="javascript:changeSty('SubmitComment');"  title="Comente" alt="Comente" />
	</p>
	<?php do_action('comment_form', $post->ID); ?>
</form>
<?php } else { // comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.', 'kubrick'); ?></p>
<?php }
} // end password check
?>

<div><strong><a href="javascript:window.close()"><?php _e('Close this window.', 'kubrick'); ?></a></strong></div>

<?php // if you delete this the sky will fall on your head
endwhile; // have_posts()
else: // have_posts()
?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!-- // this is just the end of the motor - don't touch that line either :) -->
<?php //} ?>
<p class="credit"><?php timer_stop(1); ?> <cite><?php printf(__('Powered by <a href="%s" title="Powered by WordPress, state-of-the-art semantic personal publishing platform"><strong>WordPress</strong></a>', 'kubrick'), 'http://wordpress.org/'); ?></cite></p>
<?php // Seen at http://www.mijnkopthee.nl/log2/archive/2003/05/28/esc(18) ?>
<script type="text/javascript">
<!--
document.onkeypress = function esc(e) {
	if(typeof(e) == "undefined") { e=event; }
	if (e.keyCode == 27) { self.close(); }
}
// -->
</script>
</body>
</html>
