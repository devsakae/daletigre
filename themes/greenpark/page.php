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
        <h2><?php the_title(); ?></h2>
       </div>
        <div class="clr"></div>
        <?php the_content('<p class="serif">Leia mais &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Páginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
      <?php if ( comments_open() ) comments_template(); ?>
      <?php endwhile; endif; ?>
      <?php edit_post_link('Editar.', '<p class="edit_this">', '</p>'); ?>
      </div>
    </div>
  </div>
  <!-- End SC -->
  <?php get_sidebar(); ?>
  <div class="clr"></div>
</div>
<!-- End CON -->
<?php get_footer(); ?>
