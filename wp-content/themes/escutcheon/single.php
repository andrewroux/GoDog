<?php
/**
 * The template for displaying all single posts.
 *
 * @package Escutcheon
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'components/content', 'single' ); ?>

			<?php the_post_navigation( array(
				'prev_text' => sprintf( esc_html__( 'Previous Post %s', 'escutcheon' ), '<span class="screen-reader-text">%title</span>' ),
				'next_text' => sprintf( esc_html__( 'Next Post %s', 'escutcheon' ), '<span class="screen-reader-text">%title</span>' ),
				) ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
