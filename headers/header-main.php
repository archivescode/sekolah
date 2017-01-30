<?php 
if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('nav_position')) ) {
	$nav_position = fw_get_db_settings_option('nav_position');

	$column_logo = 'col-sm-4';
	$column_nav = 'col-sm-8 nav_main';

	if ($nav_position == 'right') {
		$column_logo = 'col-sm-4';
		$column_nav = 'col-sm-8 nav_main';
	} elseif ($nav_position == 'bottom') {
		$column_logo = 'col-sm-12';
		$column_nav = 'col-sm-12 nav_main';
	}
	
}
?>
<div class="container">
<div class="row">

		<nav class="navbar navbar-default">

		<div class="container">

		<div class="row">

			<div class="<?php echo $column_logo; ?>">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		    	      	
			    <?php

				//Logo

				if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('logo')) ) {
					$logo = fw_get_db_settings_option('logo');

					echo '<div class="site-logo"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . $logo['url'] . '" /></a></div>';

				}else{

					echo '<div class="site-logo"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . get_template_directory_uri() . '/images/logo.png" /></a></div>';
				}

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<div class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
					<?php
					endif; ?>

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#poc-nav-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>

			</div>

		    </div>

		    <div class="<?php echo $column_nav; ?>">

		    <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="poc-nav-collapse">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>

			</div>

		</div><!--row-->

		</div> <!--container-->

		</nav>

</div>
</div>

