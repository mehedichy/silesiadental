<?php
/**
 * Template Name: Our Team
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>
	
	<?php /*
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
	*/ ?>

	<main class="page-content" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// the_content();
		endwhile; // End of the loop.
		?>
	</main>

	<?php get_template_part('template-parts/appointment'); ?>


<?php
get_sidebar();
get_footer();
