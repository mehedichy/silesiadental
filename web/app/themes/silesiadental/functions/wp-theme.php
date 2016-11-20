<?php

/*
 *	  Theme Customisations
 */

class wp_themeMods {

	function __construct() {

		add_action( 'after_setup_theme', array( &$this, 'theme_support' ) );

		add_filter( 'post_class', array(&$this, 'custom_post_class') );

		add_filter( 'the_content_more_link', array(&$this, 'custom_read_more_link') );		

		add_filter( 'excerpt_more', array(&$this, 'custom_excerpt_more') );

		add_filter( 'the_content', array(&$this, 'remove_empty_p'), 20, 1);

		add_filter( 'stylesheet_uri', array(&$this, 'custom_stylesheet_uri'), 10, 2);

		add_action( 'after_setup_theme', array(&$this, 'html5_search_form') );

		add_filter( 'get_search_form', array(&$this, 'custom_search_form') );

		add_filter('pre_get_posts', array(&$this, 'search_results_posts_only') );

		add_filter( 'body_class', array(&$this, 'theme_body_classes') );
		
	}

  	/* Post thumbnail support */
	function theme_support() {
		
		// Post Thumbnails
		// 
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

		add_theme_support( 'title-tag' );
		
		// 
		add_post_type_support( 'page', 'excerpt' );
	}

	/**
	 * overwrite default theme stylesheet uri
	 */
	function custom_stylesheet_uri() {
		if (WP_ENV === 'development') {
			return get_stylesheet_directory_uri() . '/style.css';
		} else {
			return get_stylesheet_directory_uri() . '/style.min.css';
		}
	}

	/*
	 * Alternate class on each post
	 * http://wordpress.stackexchange.com/questions/174/alternate-post-class-on-each-post
	 *
	 */
	function custom_post_class( $classes ) {

		global $wp_query;

		if ( ! is_single() ) {

		    // Set "odd" or "even" class if is not single
		    $classes[] = $wp_query->current_post % 2 == 0 ? 'odd' : 'even' ;
		}

		return $classes;
	}

	/*
	 * Modify the "Read More" link text
	 * https://codex.wordpress.org/Customizing_the_Read_More
	 *
	 */
	function custom_read_more_link() {
		return '';
	}

	// Replaces the excerpt "more" text by a link
	function custom_excerpt_more($more) {
	       global $post;
		return '';
	}
	

	/**
	 * Remove empty paragraphs created by wpautop()
	 * @author Ryan Hamilton
	 * @link https://gist.github.com/Fantikerz/5557617
	 */
	function remove_empty_p( $content ) {
	    $content = force_balance_tags( $content );
	    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
	    return $content;
	}

	/**
	 * Add HTML5 search form support
	 */
	function html5_search_form() {
	    add_theme_support( 'html5', array( 'search-form' ) );
	}

	/**
	 * Generate custom search form
	 *
	 * @param string $form Form HTML.
	 * @return string Modified form HTML.
	 */
	function custom_search_form( $form ) {
	    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	    <div>
	    <!--label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label-->
	    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
	    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	    </div>
	    </form>';
	 
	    return $form;
	}

	/**
	 * Exclude pages from search results
	 */
	function search_results_posts_only($query) {
		if ($query->is_search) {
		$query->set('post_type', 'post');
	}
		return $query;
	}

	/**
	 * Body classes
	 *
	 */
	function theme_body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}

		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
	
}

?>