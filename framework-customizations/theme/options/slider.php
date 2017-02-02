<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'slider' => array(
		'title'   => __( 'Slider', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'slider-box' => array(
				'title'   => __( 'Slider Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'slider_show' => array(
						'label'        => __( 'Display Slider', 'poc' ),
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
						'desc'         => __( 'Display Slider', 'poc' ),
						'help'         => __( 'Display Slider', 'poc' ),
					),
					'slider_choise' => array(
					    'label'   => __('Slider', 'poc'),
					    'desc'    => __('Slider Choise', 'poc'),
					    'value'		=> '',
					    'type'    => 'select',
					    'choices' => fw()->extensions->get('slider')->get_populated_sliders_choices(),
					    'help'	  => __('Slider Choice', 'poc'),
					),
					'slider_width' => array(
						'type' => 'text',
						'label' => __('Slider Width', 'poc'),
						'value' => '1170',
						'desc'	=> __('Controls the Slider width. In px, ex: 100% or 1170.', 'poc'),
						'help'	=> __('Controls the Slider width. In px, ex: 100% or 1170.', 'poc'),
					),
					'slider_height' => array(
						'type' => 'text',
						'label' => __('Slider Height', 'poc'),
						'value' => '500',
						'desc'	=> __('Controls the slider Height. In px or %, ex: 100% or 700px.', 'poc'),
						'help'	=> __('Controls the slider Height. In px or %, ex: 100% or 700px.', 'poc'),
					),
				)
			),
		)
	)
);	