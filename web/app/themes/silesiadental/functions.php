<?php

require 'functions/script-enqueue.php';
require 'functions/wp-clean.php';
require 'functions/wp-menus.php';
require 'functions/wp-widgets.php';
require 'functions/wp-navigation-walker.php';
require 'functions/wp-bootstrap-pagination.php';
require 'functions/wp-better-archives.php';
require 'functions/wp-post-types.php';
require 'functions/wp-theme.php';
require 'functions/wp-tinymce.php';

class theme {
	function  __construct() {
		$scripts = new script_enqueue();
		$wpClean = new wp_clean();
		$wpMenus = new wp_menus();
		$wpWidgets = new wp_widgets();
		$wpPostTypes = new wp_postTypes();
		$wpThemeMods = new wp_themeMods();
		$wpTinyMce = new wp_tinymce();
	}
}


// Yolo
$theme = new theme();

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}
// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's

?>