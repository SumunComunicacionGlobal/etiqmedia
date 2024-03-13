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

