<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package poc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php poc_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

			if ( has_post_thumbnail() ) {
				echo '<div class="image-thumbnail">';
			    the_post_thumbnail('full');
			    echo '</div>';
			}
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'poc' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'poc' ),
				'after'  => '</div>',
			) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php poc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
