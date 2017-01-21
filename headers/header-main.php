	<?php
	$column_logo = 'col-sm-4';
	$column_nav = 'col-sm-8';
	$top = 'false';
	$left = 'false';
	if ( function_exists('fw_get_db_settings_option')){
		if (!empty(fw_get_db_settings_option('nav_position'))){
			$nav_position = fw_get_db_settings_option('nav_position');
			if($nav_position == 'right'){
				$column_logo = 'col-sm-4';
				$column_nav = 'col-sm-8';
				$top = 'false';
				$left = 'false';
			}elseif ($nav_position == 'left') {
				$column_logo = 'col-sm-4';
				$column_nav = 'col-sm-8';
				$top = 'false';
				$left = 'true';
			}elseif ($nav_position == 'bottom') {
				$column_logo = 'col-sm-12';
				$column_nav = 'col-sm-12';
				$top = 'false';
				$left = 'false';
			}elseif ($nav_position == 'top') {
				$column_logo = 'col-sm-12';
				$column_nav = 'col-sm-12';
				$top = 'true';
				$left = 'false';
			}
		}
	}
	?>
	<?php
if ($top == 'true' || $left == 'true'){ ?>
	<div class="container">
		<div class="row">

			<div class="col-xs-12 <?php echo $column_nav ?>">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'poc' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			</div>

			<div class="col-xs-12 <?php echo $column_logo ?>">
			<div class="site-branding">
				<?php

				//Logo

				if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('logo')) ) {
					$logo = fw_get_db_settings_option('logo');
					echo '<div class="site-logo"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . $logo['url'] . '" /></a></div>';

				}else{

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					endif;
				}

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<div class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			</div>

		</div>
	</div>
<?php }else{ ?>

		<div class="container">
		<div class="row">
			<div class="col-xs-12 <?php echo $column_logo ?>">
			<div class="site-branding">
				<?php

				//Logo

				if ( function_exists('fw_get_db_settings_option') && !empty(fw_get_db_settings_option('logo')) ) {
					$logo = fw_get_db_settings_option('logo');
					echo '<div class="site-logo"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . $logo['url'] . '" /></a></div>';

				}else{

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;
				}

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<div class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			</div>

			<div class="col-xs-12 <?php echo $column_nav ?>">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'poc' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			</div>

		</div>
	</div>

<?php } ?>
