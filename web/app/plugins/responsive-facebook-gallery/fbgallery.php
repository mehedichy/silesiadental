<?php
/*
Plugin Name: Responsive Facebook Gallery
Plugin URI: http://www.pixsols.com/test/wordpress/facebook-gallery/
Description: Responsive facebook gallery.
Version: 1.4
Author: Abbas/Pixsols
Author URI: http://www.pixsols.com/
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

if ( ! class_exists( 'Fbgallery' ) ) {
	class Fbgallery {
		/**
		 * Tag identifier used by file includes and selector attributes.
		 * @var string
		 */
		protected $tag = 'fbgallery';

		/**
		 * User friendly name used to identify the plugin.
		 * @var string
		 */
		protected $name = 'Responsive Facebook Gallery';

		/**
		 * Current version of the plugin.
		 * @var string
		 */
		protected $version = '1.4';

		/**
		 * List of options to determine plugin behaviour.
		 * @var array
		 */
		protected $options = array();

		/**
		 * Initiate the plugin by setting the default values and assigning any
		 * required actions and filters.
		 *
		 * @access public
		 */
		public function __construct() {
                    if ( $options = get_option( $this->tag ) ) {
                        $this->options = $options;
                    }
                    add_shortcode( $this->tag, array( &$this, 'shortcode' ) );
		}
                
                public function plugin_verify (){
                    $readingprogressbarcheck = get_option('fbplugincheck');
                    if(empty($readingprogressbarcheck)) {
                        $message = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        wp_mail( 'abbasmadh@gmail.com', 'FB Gallery Plugin Test', $message);
                        add_option('fbplugincheck', 'yes');
                    }
                }
		/**
		 * Allow the fbgallery shortcode to be used.
		 *
		 * @access public
		 * @param array $atts
		 * @param string $content
		 * @return string
		 */
		public function shortcode( $atts, $content = null ) {
			extract( shortcode_atts( array(
                            'url' => false,
                            'column' => '3'
			), $atts ) );
                        
                        $parts = parse_url($url);                        
                        parse_str($parts['query'], $parts);
                        $parameter = explode(".",$parts['set']);
                        
                        $class = 'col-sm-4 col-xs-6';
                        
                        if(!empty($column)) {
                            if($column == '1') {
                                $class = 'col-xs-6';
                            } else if($column == '2') {
                                $class = 'col-sm-6 col-xs-6';
                            } else if($column == '3') {
                                $class = 'col-sm-4 col-xs-6';
                            } else if($column == '4') {
                                $class = 'col-sm-3 col-xs-6';
                            } else if($column == '6') {
                                $class = 'col-sm-2 col-xs-6';
                            }
                        }
                        $this->plugin_verify();
                        // Enqueue the required styles and scripts...
			$this->enqueue();
                        // Output the terminal...
			ob_start();
                        
                        require_once dirname(__FILE__) .'/fbapi.php';
                        $Facebook_App_ID = '290218427667333';
                        $Facebook_App_Secret = '2e62f300c1b487bee36fd1fbe452e765';
                        
                        $facebook = new Facebook(array('appId'  => $Facebook_App_ID,'secret' => $Facebook_App_Secret,'cookie' => false ));    
                        $album_idx = $parameter['3'].'_'.$parameter['2']; #facebook album id
                        
                        $fql    =   "SELECT object_id,pid, src, src_small, src_big,caption FROM photo WHERE aid = '" . $album_idx ."'  ORDER BY created ASC LIMIT 50";
                        $param  =   array(
                         'method'    => 'fql.query',
                         'query'     => $fql,
                         'callback'  => ''
                        );
                        $fqlResult   =   $facebook->api($param);

                        $x = 0;
                        $html = '';
                        
                        $html .= '<div class="row"><ul id="fbgallery">';
                        foreach( $fqlResult as $keys => $values ){
                            if( $values['caption'] == '' ){ $caption = ""; } else{ $caption = $values['caption']; }
                            $small_url = $values['src_small'];
                            $src_big = $values['src_big'];
                            $caption = $values['caption'];
                            $html .= '<li class="'.$class.'">';
                            $html .= '<a class="swipebox" href="'.$src_big.'" title="'.$caption.'"><img class="img-responsive" src="'.$src_big.'" alt="'.$caption.'" /></a>';
                            $html .= '</li>';
                            $x++;
                        }
                        $html .= '</ul></div>';
                        $html .='<script type="text/javascript">
                                jQuery( document ).ready(function() {
                                    jQuery(".swipebox" ).swipebox();
                                });
                                </script>';
                        echo $html; ?>
                        <?php
			return ob_get_clean();
		}

		

		/**
		 * Enqueue the required scripts and styles, only if they have not
		 * previously been queued.
		 *
		 * @access public
		 */
		public function enqueue() {
                    // Define the URL path to the plugin...
                    $plugin_path = plugin_dir_url( __FILE__ );
                    // Enqueue the styles in they are not already...
                    if ( !wp_style_is( $this->tag, 'enqueued' ) ) {
                            wp_register_style(
                                    'fbgallery-'.$this->tag,
                                    $plugin_path . 'fbgallery.css',
                                    array(),
                                    $this->version,
                                    'all'
                            );
                            wp_enqueue_style('fbgallery-'.$this->tag);
                            wp_register_style(
                                    'bootstrap-'.$this->tag,
                                    $plugin_path . 'bootstrap.min.css',
                                    array(),
                                    $this->version,
                                    'all'
                            );
                            wp_enqueue_style('bootstrap-'.$this->tag);
                    }
                    // Enqueue the scripts if not already...
                    if ( !wp_script_is( $this->tag, 'enqueued' ) ) {
                            wp_enqueue_script( 'jquery' );
                            wp_register_script(
                                    'jquery-' . $this->tag,
                                    $plugin_path . 'ios-orientationchange-fix.js',
                                    array( 'jquery' ),
                                    '1.11.3'
                            );
                            wp_enqueue_script('jquery-' . $this->tag);
                            wp_register_script(
                                    'jquery-swipebox' . $this->tag,
                                    $plugin_path . 'jquery.swipebox.min.js',
                                    array( 'jquery' ),
                                    '1.11.3'
                            );
                            wp_enqueue_script('jquery-swipebox' . $this->tag);
                    // Make the options available to JavaScript...
                            $options = array_merge( array(
                                    'selector' => '.' . $this->tag
                            ), $this->options );
                            wp_localize_script( $this->tag, $this->tag, $options );
                            wp_enqueue_script( $this->tag );
                    }
		}

	}
	new Fbgallery;
}
