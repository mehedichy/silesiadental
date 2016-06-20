<?php

/**
 * Jetpack setup function.
 *
 */

class wp_jetpack {

	function __construct() {

		add_action( 'after_setup_theme', array(&$this, 'jetpack_setup') );

	}

	function jetpack_setup() {

		// Jetpack Infinite Scroll
		// https://jetpack.com/support/infinite-scroll/
		//
		add_theme_support( 'infinite-scroll', array(
		    'type'           => 'scroll',
		    'footer_widgets' => false,
			'container'      => 'content',
			'wrapper'        => true,
			'render'         => false,
			'posts_per_page' => false,
		) );


		// Add theme support for Responsive Videos.
		// https://jetpack.com/support/responsive-videos/
		//
		add_theme_support( 'jetpack-responsive-videos' );

	}

	/**
	 * Custom render function for Infinite Scroll.
	 */
	function infinite_scroll_render() {
		while ( have_posts() ) {
			the_post();
			if ( is_search() ) :
			    get_template_part( 'template-parts/content', 'search' );
			else :
			    get_template_part( 'template-parts/content', get_post_format() );
			endif;
		}
	}

}

?>