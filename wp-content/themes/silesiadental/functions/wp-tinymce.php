<?php

class wp_tinymce {

	/*
	 * Reference: http://wordpress.stackexchange.com/questions/128931/tinymce-adding-css-to-format-dropdown
	 * 			  https://www.tinymce.com/docs/configure/content-formatting/#style_formats
	 */ 
	
	function __construct() {
		
		add_filter('mce_buttons_2', array( &$this, 'custom_buttons_2' ) );

		add_filter( 'tiny_mce_before_init', array( &$this, 'custom_mce_before_init' ) );
		
	}

	function custom_buttons_2( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}

	function custom_mce_before_init( $settings ) {

		$style_formats = 
		'[
		    { "title": "Inline", "items": [
		        { "title": "Strikethrough", "icon": "strikethrough", "format": "strikethrough" },
		        { "title": "Code", "icon": "code", "format": "code" }
		    ] },

		    { "title": "Bootstrap Alerts", "items": [
				{ "title": "alert-success", "classes": "alert alert-success", "block": "div" },
				{ "title": "alert-info", "classes": "alert alert-info", "block": "div" },
				{ "title": "alert-warning", "classes": "alert alert-warning", "block": "div" },
				{ "title": "alert-danger", "classes": "alert alert-danger", "block": "div" }
		    ] },

		    { "title": "Bootstrap Typography", "items": [
				{ "title": "Lead", "classes": "lead", "block": "p" },
				{ "title": "Blockquote reverse", "icon": "blockquote", "classes": "blockquote blockquote-reverse", "block": "blockquote" }
		    ] },

		    { "title": "Bootstrap Code", "items": [
			    { "title": "mark", "inline": "mark" },
				{ "title": "kbd", "inline": "kbd" },
				{ "title": "var", "inline": "var" },
				{ "title": "samp", "inline": "samp" }
		    ] },

		    { "title": "Bootstrap Callouts", "items": [
				{ "title": "bd-success", "classes": "bd-callout bd-callout-success", "block": "div" },
				{ "title": "bd-info", "classes": "bd-callout bd-callout-info", "block": "div" },
				{ "title": "bd-warning", "classes": "bd-callout bd-callout-warning", "block": "div" },
				{ "title": "bd-danger", "classes": "bd-callout bd-callout-danger", "block": "div" }
		    ] },

		]'; 

	    $settings['style_formats'] = $style_formats;
	    return $settings;
	}

}

?>