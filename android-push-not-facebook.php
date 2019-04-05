<?php
/**
 * @package spigot_Sample_Wordpress_Plugin
 * @version 0.1
 */
/*
Plugin Name: Android Push notification not facebook Plugin
Description: This plugin checks for android user and makes sure it did not come from facebook according to utm_medium
Version: 0.1
Text Domain: spigot-sample-plugin
*/

function javascriptInjection() {
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
		if(stripos($ua,'android') !== false) {
			// if ($_GET['utm_medium'] == 'google') {
			// 	echo '<script type="text/javascript" src="'.plugins_url('js/spigot-sample-plugin.js', __FILE__).'"></script>';
			// }
			$a = strtolower($_GET['utm_medium']);
			if (strpos($a, 'facebook') !== false) {
				//This is someone that has come from facebook
			}
			
			else{
				//This is someone that has come from somehwere or not facebook
				//we would want to add push notificiton here
				echo "Could not find word";
			}
		}
}

// Add hook for front-end <head></head>
add_action( 'wp_head', 'javascriptInjection' );
