<?php
if ( function_exists('fw_get_db_settings_option') ) {
	/*===================================================================================
		google font include
	===================================================================================*/
	$html = '';

	$google_fonts = fw_get_google_fonts();

	$general_typography = fw_get_db_settings_option('general_typography/family');
	$desc_typography = fw_get_db_settings_option('desc_typography/family');
	$link_typography = fw_get_db_settings_option('link_typography/family');
	$nav_typography =  fw_get_db_settings_option('nav_typography/family');

	$allTypo = array( 
		$general_typography => $google_fonts[$general_typography] ,
		$desc_typography => $google_fonts[$desc_typography] ,
		$link_typography => $google_fonts[$link_typography] ,
		$nav_typography => $google_fonts[$nav_typography] ,
	);

	$html .= "<link href='http://fonts.googleapis.com/css?family=";

 	foreach ( $allTypo as $font => $styles ) {
    	$html .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles['variants'] ) . '|';
    }

    $html = str_replace( 'regular', '400', $html );
    $html = str_replace( ',italic', ',400italic', $html );
    $html = substr( $html, 0, -1 );
 	
 	$html .= "' rel='stylesheet' type='text/css'>";

 	echo $html;

}

?>