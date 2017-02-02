<?php 

if ( function_exists('fw_get_db_settings_option') ) { ?>
<div class="slider">
<div class="container">
<div class="row">
<?php

	$slider_choise = fw_get_db_settings_option('slider_choise');
	$slider_width = fw_get_db_settings_option('slider_width');
	$slider_height = fw_get_db_settings_option('slider_height');

	echo fw()->extensions->get('slider')->render_slider($slider_choise, array(
		'width' => $slider_width,
		'height' => $slider_height
	));
}
?>
</div>
</div>
</div>