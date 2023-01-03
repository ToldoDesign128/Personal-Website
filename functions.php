<?php 

// Il mio stile e i miei scripts

function add_personal_scripts() {    
	wp_enqueue_style( 'personal-style', get_template_directory_uri() . '/style.min.css');
}
add_action( 'wp_enqueue_scripts', 'add_personal_scripts' );

?>