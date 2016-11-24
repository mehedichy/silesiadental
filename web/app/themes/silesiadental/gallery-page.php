<?php
/**
 * Template Name: Gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dawn
 */

get_header(); ?>

	<?php get_template_part('template-parts/info-bar'); ?>

	<main class="page-content" role="main">
		<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- <div class="entry-content"> -->
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dawn' ),
						'after'  => '</div>',
					) );
				?>
			<!-- </div> -->
			<!-- .entry-content -->
		</article><!-- #post-## -->


		<?php
		endwhile; // End of the loop.
		?>
	</main>

<?php
get_sidebar();
get_footer();
