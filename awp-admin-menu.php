<?php
	
	/*
	Plugin Name: Admin Menu
	Description: AWP Admin Menu
	Plugin URI: http://#
	Author: Andrii Hnatyshyn
	Author URI: http://#
	Version: 1.0
	License: GPL2
	Text Domain: Text Domain
	Domain Path: Domain Path
	*/
 add_action('admin_menu' , 'awp_admin_menu');

function awp_admin_menu()
{
	add_media_page('Theme Options',
		'Theme Options','manage_options',
		__FILE__,
		'awp_option_page');
}

function awp_option_page ()
{
		echo("Hello world");
}
