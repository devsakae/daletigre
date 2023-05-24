<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/sodelicious2-config.php'); ?>
<div id="page_">
	<div id="page_content">
<?php if (have_posts()) : ?>
<?php $count = 1; ?> 
<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post_left">
				<div class="bookmark" style="padding-top:20px;">
					<div class="book_item"><a href="http://digg.com/submit?phase=2&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&bodytext=<?php the_excerpt(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/digg.gif" alt="Digg" border="0" /></a></div>
					<div class="book_item"><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/stumbleupon.gif" alt="Stumbleupon" border="0" /></a></div>
					<div class="book_item"><a href="http://www.technorati.com/faves?add=<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/technorati.gif" alt="Technorati" border="0" /></a></div>
					<div class="book_item"><a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/delicious.gif" alt="Delicious" border="0" /></a></div>
				</div>
			</div>
			<div class="post_right">
				<div class="post_header">
					<h2 class="titleh2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="categories"></div>	
				</div>
				<div class="post_content">
					<div class="post_entry"><?php the_content('<strong>Read more</strong>'); ?>
					<br />
					<?php if ($count == 1) : ?><div style="float:left; padding-left:40px;"><? print"$ads2"; ?></div><?php endif; $count++; ?>
						
					</div>
				</div>
			</div>		
		</div>
			<?php endwhile; ?><?php else : ?>
	<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>	

	<?php endif; ?>	
	<div class="navigation">
		<div class="pleft"><?php next_posts_link('Previous Entries') ?></div>
		<div class="pright"><?php previous_posts_link('Next Entries') ?></div>
	</div>	
	</div>
	<div id="side">
		<div id="sidebar_">
			<div id="sidebar__">
			<?php get_sidebar(); ?>
			<?php get_sidebar2(); ?>
			<?php get_sidebar3(); ?>
			</div>
		</div>
	</div>
	<div class="union"></div>	
<?php get_footer(); ?>
