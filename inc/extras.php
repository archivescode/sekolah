<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package poc
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function poc_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'poc_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function poc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'poc_pingback_header' );

function poc_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

add_action('admin_head', 'poc_show_favicon');
add_action('wp_head', 'poc_show_favicon');
function poc_show_favicon() {
	if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('favicon')) ) {

		$favicon = fw_get_db_settings_option('favicon');

		echo '<link rel="icon" type="image/x-icon" href="'.$favicon['url'].'" />';

	}else{ 

	echo '<link rel="icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/images/favicon.png" />';

	 } 
}

//print google font link

if(!function_exists('_action_theme_process_google_fonts')) {
    function _action_theme_process_google_fonts()
    {
        $include_from_google = array();
        $google_fonts = fw_get_google_fonts();

        $general_typography = fw_get_db_settings_option('general_typography');
        //$link_typography = fw_get_db_settings_option('link_typography');

        // if is google font
        if( isset($google_fonts[$general_typography['family']]) ){
            $include_from_google[$general_typography['family']] =   $google_fonts[$general_typography['family']];
        }

        if( isset($google_fonts[$general_typography['family']]) ){
            $include_from_google[$link_typography['family']] =   $google_fonts[$link_typography['family']];
        }

        $google_fonts_links = fw_theme_get_remote_fonts($include_from_google);
        // set a option in db for save google fonts link
        update_option( 'fw_theme_google_fonts_link', $google_fonts_links );
    }
    add_action('fw_settings_form_saved', '_action_theme_process_google_fonts', 999, 2);
}

if (!function_exists('fw_theme_get_remote_fonts')) :
    function fw_theme_get_remote_fonts($include_from_google) {
        /**
         * Get remote fonts
         * @param array $include_from_google
         */
        if ( ! sizeof( $include_from_google ) ) {
            return '';
        }
        print_r($include_from_google);
        $html = "<link href='http://fonts.googleapis.com/css?family=";

        foreach ( $include_from_google as $font => $styles ) {
            $html .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles['variants'] ) . '|';
        }

        $html = substr( $html, 0, - 1 );
        $html .= "' rel='stylesheet' type='text/css'>";

        return $html;
    }
endif;

if (!function_exists('_action_theme_print_google_fonts_link')) :
    function _action_theme_print_google_fonts_link() {
        /**
         * Print google fonts link
         */
        $google_fonts_link = get_option('fw_theme_google_fonts_link', '');
        if($google_fonts_link != ''){
            echo $google_fonts_link;
        }
    }
    add_action('wp_head', '_action_theme_print_google_fonts_link');
endif;
