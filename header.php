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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Sans:400,400i,700,700i" rel="stylesheet"> 

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'inc/styles' ); ?>
<div id="page" class="site">
<?php fw_print(fw_get_db_settings_option('general_typography'));?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'poc' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

	<div class="header-top-wrap">
		<?php get_template_part( 'headers/header', 'top' ); ?>
	</div>

	<div class="header-main-wrap">
		<?php get_template_part( 'headers/header', 'main' ); ?>
	</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
