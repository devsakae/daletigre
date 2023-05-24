	</div>
<?php include (TEMPLATEPATH . '/sodelicious2-config.php'); ?>
	<div id="footer_">
		<div id="footer">
			<div class="footer_bloc">
				<div class="footer_bloc_title">Recent Posts</div>
				<?php query_posts('showposts=3'); ?>
				<ul>
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink() ?>" class="title" rel="bookmark" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></a>
						<?php $mycontent = getWords(get_the_content(), 30);?>
						<?php echo strip_tags($mycontent); echo"..."; ?>
					</li>
				<?php endwhile;?>
				</ul>
			</div>
			<div class="footer_bloc">
				<div class="footer_bloc_title">Recent Comments</div>
				<?php include (TEMPLATEPATH . '/simple_recent_comments.php'); /* recent comments plugin by: www.g-loaded.eu */?>
				<?php if (function_exists('src_simple_recent_comments')) { src_simple_recent_comments(6, 60, '', ''); } ?>
			</div>
			<div class="footer_bloc_ads"><? print"$ads3"; ?></div>
		</div>
		<div class="union2"></div>
		<div id="footer_credits">
			<div class="footer_credits_txt">Theme design by <a href="http://www.web2themes.com" title="Wordpress Themes" target="_blank">Web 2.0 Themes</a>. Supported by <a href="http://www.bid4traffic.com/phplinkbidtemplates.html" target="_blank">Free phplinkbid templates</a>, <a href="http://www.text-link-easy.com/" target="_blank">Bid directory</a> and <a href="http://www.topgreencars.com/" target="_blank">Green cars info.</a></div>
		</div>
	</div>	
</div>
<!--/page -->


<?php wp_footer(); ?>
</body>
</html>