<?php

function lillyscript() {
	wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery'));
}
add_action( 'wp_enqueue_scripts', 'lillyscript' );

?>