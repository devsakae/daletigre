<?php get_header() ?>
<div id="contentpage">
	<?php the_post(); ?>
	<div class="post post-single" id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title title-single"><?php the_title() ?></h2>
		<div class="post-info-top">
			<span class="post-info-date">Artigo de<b> <?php the_author(); ?> </b>em <?php the_time(get_option( 'date_format' )); ?> <?php edit_post_link('Editar', '[', ']'); ?></span>
			<span id="addcomment"><a href="#respond"  rel="nofollow" title="Deixe um comentario">Comentários</a><?php comments_number(' (0)', ' (1)', ' (%)'); ?></span>
		</div>
		<div class="fixed"></div>
		<div class="entry">
			<?php the_content(); ?>
			<?php advman_ad(banner) ?>
		<br><span class="post-info-category">Leia mais na(s) categoria(s): <?php the_category(', ') ?></span><br><br>
			<?php wp_link_pages('before=<div class="nav_link"><strong>P&aacute;ginas: </strong>&after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>
		</div><!-- END entry -->
		<?php if(function_exists('Count_Button')) { echo Short_Button(); } ?>
		<div class="add-info">
			<?php if(function_exists('st_related_posts')) { st_related_posts('title=<h3>Artigos relacionados</h3>'); } ?>
		</div>
		<div id="nav-below">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ) ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ) ?></div>
		</div><!-- #nav-below -->					
	</div><!-- END post -->
	<?php comments_template(); ?>
</div><!--content-->
<?php get_footer() ?>