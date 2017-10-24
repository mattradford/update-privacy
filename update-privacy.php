<?php
/*
	Plugin Name: Update Privacy
	Plugin URI: https://wordpress.org/plugins/update-privacy
	Description: Prevents WordPress sending anything but essential data during the update check.
	Author: Matt Radford
	Author URI: https://mattrad.uk
	Version: 1.0.0
	License: GPLv2 or later
	License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function mattrad_update_privacy( $query ) 
	unset($query['php']);
	unset($query['mysql']);
	unset($query['local_package']);
	unset($query['blogs']);
	unset($query['users']);
	unset($query['multisite_enabled']);
	unset($query['initial_db_version']);
	return $query;
}
add_action( 'core_version_check_query_args', 'mattrad_update_privacy' );