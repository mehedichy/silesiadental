<?php

/*
 *	  Remove the default scripts and stylesheets
 */
class wp_clean {

	function __construct() {

		add_action( 'wp_print_scripts', array( &$this, 'de_script' ), 100 );

		// First, make sure Jetpack doesn't concatenate all its CSS
		// add_filter( 'jetpack_implode_frontend_css', '__return_false' );

		// add_action('wp_print_styles', array( &$this, 'remove_all_jetpack_css' ) );

		// add_action('wp_before_admin_bar_render', array( &$this, 'remove_wpseo_menu' ), 0);
		
 		// Remove Wordpress Admin Bar
		add_filter('show_admin_bar', '__return_false');
	}

	function de_script() {
	    // wp_dequeue_script( 'jquery' );
	    // wp_deregister_script( 'jquery' );
	    wp_dequeue_script( 'bp-legacy-js' );
	    wp_deregister_script( 'bp-legacy-js' );
	}

	// Then, remove each CSS file, one at a time
	function remove_all_jetpack_css() {
	  wp_deregister_style( 'open-sans' );
	  wp_register_style( 'open-sans', false );
	  // wp_deregister_style( 'dashicons' ); 
	  wp_deregister_style( 'AtD_style' ); // After the Deadline
	  wp_deregister_style( 'jetpack_likes' ); // Likes
	  wp_deregister_style( 'jetpack_related-posts' ); //Related Posts
	  wp_deregister_style( 'jetpack-carousel' ); // Carousel
	  wp_deregister_style( 'grunion.css' ); // Grunion contact form
	  wp_deregister_style( 'the-neverending-homepage' ); // Infinite Scroll
	  wp_deregister_style( 'infinity-twentyten' ); // Infinite Scroll - Twentyten Theme
	  wp_deregister_style( 'infinity-twentyeleven' ); // Infinite Scroll - Twentyeleven Theme
	  wp_deregister_style( 'infinity-twentytwelve' ); // Infinite Scroll - Twentytwelve Theme
	  wp_deregister_style( 'noticons' ); // Notes
	  wp_deregister_style( 'post-by-email' ); // Post by Email
	  wp_deregister_style( 'publicize' ); // Publicize
	  wp_deregister_style( 'sharedaddy' ); // Sharedaddy
	  wp_deregister_style( 'sharing' ); // Sharedaddy Sharing
	  wp_deregister_style( 'stats_reports_css' ); // Stats
	  wp_deregister_style( 'jetpack-widgets' ); // Widgets
	  wp_deregister_style( 'jetpack-slideshow' ); // Slideshows
	  wp_deregister_style( 'presentations' ); // Presentation shortcode
	  wp_deregister_style( 'jetpack-subscriptions' ); // Subscriptions
	  wp_deregister_style( 'tiled-gallery' ); // Tiled Galleries
	  wp_deregister_style( 'widget-conditions' ); // Widget Visibility
	  wp_deregister_style( 'jetpack_display_posts_widget' ); // Display Posts Widget
	  wp_deregister_style( 'gravatar-profile-widget' ); // Gravatar Widget
	  wp_deregister_style( 'widget-grid-and-list' ); // Top Posts widget
	  wp_deregister_style( 'jetpack-widgets' ); // Widgets
	}
	

	// remove WPSEO plugin menu from admin bar
	// Inspired by http://wordpress.org/support/topic/filter-to-remove-wordpress-logopages-from-admin-bar
	function remove_wpseo_menu() {
	  global $wp_admin_bar;
	  $wp_admin_bar->remove_menu('wpseo-menu');
	}

}

?>