<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'header' => array(
		'title'   => __( 'Header', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'header-top-box' => array(
				'title'   => __( 'Header Top Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'show_header_top' => array(
						'label'        => __( 'Show Header Top', 'poc' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'poc' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'poc' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Show Header Top', 'poc' ),
						'help'         => __( 'Show Header top', 'poc' ),
					),
					'header_top_style'	=> array(
						'type'		=>	'group',
						'options'	=>	array(
							'header_top_background'	=> array(
								'label'	=>	'Header Top Background Color',
								'type'	=>	'color-picker',
								'value'	=>	'#ffffff',
								'desc'	=>	__('Change Header Top Background Color', 'poc'),
								'help'	=>	__('Change Header Top Background Color', 'poc'),
							),
						),
					),
					'header_top_left_content' => array(
						'type'    => 'select',
						'label'   => __( 'Left Content', 'poc' ),
						'choices' => array(
							'social_links'	=> __( 'Social Media', 'poc' ),
							'navigation' 	=> __( 'Navigation', 'poc' ),
							'contact_info' 	=> __( 'Contact Info', 'poc' ),
							'empty' 		=> __( 'Leave Empty', 'poc' ),
						),
						'value' => 'contact_info',
					),
					'header_top_right_content' => array(
						'type'    => 'select',
						'label'   => __( 'Right Content', 'poc' ),
						'choices' => array(
							'social_links'	=> __( 'Social Media', 'poc' ),
							'navigation' 	=> __( 'Navigation', 'poc' ),
							'contact_info' 	=> __( 'Contact Info', 'poc' ),
							'empty' 		=> __( 'Leave Empty', 'poc' ),
						),
						'value'	=> 'social_links',
					),
					'contact_info_group' => array(
						'type'    => 'group',
						'options' => array(
							'contact_info_content'	=> array(
								'label' => __( 'Contact Info Content', 'poc' ),
								'type'  => 'textarea',
								'value' => '+62274.555.555',
								'desc'  => __( 'Contact Info Content', 'poc' ),
							),
							'contact_info_email' => array(
								'label' => __( 'Contact Info Email', 'poc' ),
								'type'  => 'text',
								'value' => 'example@gmail.com',
								'desc'  => __( 'Contact Info Email', 'poc' ),
							),
						),
					),
					'social_show' => array(
						'label'  => __( 'Add Social Media', 'poc' ),
						'type'   => 'addable-option',
						'option' => array(
							'type'    => 'select',
							'label'   => __( 'Social Media', 'poc' ),
							'choices' => array(
								'facebook'		=> __( 'Facebook', 'poc' ),
								'twitter'		=> __( 'Twitter', 'poc' ),
								'google-plus'	=> __( 'Google Plus', 'poc' ),
								'flickr'		=> __( 'Flickr', 'poc' ),
								'instagram'		=> __( 'Instagram', 'poc' ),
								'vimeo'			=> __( 'Vimeo', 'poc' ),
								'youtube'		=> __( 'Youtube', 'poc' ),
								'pinterest'		=> __( 'Pinterest', 'poc' ),
								'tumblr'		=> __( 'Tumblr', 'poc' ),
								'digg'			=> __( 'Digg', 'poc' ),
								'linkedin'		=> __( 'Linkedin', 'poc' ),
								'skype'			=> __( 'Skype', 'poc' ),
								'deviantart'	=> __( 'Deviantart', 'poc' ),
								'yahoo'			=> __( 'Yahoo', 'poc' ),
								'reddit'		=> __( 'Reddit', 'poc' ),
								'paypal'		=> __( 'Paypal', 'poc' ),
								'dropbox'		=> __( 'Dropbox', 'poc' ),
								'soundcloud'	=> __( 'Soundcloud', 'poc' ),
								'email'			=> __( 'Email Address', 'poc' ),
								'rss'			=> __( 'Rss', 'poc' ),
							)
						),
						'value'  => array( 'facebook', 'twitter', 'google-plus' ),
						'desc'   => __( 'Add Social Media on header Top', 'poc' ),
						'help'   => __( 'Add Social Media on header Top', 'poc' ),
					),
					'social_media_style' => array(
						'type'    => 'select',
						'label'   => __( 'Social Media Style', 'poc' ),
						'choices' => array(
							'circle'		=> __( 'Circle', 'poc' ),
							'rounded' 		=> __( 'Rounded', 'poc' ),
							'flat' 			=> __( 'Flat', 'poc' ),
							'no_background'	=> __( 'No Background', 'poc' ),
						),
						'value'	=> 'circle',
					),
				)
			),
			'header-box' => array(
				'title'   => __( 'Header Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'logo' => array(
						'label' => __( 'Logo', 'poc' ),
						'desc'  => __( 'Upload a logo image', 'poc' ),
						'type'  => 'upload'
					),
					'logo_height' => array(
						'label' => __( 'Logo width', 'poc' ),
						'type'  => 'text',
						'value' => '300px',
						'desc'  => __( 'Logo width ex:200px', 'poc' ),
						'help'  => __( 'Logo width ex:200px', 'poc' ),
					),
					'logo_height' => array(
						'label' => __( 'Logo Height', 'poc' ),
						'type'  => 'text',
						'value' => '',
						'desc'  => __( 'Logo Height ex:200px', 'poc' ),
						'help'  => __( 'Logo Height ex:200px', 'poc' ),
					),
					'show_description' => array(
						'label'        => __( 'Show Blog Description', 'poc' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'poc' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'poc' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Show Blog Description', 'poc' ),
						'help'         => __( 'FShow Blog Description', 'poc' ),
					),
					'header_bg_color' => array(
						'label' => __( 'Background Color', 'poc' ),
						'type'  => 'rgba-color-picker',
						'value' => '',
						'desc'  => __( 'Controls the background color of the header.',
							'poc' ),
						'help'  => __( 'Controls the background color of the header.','poc'),
					),
					'header_bg_image'	=> array(
						'label' => __( 'Background Image for header', 'poc' ),
						'desc'  => __( 'Select an image to use for header.',
							'poc' ),
						'type'  => 'upload',
						'help'  => __( 'Select an image to use for header.',
							'poc' ),
					),
					'header_bg_size' => array(
						'label'   => __( 'Background Image size', 'poc' ),
						'type'    => 'select',
						'show_borders' => false,
						'value'		=> __('contain', 'poc'),
						'choices' => array(
							'contain' 		=> __( 'Contain', 'poc' ),
							'cover' 	=> __( 'Cover', 'poc' ),
						),
						'desc'    => __( 'Background Image size.', 'poc' ),
						'help'    => __( 'Background Image size.', 'poc' ),
					),
					'header_bg_position' => array(
						'label'   => __( 'Background Image position', 'poc' ),
						'type'    => 'select',
						'show_borders' => false,
						'value'		=> __('left-top', 'poc'),
						'choices' => array(
							'left-top'			=> 'left top',
							'left-center'		=> 'left center',
							'left-bottom'		=> 'left bottom',
							'right-top'			=> 'right top',
							'right-center'		=> 'right center',
							'right-bottom'		=> 'right bottom',
							'center-top'		=> 'center top',
							'center-center'		=> 'center center',
							'center-bottom'		=> 'center bottom',
						),
						'desc'    => __( 'Background Image position.', 'poc' ),
						'help'    => __( 'Background Image position.', 'poc' ),
					),
					'header_bg_repeat' => array(
					    'label'   => __('Background Repeat', 'poc'),
					    'desc'    => __('Select how the background image repeats', 'poc'),
					    'type'    => 'select',
					    'choices' => array(
					        'repeat'	=> 'Tile',
					        'repeat-x'	=> 'Tile Horizontally',
					        'repeat-y'	=> 'Tile Vertically',
					        'no-repeat'	=> 'No Repeat',
					    ),
					    'help'	  => __('Select how the background image repeats', 'poc'),
					),
				)
			),
		)
	)
);	
