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

?>