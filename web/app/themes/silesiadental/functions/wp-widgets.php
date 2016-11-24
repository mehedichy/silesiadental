<?php

/*
 *	  Custom Menus
 */

class wp_widgets {

	function __construct() {

		add_action( 'widgets_init', array( $this, 'register_widgets' ) );

	}

	function register_widgets() {

		register_sidebar(array(
			'name'          => 'Email Subscribe',
			'id'            => 'email',
			'before_widget' => '<div class="sidebar-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		));

		register_sidebar(array(
			'name'          => 'Appointment Form',
			'id'            => 'appointment',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));

		register_sidebar(array(
			'name'          => 'Google Maps',
			'id'            => 'maps',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));

		register_sidebar(array(
			'name'          => 'Contact Us',
			'id'            => 'contact',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));

	}

}


?>