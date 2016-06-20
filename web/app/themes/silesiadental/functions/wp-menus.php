<?php

/*
 *	  Custom Menus
 */

class wp_menus {

	function __construct() {

		add_action( 'init', array( &$this, 'register_menus' ) );

		add_filter('nav_menu_css_class' , array( &$this, 'special_nav_class' ), 10 , 2);

	}

	function register_menus() {
	  register_nav_menus(
	  	array(
	  		'primary-menu' => __( 'Blog Menu' )
	  		// 'secondary-menu' => __( 'Secondary Menu' ),
	  		// 'social-menu' => __( 'Social Menu' )
	  	)
	  );
	}
	
	function special_nav_class($classes, $item){
	     if( in_array('current-menu-item', $classes) ){
	             $classes[] = 'active ';
	     }
	     return $classes;
	}

}
?>