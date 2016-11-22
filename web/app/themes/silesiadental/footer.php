<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dawn
 */

?>
	<section class="pre-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php
					wp_nav_menu( array(
						'menu'              => 'footer-1',
						'theme_location'    => 'footer-1',
						'container'     	=> false,
						'container_id'      => '',
						'container_class'   => '',
						'menu_class'        => 'menu footer-menu',
						'echo'          	=> true,
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
					));
					?>
				</div>

				<div class="col-md-4">
					<?php
					wp_nav_menu( array(
						'menu'              => 'footer-2',
						'theme_location'    => 'footer-2',
						'container'     	=> false,
						'container_id'      => '',
						'container_class'   => '',
						'menu_class'        => 'menu footer-menu',
						'echo'          	=> true,
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
					));
					?>
				</div>

				<div class="col-md-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/logo-footer.png">

					<p>Silesia Dental Clinic</p>
					<!--<p>سيليسيا عيادة الأسنان</p> -->
					<ul class="footer-social-icon">
						<li>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/fb.png"></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/twitter.png"></a>
						</li>
						<li>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/g+.png"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<p>&copy; Copyright 2016 silesia Dental Clinic, Dubai, UAE • Terms &amp; Conditions • All Rights Reserved • MOH FZ78578-17022017</p>
	</footer>

</div><!-- end: .body-container -->

<script src="https://use.typekit.net/jgv2rqp.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php
wp_footer(); ?>

</body>
</html>