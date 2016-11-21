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
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container body-container">
		<header class="page-header">
			<div class="banner">
				<div class="container">
					<div class="branding">
						<a href="/">
							<img class="img-responsive logo-img no-lightense" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/silesia-dental-clinic.png">
						</a>
					</div>

					<ul class="social-icon">
						<li class="facebook">
							<a href="https://facebook.com/">
								<i class="fa fa-facebook"></i>
							</a>
						</li>

						<li class="twitter">
							<a href="https://twitter.com/">
								<i class="fa fa-twitter"></i>
							</a>
						</li>

						<li class="gplus">
							<a href="https://plus.google.com/">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="menu-container">
				<button class="navbar-toggler hidden-sm-up c-hamburger" type="button" data-toggle="collapse" data-target=".menu-scaffold">
					<i class="fa fa-bars"></i>
					<span>Navigation</span>
				</button>

				<div class="menu-scaffold nav-collapse collapse clearfix">
				  <?php
				    wp_nav_menu( array(
				    	'menu'              => 'primary-menu',
					    'theme_location'    => 'primary-menu',
					    'container'     	=> false,
					    'container_id'      => '',
					    'container_class'   => '',
					    'menu_class'        => 'menu main-menu menu-depth-0 menu-even',
					    'echo'          	=> true,
					    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					    'depth'        		=> 10,
					    'walker'        	=> new Navigation_Walker
					));
				?>
				</div>
			</div>
		</header>
