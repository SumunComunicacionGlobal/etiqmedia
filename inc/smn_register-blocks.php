<?php
/**
 * Register ACF Blocks
 *
 * @link https://www.advancedcustomfields.com/resources/acf_register_block_type/
 *
 * @return void
 */


function smn_register_blocks() {
    register_block_type( get_stylesheet_directory() . '/custom-blocks/marquee' );
    register_block_type( get_stylesheet_directory() . '/custom-blocks/fadetext' );
    register_block_type( get_stylesheet_directory() . '/custom-blocks/card-collapsed' );
    register_block_type( get_stylesheet_directory() . '/custom-blocks/related-cases' );
}

add_action( 'init', 'smn_register_blocks' );

/**
 * Register custom blocks script
 */
function smn_register_block_script() {
    wp_register_script( 'slider', get_template_directory_uri() . '/custom-blocks/fadetext/slick.min.js', [ 'jquery', 'acf' ] );
    wp_register_script( 'marquee', get_template_directory_uri() . '/custom-blocks/marquee/marquee.js', [ 'jquery', 'acf' ] );
    wp_register_script( 'card-collapsed', get_template_directory_uri() . '/custom-blocks/card-collapsed/card-collapsed.js', [ 'jquery', 'acf' ], false, true );
    
}
 add_action( 'init', 'smn_register_block_script' );