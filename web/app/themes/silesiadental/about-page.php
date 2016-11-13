<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<section id="about-banner"></section>

	<div id="primary" class="content-area">
		<main id="main" class="about" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<!-- Appointment -->
    <div class="page-appointment">
        <div class="container">
            <div class="row">
            	<div class="col-md-6 col-sm-12">
            		<div class="appointment-div">
            			<h1>Book an <span>appointment</span></h1>
	            		<div class="about-form-div">
	            			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
	            		</div>
            		</div>
            	</div>
            	<div class="col-md-6 col-sm-12">
                    <div class="info-div">
                    	<div class="media">
	                        <div class="media-left">
	                            <i aria-hidden="true" class="fa fa-clock-o fa-3x"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4 class="media-heading">Openning Hours</h4>
	                            <p>Sat-Wed, 8am-8pm<br>
	                            Thu, 8am-6pm<br>
	                            Closed on Fridays</p>
	                        </div>
	                    </div>

	                    <div class="media">
	                        <div class="media-left">
	                            <i aria-hidden="true" class="fa fa-map-marker fa-3x"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4 class="media-heading">Location</h4>
	                            <address>
		                            Diera, Port Saeed, Centurion Star bldg.,
		                            <br />
		                            Metro Exit 2, Bloack A, Office 302
		                            <br />
		                            P.O. BOX: 40466,Dubai, UAE
		                            <br />
		                            <a href="https://goo.gl/za59A4">Find Us</a></p>
	                            </address>
	                        </div>
	                    </div>

	                    <div class="media">
	                        <div class="media-left">
	                            <i aria-hidden="true" class="fa fa-mobile fa-3x"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4 class="media-heading">Call us today!</h4>
	                            <p>Tel.: +971 4 228 4770<br>
	                            Mob.: -971 50 412 7876</p>
	                        </div>
	                    </div>
                    </div>

            	</div>
            </div>
        </div>
    </div><!-- /Appointment -->

<?php
get_sidebar();
get_footer();
