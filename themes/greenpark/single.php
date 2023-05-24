<?php get_header(); ?>
<!-- Container -->


<div class="CON">
  <!-- Start SC -->
  <div class="SC">
    <div class="SC_head">
      <div class="SC_foot">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="Post" id="post-<?php the_ID(); ?>">
          <div class="PostHead">

        <h2><a title="Link para a matéria: <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
          <?php the_title(); ?>
          </a></h2>
<div class="PostDados">
<ul>
<li class="Dados1">
<a title="Link do artigo: <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('j') ?> de <?php the_time('M') ?> de <?php the_time('Y') ?></a>
</li>

<li class="Dados2">

<?php the_author() ?>

</li>



<li class="Dados3">

<?php the_category(', ') ?>

</li>

</ul>

</div>

        <div class="clr"></div>

      </div>



      <div class="PostContent">
        <?php the_content('<p class="serif">Clique aqui para continuar lendo &raquo;</p>'); ?><br>
        <p class="autoria">Leia mais textos de <?php the_author_posts_link(); ?>.</p>
        <?php wp_link_pages(array('before' => '<p><strong>Páginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>

    <div class="PostCom2" align="center">
<br>

<?php if(function_exists('the_ratings')) { the_ratings(); } ?>  
    </div>

<br><br>

    </div>
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
// Both Comments and Pings are open ?><br>
    <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

// Only Pings are Open ?><br>
    <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

// Comments are open, Pings are not ?>
    <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

// Neither Comments, nor Pings are open ?>
    <?php } edit_post_link('+Editar esta matéria', '<p class="edit_this">', '</p>'); ?>

    </span>

    <?php if ( comments_open() ) comments_template(); ?>

    <?php endwhile; else: ?>

    <p>Desculpe-nos, não existe nenhum texto nesta categoria.</p>

    <?php endif; ?>

      </div>

    </div>

  </div>

  <!-- End SC -->

  <?php get_sidebar(); ?>

  <div class="clr"></div>

</div>

<!-- End CON -->

<?php get_footer(); ?>

