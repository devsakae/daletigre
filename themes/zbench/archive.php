<?php get_header() ?>
<div id="content">
<?php the_post(); ?>
	<div class="page-title">
		<?php if ( is_day() ) : ?>
			<h1><?php printf(('Arquivo diário: <span>%s</span>'),get_the_time(get_option('date_format'))) ?></h1>
		<?php elseif ( is_month() ) : ?>
			<h1><?php printf(('Arquivo mensal: <span>%s</span>'),get_the_time('F Y')) ?></h1>
		<?php elseif ( is_year() ) : ?>
			<h1><?php printf(('Arquivo anual: <span>%s</span>'),get_the_time('Y')) ?></h1>
		<?php elseif ( is_category() ) : ?>
			<h1><?php echo('Categorias:'); ?> <span><?php single_cat_title() ?></span></h1>
		<?php elseif ( is_tag() ) : ?>
			<h1><?php echo('Tags:'); ?> <span><?php single_tag_title() ?></span></h1>
		<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
			<h1>Arquivo</h1>
		<?php endif; ?>
	</div>
<?php rewind_posts(); ?>

	<?php while (have_posts()) : the_post();?>
	<div class="post" id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="post-info-top">
			<span class="post-info-date">Artigo de<b> <?php the_author(); ?> </b>, <?php the_time(get_option( 'date_format' )); ?> <?php edit_post_link('Editar', '[', ']'); ?></span>
			<span id="gotocomments">
			<?php comments_popup_link('Seja o primeiro a comentar!', '1 coment&aacute;rio', '% coment&aacute;rios'); ?>
			</span>
		</div>
		<div class="fixed"></div>
		<div class="entry">
			<?php the_excerpt(__('&raquo; Clique aqui para ler o artigo')); ?>
		</div><!-- END entry -->
	</div><!-- END post -->
	<?php endwhile; ?>
<?php
if(function_exists('wp_page_numbers')) {
	wp_page_numbers();
}
elseif(function_exists('wp_pagenavi')) {
	wp_pagenavi();
} else {
	global $wp_query;
	$total_pages = $wp_query->max_num_pages;
	if ( $total_pages > 1 ) {
		echo '<div id="pagination">';
			posts_nav_link(' | ', __('&laquo; Anterior'), __('Próxima &raquo;'));
		echo '</div>';
	}
}
?>
</div><!--content-->
<?php get_sidebar() ?>
<?php get_footer() ?>