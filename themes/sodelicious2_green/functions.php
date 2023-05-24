<?php
function getWords($text, $limit)
{
$array = explode(" ", $text, $limit+1);

if (count($array) > $limit)
{
unset($array[$limit]);
}
return implode(" ", $array);
}
function get_sidebar2() {
	do_action( 'get_sidebar2' );
	if ( file_exists( TEMPLATEPATH . '/sidebar2.php') )
		load_template( TEMPLATEPATH . '/sidebar2.php');
}
function get_sidebar3() {
	do_action( 'get_sidebar3' );
	if ( file_exists( TEMPLATEPATH . '/sidebar3.php') )
		load_template( TEMPLATEPATH . '/sidebar3.php');
}
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'sidebar1'));
	 register_sidebar(array('name'=>'sidebar2'));
	 register_sidebar(array('name'=>'sidebar3',
        'before_widget' => '<!--sidebox2 start --><li id="%1$s" class="dbx-box2 %2$s">',
        'after_widget' => '</div></li><!--sidebox2 end -->',
        'before_title' => '<h3 class="dbx2-handle">',
        'after_title' => '</h3><div class="dbx2-content">'));

?>