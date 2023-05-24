<div class="clr"></div>
</div>
<div class="FBG">
  <div class="Footer">
<!-- footer credits -->
<div><p>
<?php wp_footer(); ?>
<big><strong>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></strong></big><br>
<small>Tema adaptado por <strong>Rodrigo Sakae</strong></a></small>
</p><br>
<p>
<?php
  //<!--/* OpenX Local Mode Tag v2.6.2 */-->

  // The MAX_PATH below should point to the base of your OpenX installation
  define('MAX_PATH', '/home/tigrelog/public_html/openx');
  if (@include_once(MAX_PATH . '/www/delivery/alocal.php')) {
    if (!isset($phpAds_context)) {
      $phpAds_context = array();
    }
    // function view_local($what, $zoneid=0, $campaignid=0, $bannerid=0, $target='', $source='', $withtext='', $context='', $charset='')
    $phpAds_raw = view_local('', 0, 11, 0, '', '', '0', $phpAds_context, '');
  }
  echo $phpAds_raw['html'];
?>
</p></div>

  </div>
  <div class="clr"></div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10370431-3");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
