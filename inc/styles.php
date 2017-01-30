<style type="text/css">
	<?php 
		if ( function_exists('fw_get_db_settings_option') ) {

			function getFontstyle($value='')
			{
				if(!empty($value)){
				$fontStyle = '';
				$font_replace = $value['style'];
				$findme   = '0i';
				$pos = strpos($font_replace, $findme);

				if ($pos === false) {
					if($font_replace == 'regular'){
						$fontStyle .= 'font-weight:400;';
						$fontStyle .= 'font-style:normal;';
					}elseif($font_replace == 'italic'){
						$fontStyle .= 'font-weight:400;';
						$fontStyle .= 'font-style:italic;';			    	
					}else{
						$fontStyle .= 'font-weight:'.$font_replace.';';
					}
				} else {
				    $font_weight = str_replace('italic','', $font_replace);
				    $fontStyle .= 'font-weight:'.$font_weight.';';
					$fontStyle .= 'font-style:italic;';	
				}

				return $fontStyle;

				}
			}
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
				echo "#page{-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);max-width:".$site_width.";margin:0 auto;}";
				echo ".container{max-width:calc(". $site_width .");}";
			}

			/*========================================================================
				Boxed Background
			==========================================================================*/
			$boxed_bg_color = fw_get_db_settings_option('boxed_bg_color');

			if(!empty($boxed_bg_color)){
				echo 'body{background-color: '.$boxed_bg_color.';}';
			}
			$boxed_bg_image = fw_get_db_settings_option('boxed_bg_image');

			if(!empty($boxed_bg_image)){
				echo 'body{background-image: url('.$boxed_bg_image['url'].');}';
			}

			$boxed_bg_size = fw_get_db_settings_option('boxed_bg_size');

			if(!empty($boxed_bg_size)){
				if ($boxed_bg_size == 'contain') {
					echo 'body{background-size: contain;}';
				}elseif ($boxed_bg_size == 'cover') {
					echo 'body{background-size: cover;}';
				}
			}

			$boxed_bg_position = fw_get_db_settings_option('boxed_bg_position');

			if(!empty($boxed_bg_position)){
				if ($boxed_bg_position == 'left-top') {
					echo 'body{background-position: left top;}';
				}elseif ($boxed_bg_position == 'left-center') {
					echo 'body{background-position: left center;}';
				}elseif ($boxed_bg_position == 'left-bottom') {
					echo 'body{background-position: left bottom;}';
				}elseif ($boxed_bg_position == 'right-top') {
					echo 'body{background-position: right top;}';
				}elseif ($boxed_bg_position == 'right-center') {
					echo 'body{background-position: right center;}';
				}elseif ($boxed_bg_position == 'right-bottom') {
					echo 'body{background-position: right bottom;}';
				}elseif ($boxed_bg_position == 'center-top') {
					echo 'body{background-position: center top;}';
				}elseif ($boxed_bg_position == 'center-center') {
					echo 'body{background-position: center center;}';
				}elseif ($boxed_bg_position == 'center-bottom') {
					echo 'body{background-position: center bottom;}';
				}
			}

			// header background repeat
			$boxed_bg_repeat = fw_get_db_settings_option('boxed_bg_repeat');

			if(!empty($boxed_bg_repeat)){
				echo 'body{background-repeat: '.$boxed_bg_repeat.';}';
			}
			/*=========================================================================
				Typography
				standart font css (font: font-style font-variant font-weight font-size/line-height font-family)
			==========================================================================*/
			$general_typography = fw_get_db_settings_option('general_typography');

				$general_style = getFontstyle($general_typography);
		
				$font = $general_style .' font-size:  '.$general_typography['size'] .'px; font-family:  '. $general_typography['family'];
				echo 'html, html body{'. $font .';color: '.$general_typography['color'].';}';
			

			$desc_typography = fw_get_db_settings_option('desc_typography');
				$desc_style = getFontstyle($desc_typography);
				$font = $desc_style .' font-size:  '.$desc_typography['size'] .'px; font-family:  '. $desc_typography['family'];
				echo '.site-description{'. $font .';color: '.$desc_typography['color'].';}';

			$nav_typography = fw_get_db_settings_option('nav_typography');

			$nav_style = getFontstyle($nav_typography);
				
				$font = $nav_style .' font-size:  '.$nav_typography['size'] .'px; font-family:  '. $nav_typography['family'];
				echo '#poc-nav-collapse .menu > li > a{'. $font .';color: '.$nav_typography['color'].';}';
			/*=========================================================================
				Header Top Style
			==========================================================================*/
			$show_header_top = fw_get_db_settings_option('show_header_top');
			if ($show_header_top == 'no') {
				echo '.header-top-wrap{display:none;}';
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

			/*=========================================================================
				Navigation
			==========================================================================*/
			$show_nav = fw_get_db_settings_option('show_nav');

			if(!empty($show_nav) && $show_nav == 'no'){
				echo '#poc-nav-collapse.navbar-collapse.collapse{display: none !important;}';
			}
			$nav_height = fw_get_db_settings_option('nav_height');

			if(!empty($nav_height)){
				echo '#poc-nav-collapse .menu > li > a{line-height: '.$nav_height.';height:'.$nav_height.';}';
			}
			$nav_bg_color = fw_get_db_settings_option('nav_bg_color');

			if(!empty($nav_bg_color)){
				echo '.nav_main{background:  '.$nav_bg_color.';}';
			}

			$nav_hover = fw_get_db_settings_option('nav_hover');

			if(!empty($nav_bg_color)){
				echo '#poc-nav-collapse .menu > li:hover > a, #poc-nav-collapse .menu > li:focus > a, #poc-nav-collapse .menu > li:active > a{color:  '.$nav_hover.';}';
			}
			/*========================================================================
				Content Option
			==========================================================================*/
			$content_bg_color = fw_get_db_settings_option('content_bg_color');

			if(!empty($content_bg_color)){
				echo '.site-content{background-color: '.$content_bg_color.';}';
			}
			$content_bg_image = fw_get_db_settings_option('content_bg_image');

			if(!empty($content_bg_image)){
				echo '.site-content{background-image: url('.$content_bg_image['url'].');}';
			}

			$content_bg_size = fw_get_db_settings_option('content_bg_size');

			if(!empty($content_bg_size)){
				if ($content_bg_size == 'contain') {
					echo '.site-content{background-size: contain;}';
				}elseif ($content_bg_size == 'cover') {
					echo '.site-content{background-size: cover;}';
				}
			}

			$content_bg_position = fw_get_db_settings_option('content_bg_position');

			if(!empty($content_bg_position)){
				if ($content_bg_position == 'left-top') {
					echo '.site-content{background-position: left top;}';
				}elseif ($content_bg_position == 'left-center') {
					echo '.site-content{background-position: left center;}';
				}elseif ($content_bg_position == 'left-bottom') {
					echo '.site-content{background-position: left bottom;}';
				}elseif ($content_bg_position == 'right-top') {
					echo '.site-content{background-position: right top;}';
				}elseif ($content_bg_position == 'right-center') {
					echo '.site-content{background-position: right center;}';
				}elseif ($content_bg_position == 'right-bottom') {
					echo '.site-content{background-position: right bottom;}';
				}elseif ($content_bg_position == 'center-top') {
					echo '.site-content{background-position: center top;}';
				}elseif ($content_bg_position == 'center-center') {
					echo '.site-content{background-position: center center;}';
				}elseif ($content_bg_position == 'center-bottom') {
					echo '.site-content{background-position: center bottom;}';
				}
			}

			// content background repeat
			$content_bg_repeat = fw_get_db_settings_option('content_bg_repeat');

			if(!empty($content_bg_repeat)){
				echo '.site-content{background-repeat: '.$content_bg_repeat.';}';
			}

			/*========================================================================
				Sidebar Style
			==========================================================================*/


			/*==========================================================================
				Footer Style
			===========================================================================*/

			$footer_bg_color = fw_get_db_settings_option('footer_bg_color');

			if(!empty($footer_bg_color)){
				echo 'footer.site-footer{background-color: '.$footer_bg_color.';}';
			}
			$footer_bg_image = fw_get_db_settings_option('footer_bg_image');

			if(!empty($footer_bg_image)){
				echo 'footer.site-footer{background-image: url('.$footer_bg_image['url'].');}';
			}

			$footer_bg_size = fw_get_db_settings_option('footer_bg_size');

			if(!empty($footer_bg_size)){
				if ($footer_bg_size == 'contain') {
					echo 'footer.site-footer{background-size: contain;}';
				}elseif ($footer_bg_size == 'cover') {
					echo 'footer.site-footer{background-size: cover;}';
				}
			}

			$footer_bg_position = fw_get_db_settings_option('footer_bg_position');

			if(!empty($footer_bg_position)){
				if ($footer_bg_position == 'left-top') {
					echo 'footer.site-footer{background-position: left top;}';
				}elseif ($footer_bg_position == 'left-center') {
					echo 'footer.site-footer{background-position: left center;}';
				}elseif ($footer_bg_position == 'left-bottom') {
					echo 'footer.site-footer{background-position: left bottom;}';
				}elseif ($footer_bg_position == 'right-top') {
					echo 'footer.site-footer{background-position: right top;}';
				}elseif ($footer_bg_position == 'right-center') {
					echo 'footer.site-footer{background-position: right center;}';
				}elseif ($footer_bg_position == 'right-bottom') {
					echo 'footer.site-footer{background-position: right bottom;}';
				}elseif ($footer_bg_position == 'center-top') {
					echo 'footer.site-footer{background-position: center top;}';
				}elseif ($footer_bg_position == 'center-center') {
					echo 'footer.site-footer{background-position: center center;}';
				}elseif ($footer_bg_position == 'center-bottom') {
					echo 'footer.site-footer{background-position: center bottom;}';
				}
			}

			// content background repeat
			$footer_bg_repeat = fw_get_db_settings_option('footer_bg_repeat');

			if(!empty($footer_bg_repeat)){
				echo 'footer.site-footer{background-repeat: '.$footer_bg_repeat.';}';
			}
		}
	?>

/*======================================================================================
	color scheme include
======================================================================================*/
<?php require 'color-scheme.php'; ?>

</style>