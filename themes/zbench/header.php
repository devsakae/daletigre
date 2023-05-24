<?php include './thumbsup/core/thumbsup.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<!--[if lte IE 6]>
	<script src="<?php bloginfo('template_directory'); ?>/ie6/warning.js"></script>
	<script>window.onload=function(){e("<?php bloginfo('template_directory'); ?>/ie6/")}</script>
	<![endif]-->
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php $the_title = wp_title(' - ', false); if ($the_title != '') : ?>
    <title><?php echo wp_title('',false); ?> | <?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?><?php if ( $paged < 2 ) {} else { echo (' - page '); echo ($paged);}?></title>
<?php endif; ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/DaleTigre" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php $options = get_option('zBench_options'); ?>
	<?php wp_head(); ?>
	<?php comments_popup_script(510, 600); ?>
<script type="text/javascript">
<!--
function popup(url) 
{
 params  = 'width='+screen.width;
 params += ', height='+screen.height;
 params += ', top=0, left=0'
 params += ', fullscreen=yes';

 newwin=window.open(url,'goldotigre', params);
 if (window.focus) {newwin.focus()}
 return false;
}
// -->
</script>
<script type="text/javascript" src="http://www.daletigre.com/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo THUMBSUP_WEBROOT ?>thumbsup/core/thumbsup.js.php"></script>
	</head>


	<body>
<div id="nav">
	<center><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" title="" alt="" /></a></center>
	<?php if($options['nav_id'] == 'pages') : ?>
		<div id="menus"><ul><li<?php if ( is_home() ) { echo ' class="current_page_item"'; }?>><a href="<?php echo get_settings('home'); ?>">Principal</a></li><?php wp_list_pages('title_li=&depth=2'); ?><li><a href="http://mail.daletigre.com">Webmail</a></li></ul></div>
	<?php elseif($options['nav_id'] == 'categories') :  ?>
		<div id="menus"><ul><?php wp_list_categories('title_li=&depth=2'); ?></ul></div>
	<?php else :  ?>
		<div id="menus"><ul><li<?php if ( is_home() ) { echo ' class="current_page_item"'; }?>><a href="<?php echo get_settings('home'); ?>">Principal</a></li><?php wp_list_pages('title_li=&depth=2'); ?></ul></div>
	<?php endif; ?>
	<div id="search">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
</div>
<div id="wrapper">
	<div id="header">	
	<div id="rss"><a href="<?php if($options['rss_url'] <> '') { echo($options['rss_url']); } else { bloginfo('rss2_url'); } ?>" rel="nofollow" title="RSS Feed">RSS Feed</a></div>
		<?php if($options['twitter_url'] <> '') : ?>
			<div id="twitter"><a href="<?php echo($options['twitter_url']); ?>" rel="nofollow" title="Follow me on twitter.">Follow me on twitter.</a></div>
		<?php endif; ?>
		<?php if($options['facebook_url'] <> '') : ?>
			<div id="facebook"><a href="<?php echo($options['facebook_url']); ?>" rel="nofollow" title="Facebook">Facebook</a></div>
		<?php endif; ?>
	</div>
<hr />
