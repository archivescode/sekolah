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
				)
			),
		)
	)
);	