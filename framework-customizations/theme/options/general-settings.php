<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'favicon' => array(
						'label' => __( 'Favicon', 'poc' ),
						'desc'  => __( 'Upload a favicon image', 'poc' ),
						'type'  => 'upload'
					),
					'layout' => array(
						'label'   => __( 'Layout', 'poc' ),
						'type'    => 'select',
						'show_borders' => false,
						'value'		=> __('wide', 'poc'),
						'choices' => array(
							'wide' 		=> __( 'Wide', 'poc' ),
							'boxed' 	=> __( 'Boxed', 'poc' ),
						),
						'desc'    => __( 'Select boxed or wide layout.', 'poc' ),
						'help'    => __( 'Select boxed or wide layout.', 'poc' ),
					),
					'site_width' => array(
						'type' => 'text',
						'label' => __('Site Width', 'poc'),
						'value' => '1170px',
						'desc'	=> __('Controls the overall site width. In px or %, ex: 100% or 1170px.', 'poc'),
						'help'	=> __('Controls the overall site width. In px or %, ex: 100% or 1170px.', 'poc'),
					),
					'link_color'	=> array(
						'label'	=>	'Link Color',
						'type'	=>	'rgba-color-picker',
						'value'	=>	'#0bc165',
						'desc'	=>	__('Change Link Color', 'poc'),
						'help'	=>	__('Change Link Color', 'poc'),
					),
					'link_hover'	=> array(
						'label'	=>	'Link Hover Color',
						'type'	=>	'rgba-color-picker',
						'value'	=>	'#06743d',
						'desc'	=>	__('Change Link Hover Color', 'poc'),
						'help'	=>	__('Change Link Hover Color', 'poc'),
					),
					'boxed_bg_color' => array(
						'label' => __( 'Boxed Background Color', 'poc' ),
						'type'  => 'rgba-color-picker',
						'value' => '',
						'desc'  => __( 'Controls the background color of the header.',
							'poc' ),
						'help'  => __( 'Controls the background color of the header.','poc'),
					),
					'boxed_bg_image'	=> array(
						'label' => __( 'Boxed Background Image', 'poc' ),
						'desc'  => __( 'Select an image',
							'poc' ),
						'type'  => 'upload',
						'help'  => __( 'Select an image',
							'poc' ),
					),
					'boxed_bg_size' => array(
						'label'   => __( 'Boxed Background Image size', 'poc' ),
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
					'boxed_bg_position' => array(
						'label'   => __( 'Boxed Background Image position', 'poc' ),
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
					'boxed_bg_repeat' => array(
					    'label'   => __('Boxed Background Repeat', 'poc'),
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