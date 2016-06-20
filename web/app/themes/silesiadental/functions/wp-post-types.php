<?php

/*
 *    Custom Post Types
 */

class wp_postTypes {

  function __construct() {
    // add_action( 'init', array(&$this, 'posttype_promos') );
  }

  function posttype_work() {
    // register_post_type( 'Promos',
    //   array(
    //     'labels' => array(
    //       'name' => __( 'Work' ),
    //       'singular_name' => __( 'Project' )
    //     ),
    //     'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'rewrite' => array('slug' => 'work'),
    //   )
    // );
  }

}


?>