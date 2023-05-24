<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="keyword" />
<div id="buttonsearch"><input name="submit" type="image" class="search" title="Search" src="<?php bloginfo('template_url'); ?>/images/transparent.gif" alt="Search" />
</div>
</div>
</form>
