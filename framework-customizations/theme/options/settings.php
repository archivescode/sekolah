<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'general-settings' ),
	fw()->theme->get_options( 'header' ),
	fw()->theme->get_options( 'navigation' ),
	fw()->theme->get_options( 'slider' ),
	fw()->theme->get_options( 'content' ),
	fw()->theme->get_options( 'sidebar' ),
	fw()->theme->get_options( 'footer' ),
	fw()->theme->get_options( 'typography' ),
	fw()->theme->get_options( 'social-media' ),	
);