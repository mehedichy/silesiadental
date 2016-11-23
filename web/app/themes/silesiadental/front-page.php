<?php
/**
 * Template Name: Front Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<!-- Slider -->
	<section class="page-slider">
	<div class="container-fluid">
		<div class="row">
			<div class="carousel slide" data-ride="carousel" id="silesia-carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img alt="Tooth Repair - Root Canal, Fillings at Silesia Dental" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider_1.jpg" />
						<!-- Static Header -->
						<div class="image-overlay">&nbsp;</div>
						<div class="page-hero-body alt">
							<h2>Tooth Repair</h2>
							<h4>Root Canal, Tooth Fillings, Inlays and Onlays</h4>
							<p>Teeth cavitation is one of the most prevalent problems in the world. We take care of cavitation in all stages.</p>
							<a href="http://dev.silesiadental.com/repairing-teeth/" class="btn btn-lg btn-slider">Tooth Repair <i class="fa fa-chevron-right"></i></a>
						</div><!-- /header-text -->
					</div>
					
					<div class="carousel-item">
						<img alt="Beautifying smile - Cosmetic Dentistry at Silesia Dental" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider_2.jpg" /> 
						<!-- Static Header -->
						<div class="image-overlay">&nbsp;</div>
						<div class="page-hero-body alt">
							<h2>Beautifying Smiles</h2>
							<h4>Zoom Whitening, Veneers and Smile makeovers</h4>
							<p>Zoom teeth whitening provides 6 shades of whitening in 1 hour. Our cosmetic dentistry practice is world class.</p>
							<a href="http://dev.silesiadental.com/cosmetic-dentistry/" class="btn btn-lg btn-slider">Beautifying smiles <i class="fa fa-chevron-right"></i></a>
						</div><!-- /header-text -->
					</div>
					<div class="carousel-item">
						<img alt="Removing teeth, General Extractions and Wisdom teeth removal at Silesia Dental " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider_3.jpg" />
						<!-- Static Header -->
						<div class="image-overlay">&nbsp;</div>
						<div class="page-hero-body alt">
							<h2>Fast <span>&amp;</span> Painless</h2>
							<h4>Removing Wisdom Teeth and General Extractions</h4>
							<p>At Silesia dental clinic, you are in expert hands who extract teeth with utmost care and almost painlessly.</p>
							<a href="http://dev.silesiadental.com/removing-teeth/" class="btn btn-lg btn-slider">Tooth removal <i class="fa fa-chevron-right"></i></a>
						</div><!-- /header-text -->
					</div>
				</div>

				<!-- <div class="image-overlay">&nbsp;</div> -->

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#silesia-carousel"></li>
					<li data-slide-to="1" data-target="#silesia-carousel"></li>
					<li data-slide-to="2" data-target="#silesia-carousel"></li>
				</ol>

				<!-- Carousel control -->
				<a class="left carousel-control" data-slide="prev" href="#silesia-carousel">
					<span class="fa fa-chevron-left"></span>
				</a>

				<a class="right carousel-control" data-slide="next" href="#silesia-carousel">
					<span class="fa fa-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
	</section><!-- /Slider -->

	<?php get_template_part('template-parts/info-bar'); ?>

	<?php get_template_part('template-parts/appointment'); ?>

	<?php get_template_part('template-parts/services'); ?>

	<?php get_template_part('template-parts/maps-street-view'); ?>

	<!-- Highlights -->
	<section class="highlight">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>20 years of<br>
					dental <span>excellence</span></h1>
					<p>Silesia Dental Clinic is the leading and most trusted dental healthcare provider in Dubai with a
					cutting edge dental clinic in Port Saeed, an advanced dental laboratory and a team of highly competent dental
					specialists, dentists and support staff.</p>
					<a href="http://dev.silesiadental.com/about-silesia-dental/" class="btn btn-lg btn-highlights">Find Out More</a>
				</div>
			</div>
		</div>
	</section><!-- /Highlights -->

<?php
get_sidebar();
get_footer();
