<div id="sidebar-border">
<div id="sidebar">


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Widget Area') ) : ?>


<ul>
	<li class="widget">
		<h3>Categories</h3>
		<div id="zbench-cat">
			<form action="<?php bloginfo('url'); ?>/" method="get">
				<?php
				$select = wp_dropdown_categories('show_option_none=Select category&show_count=1&orderby=name&echo=0');
				$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select); echo $select; ?>
				<noscript><input type="submit" value="View" /></noscript>
			</form>
		</div>
	</li>
</ul>

<?php if ( is_singular() ) { ?>
<ul>
	<li class="widget">
		<h3>Posts recentes</h3>
		<ul>
			<?php
			$myposts = get_posts('numberposts=5&offset=0&category=0');
			foreach($myposts as $post) : setup_postdata($post);
			?>
			<li><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>
<?php } else { ?>
<ul>
	<li class="widget">
		<h3>Aleat&oacute;rios</h3>
		<ul>
			<?php
			$rand_posts = get_posts('numberposts=5&orderby=rand');
			foreach( $rand_posts as $post ) :
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>
<?php } ?>
<ul>
	<li class="widget">
		<h3>Search by Tags!</h3>
		<div><?php wp_tag_cloud('smallest=9&largest=18'); ?></div>
	</li>	
	<li class="widget">
		<h3>Arquivos</h3>
		<div id="zbench-archives">
			<select name=\"archive-dropdown\" onChange='document.location.href=this.options[this.selectedIndex].value;'>
				<option value=\"\"><?php echo attribute_escape(__('Select Month')); ?></option>
				<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
			</select>
		</div>
	</li>
	<li class="widget">
		<h3>Links</h3>
		<ul class="zsofa-links">
			<?php wp_list_bookmarks('title_li=&categorize=0&orderby=id'); ?>
		</ul>
		<div class="fixed"></div>
		<h3>Meta</h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>
</ul>

<?php endif; ?>

<?php if ( is_singular() ) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Singular Widget Area') ) : ?>
<?php endif; } ?>

<?php if (!is_singular()) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Not Singular Widget Area') ) : ?>
<?php endif; } ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area') ) : ?>
<?php endif; ?>

</div>
</div>