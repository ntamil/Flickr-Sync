<?php

/*
Plugin Name: Flickr Sync
Description: Custom plugin to sync the images from Flickr using API
Author: Tamil
Version: 1.0
*/

add_action('admin_menu', 'flickr_sync_menu');

function flickr_sync_menu(){
	add_menu_page('My Page Title', 'Flickr Sync', 'manage_options', 'flickr_menu', 'flickr_sync' );
    //add_submenu_page('flickr_menu', 'Submenu Page Title', 'Sync', 'manage_options', 'flickr_sub_menu','flickr_sync');
}

define( 'PATH', plugin_dir_path( __FILE__ ) );

function flickr_sync() {
	require_once(PATH . 'flickr_sync.php');
}

?>

