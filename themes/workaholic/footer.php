<?php if(is_home()) { ?>
<hr class="grid_12" />
<div id="footer" class="grid_12">
	<div class="grid_4 alpha">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom-Left') ) : ?>
		<?php endif; ?>
	</div>
	<div class="grid_4">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom-Middle') ) : ?>
		<?php endif; ?>
	</div>
	<div class="grid_4 omega">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom-Right') ) : ?>
		<?php endif; ?>
	</div>
</div>
<?php } ?>
<hr  class="grid_12" />
<div class="grid_8">
	<p>All content &copy; Copyright <?php echo date("Y"); ?> by <?php bloginfo('name'); ?>.<br />
	Subscribe to RSS Feed &ndash; <a href="<?php bloginfo('rss2_url'); ?>" class="feed">Posts</a> or just
	<a href="<?php bloginfo('comments_rss2_url'); ?>" class="feed">Comments</a>
</p>
</div>
<div class="grid_4">
	<p>Powered by <a href="http://www.wordpress.org/">WordPress</a><br />
		Designed by <a href="http://www.graphpaperpress.com">Graph Paper Press</a></p>
</div>
</div>
<?php wp_footer(); ?>
<?php if(is_home()) { 
$twitterID = get_option('T_twitter_ID');
$twitterURL = "http://twitter.com/statuses/user_timeline/".$twitterID.".json?callback=twitterCallback2&amp;count=1";
?>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="<?php echo $twitterURL; ?>"></script>
<?php } ?>
</body>
</html>
