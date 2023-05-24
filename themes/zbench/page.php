<?php get_header() ?>
<div id="contentpage">
	<?php the_post(); ?>
	<div class="postpage post-single" id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title title-single"><?php the_title() ?></h2>
		<div class="post-info-top">
			<span class="post-info-date"><?php edit_post_link('Editar', '[', ']'); ?></span>
			<span id="gotocomments"><a href="#comments"  rel="nofollow" title="Ver os comentarios">Ver os coment&aacute;rios</a></span>
		</div>
		<div class="fixed"></div>
		<div class="entry" width="100%">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="nav_link"><strong>P&aacute;ginas: </strong>&after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>
		</div><!-- END entry -->
	</div><!-- END post -->
	<?php comments_template(); ?>
</div><!--content-->

<?php get_footer() ?>