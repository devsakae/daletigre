<div class="SR">
  <!-- Start SideBar -->
  <div class="SRR">
    <!-- Start Categories -->
    <div class="category">
      <h2>Categorias</h2>
        <ul class="category"><li>
        <?php wp_list_categories('orderby=name&show_count=1&hierarchical=0&title_li=&current_category'); ?>
        </li>
        <br>
        <li><?php wp_register(); ?></li>
        </ul>
    </div>
    <!-- End Categories -->

    <!-- Start Archives -->
    <div class="arhives">
      <h2>Arquivo</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
<ul>
<li><script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/daletigre/FFFFCC/111111"></script></li>

<li><a href="http://feeds.feedburner.com/daletigre"><img src="http://feeds.feedburner.com/~fc/daletigre?bg=FFFF99&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a></li>

<li><!-- Inicio do botao do Firefox -->
<a href="http://br.mozdev.org/download/" target="_blank"><img src="http://sfx-images.mozilla.org/affiliates/Buttons/Firefox3.5/80x15_orange.png" alt="Firefox - Download" width="80" height="15" style="border-style:none;" title="Mozilla Firefox" /></a>
<!-- Fim do botao do Firefox -->
</li>
</ul>

    </div>
    <!-- End Archives -->



    <!-- Start Links -->
    <div class="links">
      <h2>Links</h2>
      <ul>
        <li><a href="http://www.criciumaesporteclube.com/">Site oficial</a></li>
        <li><a href="http://www.tigrelog.com.br/">TigreLOG.net</a></li>
        <li><a href="http://www.portaldotigre.com.br">Portal do Tigre</a></li>
        <li><a href="http://www.floripatricolor.blogspot.com/">Floripa Tricolor</a></li>
        <li><a href="http://www.cdcriciuma.ning.com">Conselho Deliberativo</a></li>
        <li><a href="http://www.euqueroessacamisa.com">Campanha da camisa</a></li>
        <li><a href="http://www.twitter.com/CriciumaEC">Twitter do Criciúma</a></li>
        <li><a href="http://www.twitter.com/TigreLOG">Twitter TigreLOG</a></li>        
        <li><a href="http://www.twitter.com/OsTigres">Twitter Os Tigres</a></li>        
        <li><a href="http://www.pankastricolor.com/">Panka's Tricolor</a></li>
        <li><a href="http://www.abandadotigre.blogspot.com/">Blog Os Tigres</a></li>
      </ul>
    </div>
    <!-- End Links -->



	<li>
		<?php global $user_ID, $user_identity, $user_level ?>
		<?php if ( $user_ID ) : ?>
		<h2>Login</h2>
		<ul>
			<li>Olá, <strong><?php echo $user_identity ?></strong>!
			<ul><br>
				<li><a href="<?php bloginfo('url') ?>/wp-admin/">Painel de controle</a></li>

				<?php if ( $user_level >= 1 ) : ?>
				<li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">Escreva um post</a></li>
                                <li><?php wp_theme_switcher('dropdown') ?></li>
				<?php endif // $user_level >= 1 ?>
				<li><a href="<?php bloginfo('url') ?>/wp-admin/profile.php">Opções de perfil</a></li>
				<li><a href="<?php bloginfo('url') ?>/wp-login.php?action=logout&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">Sair</a></li>
			</ul>
			</li>
		</ul>

		<?php elseif ( get_option('users_can_register') ) : ?>

		<h2>Login</h2>
<br>
 (<a href="http://www.daletigre.com/wp-login.php" rel="loginbox-toggle">Login rápido - <b>Control</b> + <b>L</b></a>)<br>

		<ul>
			<li>
			<form action="<?php bloginfo('url') ?>/wp-login.php" method="post">
				<p>
				<label for="log"><input type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="22" /> Usuário</label><br />
				<label for="pwd"><input type="password" name="pwd" id="pwd" size="22" /> Senha</label><br />
				<input type="submit" name="submit" value="Enviar" class="button" />
				<label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Lembrar?</label><br />
				</p>
				<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
			</form>
			</li>

			<li><a href="<?php bloginfo('url') ?>/wp-register.php">Registre-se</a></li>
			<li><a href="<?php bloginfo('url') ?>/wp-login.php?action=lostpassword">Esqueci a senha</a></li>
		</ul>

		<?php endif // get_option('users_can_register') ?>

	</li>


    <div class="clr"></div>



   <!-- Start Adsense -->
    <div class="widget_flickrrss">
      <h2>Leia no e-mail</h2>
      <ul>

<li>

<form style="padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=daletigre', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Receba as atualizações do blog no seu e-mail<br>(digite seu endereço abaixo):</p><p><input type="text" style="width:200px" name="email"/></p><input type="hidden" value="daletigre" name="uri"/><input type="hidden" name="loc" value="pt_BR"/><input type="submit" value="Inscrever" /></form>
</li>
      </ul>


      <div class="clr"></div>
    </div>
    <!-- End Adsense -->




    <?php 	/* Widgetized sidebar, if you have the plugin installed. */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>    
    <?php endif; ?>

    <div class="clr"></div>

    <!-- Start Propaganda-->
  <div class="SRR">



    <!-- Banners Parceiros -->
    <div class="parceiros">
       <ul>
<li align="center"><a href="http://www.daletigre.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/divulga-daletigre.gif" alt="DaleTigre - O maior blog sobre o Criciúma Esporte Clube da internet!" /></a><br><center><textarea rows="3" cols="18" onfocus="this.select()" onmouseover="this.focus()" name="textarea">
<a href="http://www.daletigre.com" target="_blank"><img border="0" src="http://www.daletigre.com/daletigre.gif"/></a></textarea></center></li>
<li><script type="text/javascript" src="http://widgets.amung.us/classic.js"></script><script type="text/javascript">WAU_classic('mre0aspv0ved')</script></li>
<li><a href="http://www.euqueroessacamisa.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/selo.jpg" alt="Penalty, eu quero essa camisa!" /></a></li>
<li><a href="http://www.tigrelog.com.br" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tigrelog.gif" alt="TigreLOG.net - Fórum sobre o Criciúma Esporte Clube" /></a></li>
<li><a href="http://abandadotigre.blogspot.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blog-ostigres.gif" alt="Blog oficial OS TIGRES - A BANDA DO TIGRE" /></a></li>
<li><object height="204" width="142" align="center" type="application/x-shockwave-flash" data="http://www.criciumaesporteclube.com/swf/promocoes/ideia-premiada.swf">
<param value="http://www.criciumaesporteclube.com/swf/promocoes/ideia-premiada.swf" name="MOVIE"/>
<param value="transparent" name="wmode"/>
<param value="false" name="menu"/>
<param value="high" name="quality"/>
</object></li>

<li><form method="get" action="http://groups.yahoo.com/subscribe/criciumaec" style="background-color: #F6FBEE; width: 160px">
<input style="vertical-align: top" type="text" name="user" value="Digite seu e-mail" size="20" /><br><br>
<input type="image" alt="Clique aqui para cadastrar-se criciumaec" name="Clique aqui para cadastrar-se no Grupo!" src="http://us.i1.yimg.com/us.yimg.com/i/yg/img/i/br/ui/join.gif" />
</form></li>

<li><a href="http://www.anareczek.blogspot.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/anareczek.jpg" alt="Ana Reczek - Fotógrafa" /></a></li>
<li><a href="http://www.interney.net/blogs/heresialoira/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/heresialoira.jpg" alt="Heresia Loira" /></a></li>
<li><a href="http://www.putzcri.blogspot.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/putzcri.gif" alt="PutzGraça !!! Criciúma no divã" /></a></li>
<li><a href="http://www.tudodecri.blogspot.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tudodecri.jpg" alt="Tudo de Cri" /></a></li>
<li><a href="http://jpalves.blogspot.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/jpalves.jpg" alt="Blog do João Pedro Alves" /></a></li>
<li><a href="http://cabecadecaos.blogspot.com" target="_blank"><br /><img border="0" alt="Cabeça de Caos" src="http://img188.imageshack.us/img188/5060/macacoselocopy.jpg" title="Cabeça de Caos" /></a></li>
<li><a href="http://asaventurasdechicuta.blogspot.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/chicuta.jpg" alt="As Aventuras de Chicuta e Rebelo" /></a></li>
<li><a href="http://cronicapopular.blogspot.com/" target="_blank">Crônica Popular</a></li>
      </ul>
    </div>
    <!-- Banners Parceiros -->


<div class="meta">
<ul>
<script type="text/javascript"><!--
google_ad_client = "pub-4469911752608970";
/* 160x600, criado 20/08/09 */
google_ad_slot = "9692631713";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</ul>
</div>
</div>
    <!-- End Propaganda -->


  </div>
  <!-- End SideBar -->

</div>
