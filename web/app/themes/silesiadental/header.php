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
                    <a href="/"><img class="img-responsive logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/logo.png"> </a>
                    <ul class="social-icon">
                        <li><a class="img-responsive" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/fb.png"></a></li>
                        <li><a class="img-responsive" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/twitter.png"></a></li>
                        <li><a class="img-responsive" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/g+.png"></a></li>
                    </ul>
                </div>
            </div>
            <!-- Navbar -->
            <nav class="navbar bg-faded" role="navigation" style="padding: 0px;">
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsing-navbar">
				    &#9776;
				</button>
				<div class="collapse navbar-toggleable-sm" id="collapsing-navbar">
					<?php wp_nav_menu( array( 
						'theme_location' => 'primary-menu', 
						'menu_class' => 'navbar',
						'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
						'container' => ''
						) 
					);
					?>
				</div>
            
            <!-- <nav class="navbar bg-faded" role="navigation" style="padding: 0px;">
            				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsing-navbar">
            				    &#9776;
            				</button>
            				<div class="collapse navbar-toggleable-sm" id="collapsing-navbar">
            					<ul class="nav navbar-nav">
            					  <li class="nav-item">
            					    <a href="#" class="nav-link">Home</a>
            					  </li>
            					  <li class="nav-item dropdown menu-large">
            					    <a class="nav-link" data-toggle="dropdown" href="#">Services</a>
            
            					    <ul class="dropdown-menu megamenu row">
            					      <li class="col-sm-3">
            					        <ul>
            					          <li class="no-square"><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Orthodontics</a></li>
            					          <li><a href="#">Invisalign</a></li>
            					          <li><a href="#">Incognito Lingual Services</a></li>
            					          <li><a href="#">Damon System</a></li>
            					          <li><a href="#">Six Month Smiles</a></li>
            					          <li><a href="#">Ceramic & Metal Braces</a></li>
            					          <li><a href="#">SureSmile Technology</a></li>
            					        </ul>
            					      </li>
            					      <li class="col-sm-3">
            					        <ul>
            					          <li class="no-square"><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Cosmetic / Aestheric Dentistry</li>
            					          <li><a href="#">Zoom Teeth Whitening</a></li>
            					          <li><a href="#">Veneers/Non Prep Veneers</a></li>
            					          <li><a href="#">Fillings</a></li>
            					          <li><a href="#">Crowns/Bridges</a></li>
            					          <li><a href="#">Aesthetic Inlays/Onlays</a></li>
            					          <li><a href="#">Dentures</a></li>
            					        </ul>
            					      </li>
            					      <li class="col-sm-3">
            					        <ul>
            					          <li class="no-square"><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Pediatric Dentistry</a></li>
            					          <li><a href="#">Painless</a></li>
            					          <li><a href="#">Restorative</a></li>
            					          <li><a href="#">Preventative</a></li>
            					          <li class="no-square"><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Dental Implants</a></li>
            					          <li class="no-square"><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Endodontics</a></li>
            					          <li class="no-square"><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Dental Surgery</a></li>
            					        </ul>
            					      </li>
            					      <li class="col-sm-3">
            					        <ul class="no-square">
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Periodontics</a></li>
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Root Canal Treatment</a></li>
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Tooth Extraction</a></li>
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Root Canal Treatment</a></li>
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Gum Disease Treatment</a></li>
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Dental Emergency</a></li>
            					          <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i>Oral and Maxillofacial</a></li>
            					        </ul>
            					      </li>
            					    </ul>
            
            					  </li>
            					  <li class="nav-item">
            					    <a href="#" class="nav-link">Our Team</a>
            					  </li>
            					  <li class="nav-item">
            					    <a href="#" class="nav-link">Gallery</a>
            					  </li>
            					  <li class="nav-item">
            					    <a href="#" class="nav-link">About Silesia Dental</a>
            					  </li>
            					  <li class="nav-item">
            					    <a href="#" class="nav-link">Contact Us</a>
            					  </li>
            					</ul>
            				</div>
            			</nav> -->
            <!-- /Navbar -->
        </header>
