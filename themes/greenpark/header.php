<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<?php $theTitle=wp_title("", false); if($theTitle != "") { ?>
<title><?php echo wp_title("",false); ?> -
<?php bloginfo('name'); ?>
</title>
<?php } else { ?>
<title>
<?php bloginfo('name'); ?>
</title>
<?php } ?>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/daletigre" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<?php comments_popup_script(510, 600); ?>

</head>
<a name="up"></a>
<script type="text/javascript">
function openWindow(url,width,height,options,name) {
width = width ? width : 800;
height = height ? height : 600;
options = options ? options : 'resizable=yes';
name = name ? name : 'openWindow';
window.open(
url,
name,
'screenX='+(screen.width-width)/2+',screenY='+(screen.height-height)/2+',width='+width+',height='+height+','+options
)
}
</script>

<script>
window.JSON = {
 parse: function(st){
  return st.evalJSON();
 },
 stringify: function(obj){
  return Object.toJSON(obj);
 }
};
</script>

<body>

<div class="css-opacity" id="last_tweet">Carregando twitter @TigreLOG</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
function twitter_callback_function( tweet ) {
    var name = tweet[0].user.name.split(' ', 1);
    $('#last_tweet').html( '<div class="msg" align="right"><img src="http://www.tigrelog.com.br/imagens/twitterbird.png" align="middle">&nbsp;&nbsp;' + tweet[0].text + '&nbsp;&nbsp;</div>'
    );
    $('#last_tweet').addClass('last_tweet_box');
}
</script>

<script src="http://twitter.com/statuses/user_timeline/tigrelog.json?callback=twitter_callback_function&count=1"></script>

<div class="css-opacity5"><img src="http://www.tigrelog.com.br/imagens/parceria.png" align="left"> Este &eacute; um site parceiro TigreLOG - <a href="http://www.tigrelog.com.br" target=_parent>www.tigrelog.com.br</a></div>
<div style="z-index: 9999; left: 0px; TOP: 0px; height: 25px; width: 100%; background-color: #000000; padding-top: 2px"></div>


<div id="bgcontainer">
<!-- START Header -->
<div class="Header">
  <div class="Logo">
    <div class="LogoText">
      <h1><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" title="" alt="" /></a></h1>
    </div>
  </div>
  <!-- Start Search -->
  <div class="Search">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input name="s" type="text" value="pesquisa..." class="keyword" onblur="if(this.value=='') this.value='pesquisar...';" onfocus="if(this.value=='pesquisar...') this.value='';"/>
      <input name="submit" type="submit" class="search" title="Search" value="Buscar" alt="Search" />
    </form>
  </div>
  <!-- End Search -->
  <div class="clr"></div>
  <div class="Menu">
    <ul>
      <li><a href="<?php echo get_option('home'); ?>">Principal</a></li>
      <li><a href="http://www.tigrelog.com.br">Fórum</a></li>
      <li><a href="<?php echo get_option('home'); ?>/category/brindes/">Brindes</a></li>
      <li><a href="<?php echo get_option('home'); ?>?r_sortby=highest_rated&r_orderby=desc">Melhores</a></li>
      <li><a href="<?php echo get_option('home'); ?>?random">Random</a></li>
      <li><a href="<?php echo get_option('home'); ?>?page_id=5">Sobre nós</a></li>
      <li><a href="<?php echo get_option('home'); ?>?page_id=6">Contato</a></li>
      <li><a href="http://mail.daletigre.com"><b>Webmail</b></a></li>
    </ul>
  </div>
</div>

<!-- END Header -->
