<?php
/**
 * Template Name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<section id="header-img">
		<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
		?>
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
		<main id="main" class="site-main service-page" role="main">

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

	<!-- FAQs -->
	 <section id="faq">
	 	<div class="container">
	        <div class="row">
	        	<div class="col-md-8 col-sm-12 col-xs-12">
		            <div class="panel-group wrap" id="bs-collapse">
		                <div class="panel">
		                    <div class="panel-heading">
		                        <h4 class="panel-title">
						        	<a data-toggle="collapse" data-parent="#bs-collapse" href="#one">What Dental Procedures Do Our Specialist Pedodontists Do?</a>
						      	</h4>
		                    </div>
		                    <div id="one" class="panel-collapse collapse">
		                        <div class="panel-body">
		                            Children who enjoy their first trip to their dentists (and their sunny, colorful rooms with fancy paintings on the walls) suggest a promising attitude towards their dental care, health and habits.
		                        </div>
		                    </div>

		                </div>
		                <!-- end of panel -->

		                <div class="panel">
		                    <div class="panel-heading">
		                        <h4 class="panel-title">
						        	<a data-toggle="collapse" data-parent="#bs-collapse" href="#two">Dental Care for Your Baby</a>
						      	</h4>
		                    </div>
		                    <div id="two" class="panel-collapse collapse">
		                        <div class="panel-body">

		                            Where is the harp on the harpstring, and the red fire glowing? Where is the spring and the harvest and the tall corn growing?

		                        </div>

		                    </div>
		                </div>
		                <!-- end of panel -->

		                <div class="panel">
		                    <div class="panel-heading">
		                        <h4 class="panel-title">
						        	<a data-toggle="collapse" data-parent="#bs-collapse" href="#three">CPediatric Dentistry FAQs</a>
						      	</h4>
		                    </div>
		                    <div id="three" class="panel-collapse collapse">
		                        <div class="panel-body">
		                            ave gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning? The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning? The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning? The days have gone down in the West behind the hills into shadow. Who shall gather the smoke of the deadwood burning, Or behold the flowing years from the Sea returning?
		                        </div>
		                    </div>
		                </div>
		                <!-- end of panel -->

		                <div class="panel">
		                    <div class="panel-heading">
		                        <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">Pediatric Dental Emergencies</a>
						      	</h4>
		                    </div>
		                    <div id="four" class="panel-collapse collapse">
		                        <div class="panel-body">

		                            They have passed like rain on the mountain, like a wind in the meadow; The days have gone down in the West behind the hills into shadow.
		                        </div>
		                    </div>
		                </div>
		                <!-- end of panel -->

		                <div class="panel">
		                    <div class="panel-heading">
		                        <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#bs-collapse" href="#five">Dental Sealants</a>
						      	</h4>
		                    </div>
		                    <div id="five" class="panel-collapse collapse">
		                        <div class="panel-body">

		                            They have passed like rain on the mountain, like a wind in the meadow; The days have gone down in the West behind the hills into shadow.
		                        </div>
		                    </div>
		                </div>
		                <!-- end of panel -->

		            </div>
		            <!-- end of #bs-collapse  -->
		        </div>
		        <div class="col-md-4 col-sm-12 col-xs-12">
		        	<div class="quotation-div">
		        		<i class="fa fa-quote-left fa-3x" aria-hidden="true"></i>
		        		<hr>
		        		<p>I would like to say a big thank you to all the team at Dr Michael's Clinic, from the charming and efficient reception staff to all the dental team.</p>
		        		<h5>ANNA WHITE</h5>
		        	</div>
		        </div>
	        </div>
	    </div>
	    <!-- end of container -->
	 </section>
	<!-- #FAQs -->

	<!-- Appointment -->
    <div class="appointment">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
            		<h1>Book an <span>appointment</span></h1>
            		<div class="form-div">
            			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
            		</div>
            	</div>
            </div>
        </div>
    </div><!-- /Appointment -->

<?php
get_sidebar();
get_footer();
