<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'sidebar-tab' => array(
		'title'   => __( 'Sidebar', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'sidebar-box' => array(
				'title'   => __( 'Sidebar Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'sidebar' => array(
						'label'   => __( 'Sidebar Position', 'poc' ),
						'type'    => 'select',
						'show_borders' => false,
						'value'		=> __('left_right', 'poc'),
						'choices' => array(
							'right' 		=> __( 'Right', 'poc' ),
							'left' 			=> __( 'Left', 'poc' ),
							'left_right' 	=> __( 'Left Right', 'poc' ),
							'full' 			=> __( 'No Sidebar', 'poc' ),
						),
						'desc'    => __( 'Select sidebar layout.', 'poc' ),
						'help'    => __( 'Select sidebar layout.', 'poc' ),
					),
					'sidebar_style' => array(
						'label'   => __( 'Sidebar Header Style', 'poc' ),
						'type'    => 'select',
						'show_borders' => false,
						'value'		=> __('flat_background', 'poc'),
						'choices' => array(
							'flat_background' 		=> __( 'Flat Background', 'poc' ),
							'radius_border' 	=> __( 'Radius Border', 'poc' ),
							'top_border' 	=> __( 'Top Border', 'poc' ),
						),
						'desc'    => __( 'Select header style.', 'poc' ),
						'help'    => __( 'Select header style.', 'poc' ),
					),
					'style_color'	=> array(
						'label'	=>	'Style Color',
						'type'	=>	'rgba-color-picker',
						'value'	=>	'#0bc165',
						'desc'	=>	__('Change Style Color', 'poc'),
						'help'	=>	__('Change Style Color', 'poc'),
					),
					'header_color'	=> array(
						'label'	=>	'Header Color',
						'type'	=>	'rgba-color-picker',
						'value'	=>	'#06743d',
						'desc'	=>	__('Change Header Color', 'poc'),
						'help'	=>	__('Change Header Color', 'poc'),
					),
				)
			),
		)
	)
);	