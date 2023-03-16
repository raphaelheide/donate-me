<?php
/*
Plugin Name: DONATE ME
Plugin URI: 
Description: Easy. Simple setup to add PayPal Donation in multiple currencies shortcode and supports recurring donation.
Version: 1.1
Author: Raphael Heide
License: GPL2
Text Domain: donateme 
Copyright 2023 Raphael Heide (email : contact@raphaelheide.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function donateme_funcao () {
include 'includes/index.php';
}

require_once 'vendor/autoload.php';

add_shortcode('donateme', 'donateme_funcao');

function donateme_action( $links, $file ) {
	if ( $file == plugin_basename( __FILE__ ) ) {
	$settings_link = '<a href="options-general.php?page=donateme">' . (__( "Settings", "donateme" )) . '</a>';
	array_unshift( $links, $settings_link );
	}
	return $links;
}
add_filter( 'plugin_action_links', 'donateme_action', 10, 2 );


?>