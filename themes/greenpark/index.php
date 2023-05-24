<?php ini_set('allow_url_fopen', 'on'); ?>
<?php get_header(); ?>
<!-- Container -->


<div class="CON">
  <!-- Start SC -->
  <div class="SC">
    <div class="SC_head">
      <div class="SC_foot">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="Post" id="post-<?php the_ID(); ?>">
          <div class="PostHead">
            <h2><a title="Link do artigo: <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
              <?php the_title(); ?>
              </a></h2>

<div class="PostDados">
<ul>
<li class="Dados1">
<a title="Link do artigo: <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('j') ?> de <?php the_time('M') ?> de <?php the_time('Y') ?></a>
</li>

<li class="Dados2">
<?php the_author_link(); ?>
</li>

<li class="Dados3">
<?php the_category(',&nbsp;') ?>
</li>
</ul>
</div>
            <div class="clr"></div>
          </div>
          <div class="PostContent">
            <?php the_content('Leia mais... &raquo;'); ?>
          </div>

          <div class="PostCom">
            <ul>
              <li class="Com">
               <?php comments_popup_link('Seja o primeiro a comentar!', '1 comentário', '% comentários'); ?>  
              </li>           
              <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
            </ul>
          </div>

<p align="center"><img src="<?php bloginfo('template_directory'); ?>/images/separador1.gif" alt="Separador"></img></p>
        </div>

        <!--<?php trackback_rdf(); ?>-->
        <?php endwhile; ?>


        <?php else : ?>
        <h2>
          <?php _e('Not Found'); ?>
        </h2>
        <p>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- End SC -->
  <?php get_sidebar(); ?>
  <div class="clr"></div>
</div>

<div align="center" class="wp-pagenavi">
        <!-- Start Nav -->
        <?php if (function_exists('wp_pagenavi')) { ?>
        <?php wp_pagenavi(); ?>
        <?php } ?>
        <!-- End Nav -->
</div>

<!-- Container -->
<?php get_footer(); ?>
