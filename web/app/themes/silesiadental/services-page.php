<?php
/**
 * Template Name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<section id="service-page-banner">
		<div class="col-md-12">
			<div class="text-area">
				<h1>Healthy Smile <span>for every child</span></h1>
				<p>We work hard to make each dental visit fun and kid-oriented because we believe that oral 
				healthcare need not be a scary experience for your child.</p>
			</div>
		</div>
	</section>

	<!-- Info Bar -->
    <div class="info-bar service-infobar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
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
                </div>
                <div class="col-lg-4 col-md-4">
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
                </div>
                <div class="col-lg-4 col-md-4">
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
    </div><!-- /Info Bar -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section id="service-gallery">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/image-1.jpeg">
				    <!-- <div class="hovereffect">
				        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/image-1.jpeg">
				            <div class="overlay">
				    								<p> 
				    									<a href="#">LINK HERE</a>
				    								</p> 
				            </div>
				    </div> -->
				</div>
				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/image-2.jpg">
				</div>
				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/image-3.jpeg">
				</div>
			</div>
		</div>
	</section>

<?php
get_sidebar();
get_footer();
