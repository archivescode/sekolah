<?php if ( ! defined( 'FW' ) ) {	die( 'Forbidden' );}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'general-settings' ),
	fw()->theme->get_options( 'header' ),
	fw()->theme->get_options( 'typography' ),
	fw()->theme->get_options( 'color-scheme' ),
	fw()->theme->get_options( 'social-media' ),
	fw()->theme->get_options( 'footer' ),
);