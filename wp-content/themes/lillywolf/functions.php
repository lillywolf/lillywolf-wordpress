<?php

function favicon_link() {
    echo 'I am a gizzy';
}
add_action( 'after_setup_theme', 'favicon_link' );

?>