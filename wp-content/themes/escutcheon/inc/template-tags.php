<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Escutcheon
 */

if ( ! function_exists( 'escutcheon_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function escutcheon_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	if ( get_the_date( 'F j Y' ) == get_the_date() && ! is_single() ) {
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			'<span class="month-and-day">' . esc_html( get_the_date( 'F j' ) ) . '</span><span class="year">' . esc_html( get_the_date( 'Y' ) ) . '</span>',
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
	}
	else {
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
	}

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	$byline = sprintf(
		esc_html_x( 'Written by %s', 'post author', 'escutcheon' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline"> ' . $byline . '</span><span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'escutcheon_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function escutcheon_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'escutcheon' ) );
		if ( $categories_list && escutcheon_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s.', 'escutcheon' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'escutcheon' ) ), esc_html__( ', ', 'escutcheon' ), '.</span>' );
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'escutcheon' ), esc_html__( '1 Comment', 'escutcheon' ), esc_html__( '% Comments', 'escutcheon' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'escutcheon' ), '<span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function escutcheon_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'escutcheon_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'escutcheon_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so escutcheon_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so escutcheon_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in escutcheon_categorized_blog.
 */
function escutcheon_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'escutcheon_categories' );
}
add_action( 'edit_category', 'escutcheon_category_transient_flusher' );
add_action( 'save_post',     'escutcheon_category_transient_flusher' );
