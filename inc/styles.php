<style type="text/css">
	<?php 
		if ( function_exists('fw_get_db_settings_option') ) {
			/*===========================================================================
				General Style
			===========================================================================*/

			//site width
			$site_width = fw_get_db_settings_option('site_width');

			if(empty($site_width)){
				echo ".container{max-width:1170px;}";
			}else{
				echo ".container{max-width:". $site_width .";}";
			}

			//site layout
			$site_layout = fw_get_db_settings_option('layout');
			if($site_layout == "boxed"){
				echo "#page{-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);width:".$site_width.";margin:0 auto;}";
			}
			/*=========================================================================
				Typography
				standart font css (font: font-style font-variant font-weight font-size/line-height font-family)
			==========================================================================*/
			$general_typography = fw_get_db_settings_option('general_typography');
			//fw_print($general_typography);
			if(!empty($general_typography)){

				$font_replace = $general_typography['style'];
				$findme   = '0i';
				$pos = strpos($font_replace, $findme);

				echo $pos;

				if ($pos === false) {
					if($font_replace == 'regular'){
						$font_style = 'normal';
					}else{
				    	$font_style = $font_replace;
					}
				} else {
				    $font_style = str_replace('italic',' italic', $font_replace);
				}
				
				$font = 'font-weight: '. $font_style .'; font-size:  '.$general_typography['size'] .'px; font-family:  '. $general_typography['family'];
				echo 'html, html body{'. $font .';color: '.$general_typography['color'].';}';
			}
			/*=========================================================================
				Header Top Style
			==========================================================================*/
			$show_header_top = fw_get_db_settings_option('show_header_top');
			if ($show_header_top == 'no') {
				echo '.header-top-wrap{display:none;}';
			}
			$header_top_border_color = fw_get_db_settings_option('header_top_border_top_color');

			if(!empty($header_top_border_color)){
				echo 'header .header-top-wrap{border-top-color: '.$header_top_border_color.'}';
			}

			$header_top_background = fw_get_db_settings_option('header_top_background');

			if(!empty($header_top_background)){
				echo 'header .header-top-wrap{background: '.$header_top_background.'}';
			}
			/*========================================================================
				Header Option
			==========================================================================*/
			$header_bg_color = fw_get_db_settings_option('header_bg_color');

			if(!empty($header_bg_color)){
				echo 'header .header-main-wrap{background-color: '.$header_bg_color.';}';
			}
			$header_bg_image = fw_get_db_settings_option('header_bg_image');

			if(!empty($header_bg_image)){
				echo 'header .header-main-wrap{background-image: url('.$header_bg_image['url'].');}';
			}

			$header_bg_size = fw_get_db_settings_option('header_bg_size');

			if(!empty($header_bg_size)){
				if ($header_bg_size == 'contain') {
					echo 'header .header-main-wrap{background-size: contain;}';
				}elseif ($header_bg_size == 'cover') {
					echo 'header .header-main-wrap{background-size: cover;}';
				}
			}

			$header_bg_position = fw_get_db_settings_option('header_bg_position');

			if(!empty($header_bg_position)){
				if ($header_bg_position == 'left-top') {
					echo 'header .header-main-wrap{background-position: left top;}';
				}elseif ($header_bg_position == 'left-center') {
					echo 'header .header-main-wrap{background-position: left center;}';
				}elseif ($header_bg_position == 'left-bottom') {
					echo 'header .header-main-wrap{background-position: left bottom;}';
				}elseif ($header_bg_position == 'right-top') {
					echo 'header .header-main-wrap{background-position: right top;}';
				}elseif ($header_bg_position == 'right-center') {
					echo 'header .header-main-wrap{background-position: right center;}';
				}elseif ($header_bg_position == 'right-bottom') {
					echo 'header .header-main-wrap{background-position: right bottom;}';
				}elseif ($header_bg_position == 'center-top') {
					echo 'header .header-main-wrap{background-position: center top;}';
				}elseif ($header_bg_position == 'center-center') {
					echo 'header .header-main-wrap{background-position: center center;}';
				}elseif ($header_bg_position == 'center-bottom') {
					echo 'header .header-main-wrap{background-position: center bottom;}';
				}
			}

			// header background repeat
			$header_bg_repeat = fw_get_db_settings_option('header_bg_repeat');

			if(!empty($header_bg_repeat)){
				echo 'header .header-main-wrap{background-repeat: '.$header_bg_repeat.';}';
			}

			$show_description = fw_get_db_settings_option('show_description');

			if(!empty($show_description) && $show_description == 'no'){
				echo 'header .site-description{display: none;}';
			}

			$logo_height = fw_get_db_settings_option('logo_height');

			if(!empty($show_description)){
				echo 'header .site-logo a img{height: '. $logo_height .';}';
			}

			/*========================================================================
				Sidebar Style
			==========================================================================*/
			$sidebar = fw_get_db_settings_option('sidebar');

			if($sidebar == 'left'){
				echo ".sidebar-right{display:none;}";
			}elseif ($sidebar == 'right') {
				echo ".sidebar-left{display:none;}";
			}elseif ($sidebar == 'full') {
				echo ".sidebar-right, .sidebar-left{display:none;}";
			}

			/*==========================================================================
				Footer Style
			===========================================================================*/
			$footer_column = fw_get_db_settings_option('footer_column');
			if($footer_column == 1){
				echo ".footer-top-two, .footer-top-three, .footer-top-four{display:none;}";
			}elseif ($footer_column == 2) {
				echo ".footer-top-three, .footer-top-four{display:none;}";
			}elseif ($footer_column == 3) {
				echo ".footer-top-four{display:none;}";
			}
		}
	?>
</style>