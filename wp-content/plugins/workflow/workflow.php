<?php
/*
Plugin Name: Workflow
Description: A simple plugin to set different defaults for production, staging and local servers.
Author: Saddam Azad
Version: 0.1
Author URI: http://saddamazad.com
Plugin URI: https://github.com/azadcreative/workflow
License: GPLv3
 */

$required_php_version = '5.3.0';
if (version_compare(phpversion(), $required_php_version, '>')) {
	require_once __DIR__ . '/libraries/plugin.php';
}