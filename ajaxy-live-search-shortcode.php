<?php
/*
	Plugin Name: Ajaxy Shortcode
	Plugin URI: https://github.com/ubc/ajaxy-shortcode 
	Description: A shortcode to use the Ajaxy Live Search plugin outside of widgets. The Ajaxy Live Search plugin must be enabled to use this. 
				 To use this plugin, paste the following shortcode anywhere in your WordPress site. [ajaxy_search]
	Version: 1.0
	Author: Julien Law
	Author URI: https://github.com/ubc/ajaxy-shortcode
	License: GPLv2 or later
*/

add_shortcode( 'ajaxy_search', 'ajaxy_shortcode' );

function ajaxy_shortcode() {
	ob_start();
	if( function_exists( 'ajaxy_search_form' ) && class_exists( 'AjaxyLiveSearch' ) ) {
		ajaxy_search_form();
	}
	else {
		get_search_form();		
	}
	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
