<?php 

if ( function_exists('fw_get_db_settings_option') ) { ?>
<div class="slider">
<?php

	$slider_choise = fw_get_db_settings_option('slider_choise');

	echo fw()->extensions->get('slider')->render_slider($slider_choise, array(
		'width' => 1800,
		'height' => 700
	));
}
?>
</div>