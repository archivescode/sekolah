<style type="text/css">
	<?php 
		if ( function_exists('fw_get_db_settings_option') ) {

			//site width
			$site_width = fw_get_db_settings_option('site_width');

			if(empty($site_width)){
				echo ".container{width:1170px;}";
			}else{
				echo ".container{width:". $site_width .";}";
			}

			//site layout
			$site_layout = fw_get_db_settings_option('layout');
			if($site_layout == "boxed"){
				echo "#page{-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5);width:".$site_width.";margin:0 auto;}";
			}

			//header top style
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
			//header option
			$show_description = fw_get_db_settings_option('show_description');

			if(!empty($show_description) && $show_description == 'no'){
				echo 'header .site-description{display: none;}';
			}

			$logo_height = fw_get_db_settings_option('logo_height');

			if(!empty($show_description)){
				echo 'header .site-logo a img{height: '. $logo_height .';}';
			}

			//sidebar style
			$sidebar = fw_get_db_settings_option('sidebar');

			if($sidebar == 'left'){
				echo ".sidebar-right{display:none;}";
			}elseif ($sidebar == 'right') {
				echo ".sidebar-left{display:none;}";
			}elseif ($sidebar == 'full') {
				echo ".sidebar-right, .sidebar-left{display:none;}";
			}

			//footer style
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