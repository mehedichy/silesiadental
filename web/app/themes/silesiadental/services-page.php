<?php
/**
 * Template Name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<section class="page-hero">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
		?>

		<div class="image-overlay">&nbsp;</div>

		<div class="page-hero-body alt <?php the_field('alignment'); ?>">
			<h2><?php the_field('cover-heading'); ?></h2>

			<h4><?php the_field('cover-subheading'); ?></h4>

			<?php the_field('cover-paragraph'); ?>
		</div>
	</section>

	<?php get_template_part('template-parts/info-bar'); ?>

	<main class="page-content" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</main>

	<?php get_template_part('template-parts/appointment'); ?>

	<?php /*
	<section id="service-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<div class="col-md-4 col-sm-12">
						<div class="box">
							<div class="overlay">
								<a class="expand" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/service-1.jpg" data-lightbox="roadtrip"><i class="fa fa-expand" aria-hidden="true"></i><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/service-1.jpg"></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="box">
							<div class="overlay">
								<a class="expand" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/service-2.jpg" data-lightbox="roadtrip"><i class="fa fa-expand" aria-hidden="true"></i><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/service-2.jpg"></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="box">
							<div class="overlay">
								<a class="expand" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/service-3.jpg" data-lightbox="roadtrip"><i class="fa fa-expand" aria-hidden="true"></i><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/service-3.jpg"></a>
							</div>
						</div>
					</div>
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
						        	<a data-toggle="collapse" data-parent="#bs-collapse" href="#three">Pediatric Dentistry FAQs</a>
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
	*/ ?>

<?php
get_sidebar();
get_footer();
