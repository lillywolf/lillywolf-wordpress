<?php

function lillyscript() {
	wp_enqueue_script(
	        'bg',
	        'http://lillywolf-wordpress.herokuapp.com/wp-content/themes/lillywolf/js/background.js',
	        array('jquery')
	    );
}
add_action( 'wp_enqueue_script', 'lillyscript' );

?>