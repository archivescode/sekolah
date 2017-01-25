<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'navigation' => array(
		'title'   => __( 'Menu', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'navigation-box' => array(
				'title'   => __( 'Menu Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'show_nav' => array(
						'label'        => __( 'Show Navigation', 'poc' ),
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
						'desc'         => __( 'Show Navigations', 'poc' ),
						'help'         => __( 'Show Navigations', 'poc' ),
					),
					'nav_height' => array(
						'label' => __( 'Navigation Height', 'poc' ),
						'type'  => 'text',
						'value' => '',
						'desc'  => __( 'Navigation Height ex:200px', 'poc' ),
						'help'  => __( 'Navigation Height ex:200px', 'poc' ),
					),
					'nav_position' => array(
					    'label'   => __('Navigation Position', 'poc'),
					    'desc'    => __('Navigation Position ex:Top, Bottom, Left, Right', 'poc'),
					    'type'    => 'select',
					    'choices' => array(
					        'bottom'	=> 'Bottom',
					        'right'		=> 'Right',
					        'left'		=> 'Left',
					    ),
					    'value'		=> __('right', 'poc'),
					    'help'	  	=> __('Navigation Position ex:Top, Bottom, Left, Right', 'poc'),
					),
					'nav_bg_color' => array(
						'label' => __( 'Navigation Background Color', 'poc' ),
						'type'  => 'rgba-color-picker',
						'value'	=>	'#0bc165',
						'desc'  => __( 'Controls the background color of the navigation background.',
							'poc' ),
						'help'  => __( 'Controls the background color the navigation background.','poc'),
					),
				)
			),
		)
	)
);	