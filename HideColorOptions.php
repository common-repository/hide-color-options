<?php
/**
* Plugin Name: Hide color options
* Plugin URI: https://wordtune.me
* Description: Install an avtivate this Plugin to hide color options on unser profile page.
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

add_action( 'admin_init', 'hide_color_in_userprofile', 1 );
function hide_color_in_userprofile(){
    global $_wp_admin_css_colors;
    $fresh_color_data = $_wp_admin_css_colors['fresh'];
    $_wp_admin_css_colors = array( 'fresh' => $fresh_color_data );
}
?>
