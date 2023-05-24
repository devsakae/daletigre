<?php get_header() ?>
<div id="content">
<?php
$postnum = 1;
$showadsense1 = 1;
?> 
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div class="post<?php if(is_sticky()) {echo " sticky";} ?>" id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title<?php if(is_sticky()) {echo " sticky-h2";} ?>"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="post-info-top">
			<span class="post-info-date">Artigo de<b> <?php the_author(); ?> </b>em <?php the_time(get_option( 'date_format' )); ?> <?php edit_post_link('Editar', '[', ']'); ?></span>
			<span id="gotocomments">
			<?php comments_popup_link('Comente', '1 coment&aacute;rio', '% coment&aacute;rios'); ?>
			</span>
		</div>

		<div class="fixed"></div>
		<div class="entry">
			<?php the_content(__('Clique aqui para continuar lendo...')); ?>
		</div><!-- END entry -->
		<div class="post-info-bottom">
			<span class="post-info-category"><?php the_category(', ') ?></span>
		</div>

		<?php if(is_sticky()) { ?>
			<div class="entry"><p>Este artigo est&aacute; fixo. <a href="<?php the_permalink() ?>" class="more-links">Quer continuar lendo?</a></p></div>
		<?php } ?>
	</div><!-- END post -->
<center><?php if ($postnum == $showadsense1) {
echo '
<script type="text/javascript"><!--
google_ad_client = "pub-4469911752608970";
/* 468x15, criado 20/08/09 */
google_ad_slot = "0785065455";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
';
} ?>

<?php $postnum++; ?> <br><br></center>
	<?php endwhile; else: ?>
	<?php endif; ?>
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
			posts_nav_link(' | ', __('&laquo; Postagens mais recentes'), __('Postagens mais antigas &raquo;'));
		echo '</div>';
	}
}
?>
</div><!--content-->
<?php get_sidebar() ?>
<?php get_footer() ?>