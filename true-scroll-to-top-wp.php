<?php
/**
 * Plugin Name:         True Scroll To Top WP
 * Plugin URI:          https://wordpress.org/plugins/true-scroll-to-top-wp/
 * Description:         True Simple Scroll to top plugin will help you to enable Back to top to your Wordpress Website.
 * Version:             1.0.0
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              Rezaun Kabir
 * Author URI:          https://rezaun.netlify.app/
 * License:             GPLv2 or later
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:          https://github.com/rezaun/
 * Text-Domain:         tstt
 */

 //Including CSS
 function tstt_enqueue_style(){
    wp_enqueue_style('tstt-style',plugins_url('css/tstt-style.css', __FILE__));
 }
 add_action('wp_enqueue_scripts','tstt_enqueue_style');

 //including Javascript
 function tstt_enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('tstt-plugin-script', plugins_url('js/tstt.plugin.js', __FILE__), array(), '1.0.0', 'true');
 
 }
 add_action('wp_enqueue_scripts', 'tstt_enqueue_scripts');

 //jQuery Plugin settings Activation
 function tstt_scroll_script() {?>
 <script>
 jQuery(document).ready(function(){
     jQuery.scrollUp();
 })
</script>
 <?php
 }
 add_action("wp_footer", "tstt_scroll_script");
?>