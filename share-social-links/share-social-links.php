<?php
/**
* Plugin Name: Share Social Links
* Description: Adds social icons with links to profiles
* Version: 1.0
* Author: Carolyn Hemmings
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/share-social-links-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/share-social-links-class.php');

// Register Widget
function register_share_social_links(){
	register_widget('Share_Social_Links_Widget');
}

add_action('widgets_init', 'register_share_social_links' );
