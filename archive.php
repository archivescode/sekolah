<?php
/**
 * The template for displaying archive pages.
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
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			poc_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

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
