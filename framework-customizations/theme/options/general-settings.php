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
					'sidebar' => array(
						'label'   => __( 'Sidebar Position', 'poc' ),
						'type'    => 'select',
						'show_borders' => false,
						'value'		=> __('right', 'poc'),
						'choices' => array(
							'right' 		=> __( 'Right', 'poc' ),
							'left' 			=> __( 'Left', 'poc' ),
							'left_right' 	=> __( 'Left Right', 'poc' ),
							'full' 			=> __( 'No Sidebar', 'poc' ),
						),
						'desc'    => __( 'Select sidebar layout.', 'poc' ),
						'help'    => __( 'Select sidebar layout.', 'poc' ),
					),
				)
			),
		)
	)
);	