<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

	<section id="primary" class="content-area">

	<div class="<?php echo $column_content; ?>">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'poc' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

	</div><!--col_content-->

	</section><!-- #primary -->

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
