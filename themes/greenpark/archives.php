<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<!-- Container -->

<div class="CON">
  
  <!-- Start SC -->
  <div class="SC">
    <div class="SC_head">
      <div class="SC_foot">
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      <h2>Arquivo mensal:</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
      <h2>Arquivo por título:</h2>
      <ul>
        <?php wp_list_categories(); ?>
      </ul>
      </div>
    </div>
  </div>
  <!-- End SC -->
  <?php get_sidebar(); ?>
  <div class="clr"></div>
</div>
<!-- End CON -->
<?php get_footer(); ?>
