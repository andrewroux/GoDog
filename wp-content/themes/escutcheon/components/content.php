<?php
/**
 * Template part for displaying posts.
 *
 * @package Escutcheon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?>>
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php escutcheon_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
	<div class="entry-wrapper">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-## -->