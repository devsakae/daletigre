<div class="Comments">
  <div class="List">
    <!-- Start CommentsList-->
    <?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
    <p class="nocomments">Comentários protegidos por senha. Digite-a para poder acessar os comentários.</p>
    <?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
    <!-- You can start editing here. -->


    <?php if ($comments) : ?>
    <h3 id="comments" align="right">
      <?php comments_number('Seja o primeiro a comentar!', 'Um comentário', '% comentários' );?>
    </h3>


<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>
<div class="top"></div>
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
<?php comment_text() ?>
<?php if ($comment->comment_approved == '0') : ?>
<em>Obrigado. Seu comentário será analisado pelo administrador antes de aparecer aqui!</em>
<?php endif; ?>
</li>
<div class="bot"></div>
<div class="gravatar"><cite>Comentário de <?php comment_author_link() ?> (<a href="#comment-<?php comment_ID() ?>" title="">Perm</a>)<br>
Postado em <?php comment_date('d F Y') ?> às <?php comment_time() ?> <?php edit_comment_link('(editar)','&nbsp;&nbsp;',''); ?></cite></div><br>
<?php
/* Changes every other comment to a different class */
$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
?>
<?php endforeach; /* end for each comment */ ?>
</ol>



    <?php else : // this is displayed if there are no comments so far ?>
    <?php if ('open' == $post->comment_status) : ?>
    <!-- If comments are open, but there are no comments. -->
    <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="nocomments">Comentários desativados.</p>
    <?php endif; ?>
    <?php endif; ?>
    <?php if ('open' == $post->comment_status) : ?>
  </div>
<br><br>
  <h3 id="respond">Deixe um comentário!</h3>
  <div class="Form">
    <div class="FormTop"></div>
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
    <p>Você precisa <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">estar logado</a> para comentar.</p>
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p style="display: block; margin-top: 5px; font-size: 10px; font-weight: bold;">Olá, <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>! (<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Logout') ?>">Não é você?</a>)<br><a href="http://www.daletigre.com/2009/08/sua-foto-nos-comentarios-usando-gravatar/" target=_blank>Aprenda a colocar sua foto nos comentários usando o Gravatar</a></p>
      <br clear="all" />
      <?php else : ?>
      <p>
        <label for="author"> <small>Nome
        <?php if ($req) _e('(<strong>*</strong>)'); ?>
        </small>
        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" class="TextField Name" style="width: 384px; background: #e9f8ff url(<?php bloginfo('template_url'); ?>/images/FormName.png) no-repeat left top" />
        </label>
      </p>
      <p>
        <label for="email"> <small>E-mail (
        <?php if ($req) _e('<strong>*</strong>'); ?>
        )</small>
        <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="TextField"  style="width: 384px; background: #e9f8ff url(<?php bloginfo('template_url'); ?>/images/FormEmail.png) no-repeat left top" />
        </label>
      </p>
      <p>
        <label for="url"> <small>Website</small>
        <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="TextField URI" style="width: 384px; background: #e9f8ff url(<?php bloginfo('template_url'); ?>/images/FormURI.png) no-repeat left top" />
        </label>
      </p>
      <p>
        <label><small>Digite o seu comentário:</small>
        <?php endif; ?>
        <textarea name="comment" id="comment" rows="6" tabindex="4" class="TextArea" style="width: 580px;" cols="7"></textarea>
        </label>
      </p><br><br>
      <p align="right">
        <input name="SubmitComment" type="submit" value="Comentar" class="SubmitComment" onmouseover="javascript:changeSty('SubmitCommentIE');" onmouseout="javascript:changeSty('SubmitComment');"  title="Comente" alt="Comente" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
    <?php endif; // If registration required and not logged in ?>
    <?php endif; // if you delete this the sky will fall on your head ?>
  </div>
  <div class="FormBottom"></div>
</div>



