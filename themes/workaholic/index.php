<?php get_header(); ?>
<div id="introduction" class="grid_8">
	<h2>Hi! We design beautiful websites.</h2>
	<h3>Not just beautiful but usable websites. Be sure to check out what I have done and <a href="#">contact us</a> if you want to improve yours as well.</h3>	
</div>
<div id="twitter" class="grid_4">
	<div id="twitter-top">		
        <ul id="twitter_update_list"><li></li></ul>		
	</div>
</div>
<hr class="grid_12" />
	<div id="content" class="grid_12">
	<?php if (have_posts()) : ?>	
	<?php $i=0; ?>	
	<h2>Latest Work</h2>
			
		<?php 		
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('cat=-' . $blog_ID. '&paged='.$paged);
		while (have_posts()) : the_post();$i++;?>	
						
			<div class="portfolio grid_4<?php if ($i == 1) { ?> alpha<?php } else if($i==3) {?> omega<?php $i = 0;} ?>">
				<h4><a href="<?php the_permalink(); ?>" class="thumb">						
					<?php 
						if (get_post_meta($post->ID, 'thumbnail-wide', true)) { // pulls from WP Post Thumbnail Plugin ?>
							<img src="<?php echo get_post_meta($post->ID, 'thumbnail-wide', true); ?>" width="284" height="150" border="0" />
					<?php }else{
							postimage('thumbnail'); 							
						} ?>						
						<span class="title"><?php the_title(); ?></span></a><span class="category"><?php the_category(' + '); ?></span></h4>
			</div>		

		<?php endwhile; wp_reset_query();?>
	
		<div class="navigation">
			<div class="next"><?php next_posts_link('Next &rarr;') ?></div>
			<div class="prev"><?php previous_posts_link('&larr; Previous') ?></div>
		</div>		

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
