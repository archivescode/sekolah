<style type="text/css">
	<?php 
		if ( function_exists('fw_get_db_settings_option') ) {
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