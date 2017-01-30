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
					        'color'  => '#747474'
					    ),
					   'components' => array(
					        'family' => true,
					        'size'   => true,
					        'color'  => true
					    ),
					    'label' => __('General Typography', 'poc'),
					    'desc'  => __('General Typography', 'poc'),
					    'help'  => __('General Typography', 'poc'),
					),
					'desc_typography' => array(
					    'type'  => 'typography',
					    'value' => array(
					        'family' => 'Open Sans',
					        'size'   => 14,
					        'style'  => 'regular',
					        'color'  => '#747474'
					    ),
					   'components' => array(
					        'family' => true,
					        'size'   => true,
					        'color'  => true
					    ),
					    'label' => __('Blog Description Typography', 'poc'),
					    'desc'  => __('Blog Description Typography', 'poc'),
					    'help'  => __('Blog Description Typography', 'poc'),
					),
					'link_typography' => array(
					    'type'  => 'typography',
					    'value' => array(
					        'family' => 'Open Sans',
					        'size'   => 14,
					        'style'  => 'regular',
					    ),
					   'components' => array(
					        'family' => true,
					        'size'   => true,
					        'color'  => false
					    ),
					    'label' => __('Link Typography', 'poc'),
					    'desc'  => __('Link Typography', 'poc'),
					    'help'  => __('Link Typography', 'poc'),
					),
				)
			),
		)
	)
);	