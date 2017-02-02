<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package poc
 */
if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('sidebar')) ) {
	$sidebar = fw_get_db_settings_option('sidebar');
	$column_content = 'col-sm-9';
	$column_sidebar = 'col-sm-3';
	$style_left = '';
	$style_right = '';
	if($sidebar == 'left'){
		$style_right = 'style="display:none;"';
		$column_sidebar = 'col-sm-3';
		$column_content = 'col-sm-9';
	}elseif ($sidebar == 'right'){
		$style_left = 'style="display:none;"';
		$column_sidebar = 'col-sm-3';
		$column_content = 'col-sm-9';
	}elseif ($sidebar == 'left_right') {
		$column_sidebar = 'col-sm-3';
		$column_content = 'col-sm-6';
	}
}
get_header(); ?>

	<div class="container">
	<div class="row">

	<div class="<?php echo $column_sidebar; ?>">
	<div class="sidebar-left">
	<?php

		get_sidebar();

	?>

	</div><!--sidebar-left-->
	</div>

	<div id="primary" class="content-area">

	<div class="<?php echo $column_content; ?>">

		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="<?php echo $column_sidebar; ?>">
	<div class="sidebar-right">
		<?php

			get_sidebar('right');

		?>
		
	</div><!--.sidebar-right-->
	</div>

	</div>
	
	</div><!--row-->
	</div><!--container-->

<?php
get_footer();
