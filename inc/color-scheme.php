<?php 
	if ( function_exists('fw_get_db_settings_option') ) :

		$cssColor = '';

		/*=====================================================================================
			header top border color
		=======================================================================================*/
		$header_top_border_color = fw_get_db_settings_option('colorScheme/custom/header_top_border_top_color');
		if(!empty($header_top_border_color)){
			$cssColor .= 'header .header-top-wrap{border-top-color: '.$header_top_border_color.'}';
		}

		/*=====================================================================================
			link color
		=======================================================================================*/
		$link_color = fw_get_db_settings_option('colorScheme/custom/link_color');
		if(!empty($link_color)){
			$cssColor .= 'a{color: '.$link_color.'}';
		}

		/*=====================================================================================
			link color
		=======================================================================================*/
		$link_hover = fw_get_db_settings_option('colorScheme/custom/link_honer');
		if(!empty($link_hover)){
			$cssColor .= 'a:active, a:hover, a:focus{color: '.$link_hover.'}';
		}

		$typeColor = fw_get_db_settings_option('colorScheme/type_color');

		if($typeColor == 'all'){

			$typeColorAll = fw_get_db_settings_option('colorScheme/all/all_color');
			$link_hover_all = fw_get_db_settings_option('colorScheme/all/link_hover_all');

			$cssAll = 'header .header-top-wrap{border-top-color: '.$typeColorAll.'}';
			$cssAll .= 'a{color: '.$typeColorAll.'}';
			$cssAll .= 'a:active, a:hover, a:focus{color: '.$link_hover_all.'}';

			echo $cssAll;

		}elseif ($typeColor == 'custom') {

			echo $cssColor;
			
		} //endif $typeColor

	endif; // endif function_exists('fw_get_db_settings_option')
?>