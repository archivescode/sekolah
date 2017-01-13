<style type="text/css">
	<?php 
		if ( function_exists('fw_get_db_settings_option') ) {

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