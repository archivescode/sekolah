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
					    'type'  => 'typography',
					    'value' => array(
					        'family' => 'Open Sans',
					        'size'   => 14,
					        'style'  => 'regular',
					        'color'  => '#000000'
					    ),
					   'components' => array(
					        'family' => true,
					        'size'   => true,
					        'color'  => true
					    ),
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('Label', 'poc'),
					    'desc'  => __('Description', 'poc'),
					    'help'  => __('Help tip', 'poc'),
					),
				)
			),
		)
	)
);	