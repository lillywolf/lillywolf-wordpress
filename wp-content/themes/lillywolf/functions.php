<?php

function lillyscript() {
	wp_enqueue_script('background', get_template_directory_uri() . '/js/background.js', array( 'jquery'));
}
add_action( 'wp_enqueue_scripts', 'lillyscript' );

?>