<?php
/**
* @package #Olubolu2021
*/
define( "APP_PATH", dirname( __FILE__ ) );
define( "APP_FOLDER", dirname( $_SERVER['SCRIPT_NAME'] ) );

/*development environment*/
define( "APP_URI", remove_unwanted_slashes("http://" . $_SERVER['SERVER_NAME'] . APP_FOLDER ) );

/*production environment*/
/*define( "APP_URI", remove_unwanted_slashes("https://" . $_SERVER['SERVER_NAME'] . APP_FOLDER ) );*/

function remove_unwanted_slashes( $dirty ){
	return preg_replace( '~(?<!:)//~', '/', $dirty );
}

/* require the file autoloader */
if( file_exists( APP_PATH ."/vendor/autoload.php") ){
	require_once APP_PATH ."/vendor/autoload.php";
}

