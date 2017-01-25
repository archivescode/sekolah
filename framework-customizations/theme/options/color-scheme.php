<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}
$options = array(
	'color-scheme' => array(
		'title'   => __( 'Color Scheme', 'poc' ),
		'type'    => 'tab',
		'options' => array(
			'color-box' => array(
				'title'   => __( 'Color Settings', 'poc' ),
				'type'    => 'box',
				'options' => array(
					'colorScheme' => array(
					    'type'  => 'multi-picker',
					    'label' => false,
					    'desc'  => false,
					    'value' => array(
					        'type_color' => 'all',
					        'laptop' => array(
					            'price' => '123',
					            'webcam' => false
					        ),
					        'phone' => array(
					            'price' => '456',
					            'memory' => '32'
					        )
					    ),
					    'picker' => array(
					        'type_color' => array(
					            'label' => __('Type Color Scheme', 'poc'),
					            'type'  => 'switch',
					            'right-choice' => array(
					                'value' => 'all',
					                'label' => __('All', 'poc')
					            ),
					            'left-choice' => array(
					                'value' => 'custom',
					                'label' => __('Custom', 'poc')
					            ),
					            'desc' => __('Description', 'poc'),
					            'help' => __('Help tip', 'poc'),
					            'value'=> __('all', 'poc'),
					        )
					    ),
					    'choices' => array(
					        'all' => array(
					        	'all_color'	=> array(
									'label'	=>	'Color Scheme',
									'type'	=>	'rgba-color-picker',
									'value'	=>	'#0bc165',
									'desc'	=>	__('Controls All Colors', 'poc'),
									'help'	=>	__('Controls All Colors', 'poc'),
								),
								'link_hover_all'	=> array(
									'label'	=>	'Link Hover Color',
									'type'	=>	'rgba-color-picker',
									'value'	=>	'#06743d',
									'desc'	=>	__('Change Link Hover Color', 'poc'),
									'help'	=>	__('Change Link Hover Color', 'poc'),
								),
					        ),
					        'custom' => array(
					            'header_top_border_top_color'	=> array(
									'label'	=>	'Header Top Border Color',
									'type'	=>	'rgba-color-picker',
									'value'	=>	'#0bc165',
									'desc'	=>	__('Change Header Top Border Color', 'poc'),
									'help'	=>	__('Change Header Top Border Color', 'poc'),
								),
								'link_color'	=> array(
									'label'	=>	'Link Color',
									'type'	=>	'rgba-color-picker',
									'value'	=>	'#0bc165',
									'desc'	=>	__('Change Link Color', 'poc'),
									'help'	=>	__('Change Link Color', 'poc'),
								),
								'link_hover'	=> array(
									'label'	=>	'Link Hover Color',
									'type'	=>	'rgba-color-picker',
									'value'	=>	'#06743d',
									'desc'	=>	__('Change Link Hover Color', 'poc'),
									'help'	=>	__('Change Link Hover Color', 'poc'),
								),
					        ),
					    ),
					    'show_borders' => true,
					),
				)
			),
		)
	)
);	