<?php

function add_my_script() {
    // wp_enqueue_script(
    //     'uiHelper', // name your script so that you can attach other scripts and de-register, etc.
    //     get_template_directory_uri() . '/js/uihelper.js', // this is the location of your script file
    //     array('jquery') // this array lists the scripts upon which your script depends
    // );
	wp_register_script(
        'bg',
        get_template_directory_uri() . '/js/background.js',
        array('jquery')
    );
	wp_enqueue_script('bg');
}

add_action( 'wp_enqueue_scripts', 'add_my_script' );

?>