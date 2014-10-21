<?php

function lillyscript() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'uiHelper', get_template_directory_uri() . '/js/uihelper.js', array( 'jquery' ));
	wp_enqueue_script( 'lillybg', get_template_directory_uri() . '/js/background.js', array( 'jquery', 'uiHelper' ));
}
add_action( 'wp_enqueue_scripts', 'lillyscript' );


?>