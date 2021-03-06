<?php

/*
 *	  Components and scripts
 */
class script_enqueue {

	function __construct() {

		add_action( 'wp_enqueue_scripts', array( &$this, 'theme_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( &$this, 'theme_styles' ) );

		add_action( 'admin_init', array( &$this, 'editor_style' ) );

	}

	function theme_scripts() {

		wp_enqueue_script(
			'bootstrap',
			get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.min.js',
			array(
				'jquery'
			)
		);

		// wp_enqueue_script(
		// 	'lightense-images',
		// 	get_stylesheet_directory_uri() . '/node_modules/lightense-images/lightense.min.js'
		// );

		// wp_enqueue_script(
		// 	'lightbox',
		// 	get_stylesheet_directory_uri() . '/assets/vendor/lightbox2/dist/js/lightbox-plus-jquery.js',
		// 	array(
		// 		'jquery'
		// 	)
		// );

		wp_enqueue_script(
			'bootstrap',
			'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
			array(
				'jquery'
			)
		);

		if (WP_ENV === 'development') {
			wp_enqueue_script(
				'application',
				get_stylesheet_directory_uri() . '/assets/src/js/app.js',
				array(
					'jquery',
					'bootstrap'
				)
			);

		} else {
			wp_enqueue_script(
				'application',
				get_stylesheet_directory_uri() . '/assets/dist/js/app.min.js',
				array(
					'jquery',
					'bootstrap'
				)
			);
		}

	}

	function theme_styles() {

		wp_enqueue_style(
			'bootstrap-css',
			get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/dist/css/bootstrap.min.css'
		);

		// wp_enqueue_style(
		// 	'lightbox-css',
		// 	get_stylesheet_directory_uri() . '/assets/vendor/lightbox2/dist/css/lightbox.min.css'
		// );

		wp_enqueue_style(
			'google-fonts',
			'https://fonts.googleapis.com/css?family=Source+Sans+Pro'
		);

		// wp_enqueue_style(
		// 	'ionicons',
		// 	'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'
		// );

		wp_enqueue_style(
			'font-icon-fa',
			get_stylesheet_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css'
		);
		
		// wp_enqueue_style(
		// 	'Material Icon',
		// 	'https://fonts.googleapis.com/icon?family=Material+Icons'
		// );
		

		// wp_enqueue_style( 'theme', get_stylesheet_uri() );

		wp_enqueue_style(
			'main-css',
			get_stylesheet_directory_uri() . '/style.css'
		);

	}

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	function editor_style() {
		add_editor_style( array(
			'editor-style.css',
			get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/dist/css/bootstrap.min.css'
		) );
	}

}

?>
