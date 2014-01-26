<?php

/*
  Plugin Name: My mce buttons
 */

function my_mce_buttons( $buttons ) {

	$buttons[]	 = 'fontsizeselect';
	$buttons[]	 = 'hr';
	$buttons[]	 = 'styleselect';
	$buttons[]	 = 'backcolor';
	$buttons[]	 = 'fontselect';
	$buttons[]	 = 'anchor';

	return $buttons;
}

add_filter( 'mce_buttons_3', 'my_mce_buttons' );
