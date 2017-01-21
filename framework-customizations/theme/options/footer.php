<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'footer' => array(
		'title'   => __( 'Footer Settings', 'poc' ),
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
						'value'        => 'no',
						'desc'         => __( 'Display Footer', 'poc' ),
						'help'         => __( 'Display Footer', 'poc' ),
					),
					'footer_column' => array(
					    'label'   => __('Footer Column', 'poc'),
					    'desc'    => __('Footer Column', 'poc'),
					    'type'    => 'select',
					    'choices' => array(
					        '1'	=> '1',
					        '2'	=> '2',
					        '3'	=> '3',
					        '4'	=> '4',
					    ),
					    'help'	  => __('Footer Column', 'poc'),
					),
				)
			),
		)
	)
);	