<?php

if ( function_exists('fw_get_db_settings_option') ) {
	$header_top_show = fw_get_db_settings_option('show_header_top');

	if ($header_top_show == 'yes'){

?>
<div class="container">
	<div class="row">

		<div class="header-top-left">
			<div class="col-sm-6">
				<?php 
				$header_top_left_content = fw_get_db_settings_option('header_top_left_content'); 
				if ($header_top_left_content == 'social_links') {

				?>
					<div class="social-links">
				<?php
					$header_social_links = fw_get_db_settings_option('social_show'); 

					foreach ($header_social_links as $header_social_link) {
						//echo $header_social_link;
					   if ($header_social_link == 'facebook'){
					    	echo '<a href="'. fw_get_db_settings_option('facebook_link') .'" target="_blank"><i class="fa fa-facebook"></i></a>';
					    } elseif ($header_social_link == 'twitter') {
					    	echo '<a href="'. fw_get_db_settings_option('twitter_link') .'" target="_blank"><i class="fa fa-twitter"></i></a>';
					    } elseif ($header_social_link == 'google-plus') {
					    	echo '<a href="'. fw_get_db_settings_option('google_plus_link') .'" target="_blank"><i class="fa fa-google-plus"></i></a>';
					    } elseif ($header_social_link == 'flickr') {
					    	echo '<a href="'. fw_get_db_settings_option('flickr_link') .'" target="_blank"><i class="fa fa-flickr"></i></a>';
					    } elseif ($header_social_link == 'instagram') {
					    	echo '<a href="'. fw_get_db_settings_option('instagram_link') .'" target="_blank"><i class="fa fa-instagram"></i></a>';
					    } elseif ($header_social_link == 'vimeo') {
					    	echo '<a href="'. fw_get_db_settings_option('vimeo_link') .'" target="_blank"><i class="fa fa-vimeo"></i></a>';
					    } elseif ($header_social_link == 'youtube') {
					    	echo '<a href="'. fw_get_db_settings_option('youtube_link') .'" target="_blank"><i class="fa fa-youtube"></i></a>';
					    } elseif ($header_social_link == 'pinterest') {
					    	echo '<a href="'. fw_get_db_settings_option('pinterest_link') .'" target="_blank"><i class="fa fa-pinterest"></i></a>';
					    } elseif ($header_social_link == 'tumblr') {
					    	echo '<a href="'. fw_get_db_settings_option('tumblr_link') .'" target="_blank"><i class="fa fa-tumblr"></i></a>';
					    } elseif ($header_social_link == 'dribbble') {
					    	echo '<a href="'. fw_get_db_settings_option('dribble_link') .'" target="_blank"><i class="fa fa-dribbble"></i></a>';
					    } elseif ($header_social_link == 'digg') {
					    	echo '<a href="'. fw_get_db_settings_option('digg_link') .'" target="_blank"><i class="fa fa-digg"></i></a>';
					    } elseif ($header_social_link == 'linkedin') {
					    	echo '<a href="'. fw_get_db_settings_option('linkedin_link') .'" target="_blank"><i class="fa fa-linkedin"></i></a>';
					    } elseif ($header_social_link == 'skype') {
					    	echo '<a href="'. fw_get_db_settings_option('skype_link') .'" target="_blank"><i class="fa fa-skype"></i></a>';
					    } elseif ($header_social_link == 'deviantart') {
					    	echo '<a href="'. fw_get_db_settings_option('deviantart_link') .'" target="_blank"><i class="fa fa-deviantart"></i></a>';
					    } elseif ($header_social_link == 'yahoo') {
					    	echo '<a href="'. fw_get_db_settings_option('yahoo_link') .'" target="_blank"><i class="fa fa-yahoo"></i></a>';
					    } elseif ($header_social_link == 'reddit') {
					    	echo '<a href="'. fw_get_db_settings_option('reddit_link') .'" target="_blank"><i class="fa fa-reddit"></i></a>';
					    } elseif ($header_social_link == 'paypal') {
					    	echo '<a href="'. fw_get_db_settings_option('paypal_link') .'" target="_blank"><i class="fa fa-cc-paypal"></i></a>';
					    } elseif ($header_social_link == 'dropbox') {
					    	echo '<a href="'. fw_get_db_settings_option('dropbox_link') .'" target="_blank"><i class="fa fa-dropbox"></i></a>';
					    } elseif ($header_social_link == 'soundcloud') {
					    	echo '<a href="'. fw_get_db_settings_option('soundcloud_link') .'" target="_blank"><i class="fa fa-soundcloud"></i></a>';
					    } elseif ($header_social_link == 'email') {
					    	echo '<a href="mailto:'. fw_get_db_settings_option('email_link') .'" target="_blank"><i class="fa fa-envelope"></i></a>';
					    } elseif ($header_social_link == 'rss') {
					    	echo '<a href="'. fw_get_db_settings_option('rss_link') .'" target="_blank"><i class="fa fa-rss"></i></a>';
					    }
					}
				?>
					</div>
				<?php

				} elseif ($header_top_left_content == 'navigation') { ?>

					<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'top-menu','items_wrap' => '<ul class="ul-top-menu">%3$s' ) ); ?>

				<?php } elseif ($header_top_left_content == 'contact_info') { ?>
					<div class="contact-info-top">
						<a href="#" class="phone-num">
							<span class="fa fa-phone"></span>
							<?php echo fw_get_db_settings_option('contact_info_content') ?>
						</a>

						<a class="email-top" href="mailto:<?php echo fw_get_db_settings_option('contact_info_email'); ?>">
							<span class="fa fa-envelope"></span>				
							<?php echo fw_get_db_settings_option('contact_info_email'); ?>
						</a>
						
					</div>
				<?php
				}
				
				//fw_print($header_top_on['header_top_right_content']);

				?>
			</div><!--.col-sm-6-->
		</div><!--.header-top-left-->

		<div class="header-top-right">
			<div class="col-sm-6">
			<?php 
				$header_top_right_content = fw_get_db_settings_option('header_top_right_content'); 
				if ($header_top_right_content == 'social_links') {

				?>
					<div class="social-links">
				<?php
					$header_social_links = fw_get_db_settings_option('social_show');

					foreach ($header_social_links as $header_social_link) {
						//echo $header_social_link;
					   if ($header_social_link == 'facebook'){
					    	echo '<a href="'. fw_get_db_settings_option('facebook_link') .'" target="_blank"><i class="fa fa-facebook"></i></a>';
					    } elseif ($header_social_link == 'twitter') {
					    	echo '<a href="'. fw_get_db_settings_option('twitter_link') .'" target="_blank"><i class="fa fa-twitter"></i></a>';
					    } elseif ($header_social_link == 'google-plus') {
					    	echo '<a href="'. fw_get_db_settings_option('google_plus_link') .'" target="_blank"><i class="fa fa-google-plus"></i></a>';
					    } elseif ($header_social_link == 'flickr') {
					    	echo '<a href="'. fw_get_db_settings_option('flickr_link') .'" target="_blank"><i class="fa fa-flickr"></i></a>';
					    } elseif ($header_social_link == 'instagram') {
					    	echo '<a href="'. fw_get_db_settings_option('instagram_link') .'" target="_blank"><i class="fa fa-instagram"></i></a>';
					    } elseif ($header_social_link == 'vimeo') {
					    	echo '<a href="'. fw_get_db_settings_option('vimeo_link') .'" target="_blank"><i class="fa fa-vimeo"></i></a>';
					    } elseif ($header_social_link == 'youtube') {
					    	echo '<a href="'. fw_get_db_settings_option('youtube_link') .'" target="_blank"><i class="fa fa-youtube"></i></a>';
					    } elseif ($header_social_link == 'pinterest') {
					    	echo '<a href="'. fw_get_db_settings_option('pinterest_link') .'" target="_blank"><i class="fa fa-pinterest"></i></a>';
					    } elseif ($header_social_link == 'tumblr') {
					    	echo '<a href="'. fw_get_db_settings_option('tumblr_link') .'" target="_blank"><i class="fa fa-tumblr"></i></a>';
					    } elseif ($header_social_link == 'dribbble') {
					    	echo '<a href="'. fw_get_db_settings_option('dribble_link') .'" target="_blank"><i class="fa fa-dribbble"></i></a>';
					    } elseif ($header_social_link == 'digg') {
					    	echo '<a href="'. fw_get_db_settings_option('digg_link') .'" target="_blank"><i class="fa fa-digg"></i></a>';
					    } elseif ($header_social_link == 'linkedin') {
					    	echo '<a href="'. fw_get_db_settings_option('linkedin_link') .'" target="_blank"><i class="fa fa-linkedin"></i></a>';
					    } elseif ($header_social_link == 'skype') {
					    	echo '<a href="'. fw_get_db_settings_option('skype_link') .'" target="_blank"><i class="fa fa-skype"></i></a>';
					    } elseif ($header_social_link == 'deviantart') {
					    	echo '<a href="'. fw_get_db_settings_option('deviantart_link') .'" target="_blank"><i class="fa fa-deviantart"></i></a>';
					    } elseif ($header_social_link == 'yahoo') {
					    	echo '<a href="'. fw_get_db_settings_option('yahoo_link') .'" target="_blank"><i class="fa fa-yahoo"></i></a>';
					    } elseif ($header_social_link == 'reddit') {
					    	echo '<a href="'. fw_get_db_settings_option('reddit_link') .'" target="_blank"><i class="fa fa-reddit"></i></a>';
					    } elseif ($header_social_link == 'paypal') {
					    	echo '<a href="'. fw_get_db_settings_option('paypal_link') .'" target="_blank"><i class="fa fa-cc-paypal"></i></a>';
					    } elseif ($header_social_link == 'dropbox') {
					    	echo '<a href="'. fw_get_db_settings_option('dropbox_link') .'" target="_blank"><i class="fa fa-dropbox"></i></a>';
					    } elseif ($header_social_link == 'soundcloud') {
					    	echo '<a href="'. fw_get_db_settings_option('soundcloud_link') .'" target="_blank"><i class="fa fa-soundcloud"></i></a>';
					    } elseif ($header_social_link == 'email') {
					    	echo '<a href="mailto:'. fw_get_db_settings_option('email_link') .'" target="_blank"><i class="fa fa-envelope"></i></a>';
					    } elseif ($header_social_link == 'rss') {
					    	echo '<a href="'. fw_get_db_settings_option('rss_link') .'" target="_blank"><i class="fa fa-rss"></i></a>';
					    }
					}
				?>
					</div>
				<?php

				} elseif ($header_top_right_content == 'navigation') { ?>

					<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'top-menu','items_wrap' => '<ul class="ul-top-menu">%3$s' ) ); ?>

				<?php } elseif ($header_top_right_content == 'contact_info') { ?>
					<div class="contact-info-top">
						<a href="#" class="phone-num">
							<span class="fa fa-phone"></span>
							<?php echo fw_get_db_settings_option('contact_info_content') ?>
						</a>

						<a class="email-top" href="mailto:<?php echo fw_get_db_settings_option('contact_info_email'); ?>">
							<span class="fa fa-envelope"></span>				
							<?php echo fw_get_db_settings_option('contact_info_email'); ?>
						</a>
						
					</div>
				<?php
				}
				
				//fw_print($header_top_on['header_top_right_content']);

				?>
			</div><!--.col-sm-6-->
		</div><!--.header-top-right-->

	</div><!--.row-->
</div><!--.container-->
<?php } //end if ($header_top_show == 'yes') ?>
<?php } //end if ( function_exists('fw_get_db_settings_option') )   ?>