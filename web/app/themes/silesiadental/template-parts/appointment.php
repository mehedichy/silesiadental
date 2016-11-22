	<!-- Appointment -->
	<section class="appointment">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-6 col-lg-offset-3">
					<h1>Book an <span>appointment</span></h1>
					<div class="form-div">
						<?php // if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>

						<?php // echo do_shortcode("[ninja_form id=1]"); ?>

						<?php dynamic_sidebar( 'appointment' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /Appointment -->