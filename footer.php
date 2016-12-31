<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poc
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">
	<div class="row">

		<div class="col-xs-12">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'poc' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'poc' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'poc' ), 'poc', '<a href="http://museumdesain.com/" rel="designer">poc team</a>' ); ?>
		</div><!-- .site-info -->
		</div>

	</div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
