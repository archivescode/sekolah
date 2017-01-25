		<div class="container">
		<div class="row">

				<nav class="navbar navbar-default">

				<div class="container">

				<div class="row">

					<div class="col-sm-5">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				    	      	
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

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#poc-nav-collapse" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>

					</div>

				    </div>

				    <div class="col-sm-7">

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

