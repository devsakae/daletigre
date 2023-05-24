<?php
//widgets
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Bottom-Left',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sub">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Bottom-Middle',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sub">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Bottom-Right',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sub">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sub">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Page-Sidebar',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sub">',
        'after_title' => '</h3>',
    ));


//get thumbnail
function postimage($size=medium) {
	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 1,
		'order' => 'ASC',
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			echo $attachmentimage.apply_filters('the_title', $parent->post_title);
		}
	} 
}

//get thumbnails
function postimages($size=medium) {
	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'order' => 'ASC',
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			echo $attachmentimage.apply_filters('the_title', $parent->post_title);
		}
	} 
}

//check any attachment 
function checkimage($size=medium) {
	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmentimage=wp_get_attachment_image( $image->ID, $size );
			return $attachmentimage;
		}
	} 
}


//Theme Options
$themename = "Theme";
$shortname = "T";
$options = array (
	array(	"name" => "Basic Theme Options",
						"type" => "title"),
				
	array(	"type" => "open"),

	array(    "name" => "Blog Category ID",
        "desc" => "Enter the category ID of your Blog.",
        "id" => $shortname."_blog_ID",
        "std" => "1",
        "type" => "text"),

	array(  "name" => "Twitter ID",
        "desc" => "Enter your Twitter username.",
        "id" => $shortname."_twitter_ID",
        "std" => "",
        "type" => "text"),

	array(    "type" => "close")

);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function headimage_admin(){
	
}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<p><?php _e('For more information about this theme, <a href="http://graphpaperpress.com">visit GraphPaperPress.com</a>. Please visit the <a href="http://graphpaperpress.com/support">GraphPaperPress Forums</a> if you have any questions about this theme.', 'gpp'); ?></p>

<form method="post">

<div id="poststuff" class="dlm">

<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
		
        
		<?php break;
		
		case "close":
		?>
        </table></div></div>
        
        
		<?php break;
		
		case "title":
		?>
		<div class="postbox close">
		<h3><?php echo $value['name']; ?></h3>
			<div class="inside">
        
		<table width="100%" border="0" style="background-color:#ccc; padding:5px 10px;"><tr>
        </tr>
                
        
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes( get_settings( $value['id'] ) ); } else { echo $value['std']; } ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes( get_settings(  $value['id'] ) ); } else { echo $value['std']; } ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
        <?php 		break;
	
 
} 
}
?>

</div>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php }  add_action('admin_menu', 'mytheme_add_admin'); ?>