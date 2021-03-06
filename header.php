<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poc
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!--link google font-->
<?php get_template_part( 'inc/google', 'font' ); 
//fw_print(fw_get_db_settings_option('colorScheme'));
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'inc/styles' ); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'poc' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

	<div class="header-top-wrap">
		<?php get_template_part( 'headers/header', 'top' ); ?>
	</div>

	<div class="header-main-wrap">
		<?php get_template_part( 'headers/header', 'main' ); ?>
	</div>

	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/slider' ); ?>

	<div id="content" class="site-content">
