<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package poc
 */

if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('sidebar')) ) {
	$sidebar = fw_get_db_settings_option('sidebar');
	$column_content = 'col-sm-12';
	$column_sidebar = 'col-sm-3';
	if($sidebar == 'left' || $sidebar == 'right'){
		$column_sidebar = 'col-sm-3';
		$column_content = 'col-sm-8';
	}elseif ($sidebar == 'left_right') {
		$column_sidebar = 'col-sm-3';
		$column_content = 'col-sm-6';
	}
}
get_header(); ?>
	<div class="container">
	<div class="row">

	<div class="sidebar-left">
	<div class="<?php echo $column_sidebar; ?>">
	<?php

		get_sidebar();

	?>
	</div>
	</div><!--sidebar-left-->

	<div id="primary" class="content-area">

	<div class="<?php echo $column_content; ?>">

		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	</div><!--col_content-->

	</div><!-- #primary -->

	<div class="sidebar-right">
	<div class="<?php echo $column_sidebar; ?>">

		<?php

			get_sidebar('right');

		?>
	</div>
	</div><!--.sidebar-right-->


</div><!--row-->
</div><!--container-->
<?php
get_footer();
