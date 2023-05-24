<?php get_header(); ?>
<!-- Container -->

<div class="CON">
  <!-- Start SC -->
  <div class="SC">
    <div class="SC_head">
      <div class="SC_foot">
    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2 class="pagetitle">Arquivo do mês de &#8216;<strong>
      <?php single_cat_title(); ?>
      </strong>&#8217; Categoria</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2 class="pagetitle">Arquivo de
      <?php the_time('F jS, Y'); ?>
    </h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="pagetitle">Arquivo de
      <?php the_time('F, Y'); ?>
    </h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="pagetitle">Arquivo de
      <?php the_time('Y'); ?>
    </h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="pagetitle">Arquivo por autor</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2 class="pagetitle">Arquivos do blog</h2>
      <?php } ?>
    <!-- Start Nav -->
    <?php if (function_exists('wp_pagenavi')) { ?>
    <?php wp_pagenavi(); ?>
    <?php } ?>
    <!-- End Nav -->
    <?php while (have_posts()) : the_post(); ?>
    <div class="Post" id="post-<?php the_ID(); ?>">
      <div class="PostHead">
        <h2><a title="Link permanente <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
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
    </div>
    <?php endwhile; ?>
    <!-- Start Nav -->
    <?php if (function_exists('wp_pagenavi')) { ?>
    <?php wp_pagenavi(); ?>
    <?php } ?>
    <!-- End Nav -->
    <?php else : ?>
    <h2 class="pagetitle">Não encontrado</h2>
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
