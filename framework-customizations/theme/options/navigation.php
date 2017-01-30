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
					        'right'		=> 'Right'
					    ),
					    'value'		=> __('right', 'poc'),
					    'help'	  	=> __('Navigation Position ex:Top, Bottom, Left, Right', 'poc'),
					),
					'nav_bg_color' => array(
						'label' => __( 'Navigation Background Color', 'poc' ),
						'type'  => 'rgba-color-picker',
						'value'	=>	'',
						'desc'  => __( 'Controls the background color of the navigation background.',
							'poc' ),
						'help'  => __( 'Controls the background color the navigation background.','poc'),
					),
					'nav_typography' => array(
					    'type'  => 'typography',
					    'value' => array(
					        'family' => 'Open Sans',
					        'size'   => 14,
					        'style'  => '600',
					        'color'	 => ''
					    ),
					   'components' => array(
					        'family' => true,
					        'size'   => true,
					        'color'  => true
					    ),
					    'label' => __('Navigation Typography', 'poc'),
					    'desc'  => __('Navigation Typography', 'poc'),
					    'help'  => __('Navigation Typography', 'poc'),
					),
					'nav_hover' => array(
						'label' => __( 'Hover Menu Color', 'poc' ),
						'type'  => 'rgba-color-picker',
						'value'	=>	'',
						'desc'  => __( 'Hover Menu Color', 'poc' ),
						'help'  => __( 'Hover Menu Color','poc'),
					),
				)
			),
		)
	)
);	