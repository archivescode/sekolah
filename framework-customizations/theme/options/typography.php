<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}

$options = array(
	'typography' => array(
		'title'   => __( 'Typography', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'typography-box' => array(
				'title'   => __( 'Typography Setting', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'general_typography' => array(
					    'type' => 'typography-v2',
					    'value' => array(
					        'family' => 'Open Sans',
					        // For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
					        // 'style' => 'italic',
					        // 'weight' => 700,
					        'subset' => 'latin-ext',
					        'variation' => 'regular',
					        'size' => 14,
					        'line-height' => 13,
					        //'letter-spacing' => -2,
					        'color' => '#0000ff'
					    ),
					    'components' => array(
					        'family'         => true,
					        // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					        'size'           => true,
					        'line-height'    => true,
					        'letter-spacing' => false,
					        'color'          => true
					    ),
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('General Typography', 'poc'),
					    'desc'  => __('Description', 'poc'),
					    'help'  => __('Help tip', 'poc'),
					),
				)
			),
		)
	)
);	