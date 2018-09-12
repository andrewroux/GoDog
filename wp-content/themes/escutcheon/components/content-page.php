<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Escutcheon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-wrapper">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<?php the_post_thumbnail( 'escutcheon-large' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'escutcheon' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php edit_post_link( esc_html__( 'Edit', 'escutcheon' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</div>

	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

</article><!-- #post-## -->