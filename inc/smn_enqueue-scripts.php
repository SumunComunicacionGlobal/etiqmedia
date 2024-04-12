<?php
/**
 * Enqueue scripts and styles.
 */

 function smn_scripts() {

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'etiqmedia-js', get_template_directory_uri() . '/assets/js/etiqmedia.js', array(), true );

	// Localiza el script para pasar la URL de AJAX
    wp_localize_script('etiqmedia-js', 'my_script_vars', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
		'sectores_nonce' => wp_create_nonce('sectores_nonce')
    ));

}
add_action( 'wp_enqueue_scripts', 'smn_scripts' );

/** 
* Gutenberg scripts and styles
*/
function smn_gutenberg_scripts() {

	wp_enqueue_script(
		'be-editor', 
		get_stylesheet_directory_uri() . '/assets/js/editor.js', 
		array( 'wp-blocks', 'wp-dom', 'wp-dom-ready', 'wp-edit-post' ), 
		filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'smn_gutenberg_scripts' );


/**
 * GSAP script in WordPress
*/
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

