<?php

function add_my_script() {
    // wp_enqueue_script(
    //     'uiHelper', // name your script so that you can attach other scripts and de-register, etc.
    //     get_template_directory_uri() . '/js/uihelper.js', // this is the location of your script file
    //     array('jquery') // this array lists the scripts upon which your script depends
    // );
	if ( ! isset( $content_width ) ) {
		$content_width = 200;
	}
	// wp_enqueue_script(
	//         'bg',
	//         'http://lillywolf-wordpress.herokuapp.com/wp-content/themes/lillywolf/js/background.js',
	//         array('jquery')
	//     );
	
}

// wp_enqueue_script( 'jquery' );
add_action( 'wp_enqueue_scripts', 'add_my_script' );

?>