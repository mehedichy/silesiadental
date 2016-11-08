<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="body-container">
        <header>
            <div class="banner">
                <div class="container">
                    <a href="/"><img class="img-responsive logo-img no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/logo.png"> </a>
                    <ul class="social-icon">
                        <li><a class="img-responsive" href=""><img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/fb.png"></a></li>
                        <li><a class="img-responsive" href=""><img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/twitter.png"></a></li>
                        <li><a class="img-responsive" href=""><img class="no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/g+.png"></a></li>
                    </ul>
                </div>
            </div>

            <div class="menu-container">
                <div class="menu">
                  <?php wp_nav_menu(); ?>
                </div>
            </div>
            
        </header>
