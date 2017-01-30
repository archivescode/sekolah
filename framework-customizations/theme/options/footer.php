<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'footer' => array(
		'title'   => __( 'Footer', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'footer-box' => array(
				'title'   => __( 'Footer Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'footer_show' => array(
						'label'        => __( 'Display Footer', 'poc' ),
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
						'desc'         => __( 'Display Footer', 'poc' ),
						'help'         => __( 'Display Footer', 'poc' ),
					),
					'footer_column' => array(
					    'label'   => __('Footer Column', 'poc'),
					    'desc'    => __('Footer Column', 'poc'),
					    'value'		=> '3',
					    'type'    => 'select',
					    'choices' => array(
					        '1'	=> '1',
					        '2'	=> '2',
					        '3'	=> '3',
					        '4'	=> '4',
					    ),
					    'help'	  => __('Footer Column', 'poc'),
					),
					'footer_bg_color' => array(
						'label' => __( 'Background Color', 'poc' ),
						'type'  => 'rgba-color-picker',
						'value' => '',
						'desc'  => __( 'Controls the background color',
							'poc' ),
						'help'  => __( 'Controls the background color','poc'),
					),
					'footer_bg_image'	=> array(
						'label' => __( 'Background Image', 'poc' ),
						'desc'  => __( 'Select an image',
							'poc' ),
						'type'  => 'upload',
						'help'  => __( 'Select an image',
							'poc' ),
					),
					'footer_bg_size' => array(
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
					'footer_bg_position' => array(
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
					'footer_bg_repeat' => array(
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