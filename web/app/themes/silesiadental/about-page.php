<?php
/**
 * Template Name: About Page
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
	
	<main class="page-content" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</main>

	<?php get_template_part('template-parts/appointment-info-bar'); ?>

<?php
get_sidebar();
get_footer();
