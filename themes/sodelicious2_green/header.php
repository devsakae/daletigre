<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php if ( is_single() ) { ?> <?php the_title(); ?> -<?php } ?> <?php bloginfo('name'); ?> </title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<meta name="description" content="<?php bloginfo('description') ?> " />
<meta name="robots" content="index,follow" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/js_liveclock.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/mootools.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jd.gallery.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jd.gallery.css" type="text/css" media="screen" />
<?php wp_head(); ?>
<script type="text/javascript">
function startGallery() {
var myGallery = new gallery($('myGallery'), {
timed: true,
showArrows: false,
showCarousel: false,
showInfopane: false,
embedLinks: true
});
}
window.onDomReady(startGallery);
</script>
</head>
<?php include (TEMPLATEPATH . '/sodelicious2-config.php'); ?>
<body>
	<div id="page">
		<div id="header">
			<div id="header_title">
				<h1 class="titleh1"><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
			<? include "introduction.php";?>
			<div id="menu">
				<div class="menu_right"></div>
				<ul id="menu_items">
					<li class="page_item_"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
					<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
				</ul>
				<div class="menu_left"></div>
			</div>
			<div id="introduction">
				<div class="introduction_text">
					<p style=" color:#b9cf95; padding-bottom:5px; text-align:left; font-size:14px; font-weight:normal;">Welcome</p>
					<p>Welcome to <strong><?php bloginfo('name'); ?></strong>. This is a custom <strong>text</strong>.</p>
					<p style="padding-top:10px;"><? print"$ads1"; ?></p>
				</div>			
			</div>
			<div id="side_header">
				<div class="side_header_content">
					<div id="clock"><script type="text/javascript">showdate();</script></div>
					<div class="side_header_item">
						<p style="float:right; padding-right:10px;"><a href="feed"><img src="<?php bloginfo('template_url'); ?>/images/feed_rss.gif" alt="Feed Rss" border="0" /></a></p>
						<p style="float:right; padding-top:5px;padding-right:10px;"><a href="http://feeds.feedburner.com/web2themes"><img src="http://feeds.feedburner.com/~fc/web2themes?bg=eaeef0&amp;fg=85979d&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a></p></div>
				</div>
			<div id="search_box"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
			</div>
		</div>
  <!--/header -->