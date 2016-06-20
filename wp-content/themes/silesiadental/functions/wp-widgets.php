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

	}

}


?>