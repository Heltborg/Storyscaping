<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );
		
function child_enqueue_styles() {
wp_enqueue_style(
'parent-style',
get_template_directory_uri() . '/style.css',
array(),
wp_get_theme()->parent()->get( 'Version' )
);
		
wp_enqueue_style(
'child-style',
get_stylesheet_uri(),
array( 'parent-style' ),
wp_get_theme()->get( 'Version' )
);
}
