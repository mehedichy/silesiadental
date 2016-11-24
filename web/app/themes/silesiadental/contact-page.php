<?php
/**
 * Template Name: Contact Us
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

	<?php /* ?>
	<main class="page-content" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</main>
	<? */ ?>

	<?php // get_template_part('template-parts/appointment'); ?>

	<section class="contact-us">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-md-offset-3">
					<?php dynamic_sidebar( 'contact' ); ?>
				</div>

			</div>
		</div>
	</section>

	<section class="google-map-embed">
		<div class="container">
			<div class="row">

				<?php dynamic_sidebar( 'maps' ); ?>

			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/appointment-info-bar'); ?>

<?php
get_sidebar();
get_footer();
