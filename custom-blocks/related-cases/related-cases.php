<?php
/**
 * Block Name: Related Cases
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$posts = get_field('related_cases');

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'wp-container--related-cases';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

if($posts) :
        
        foreach($posts as $poste) :
            global $post;
         
            $post = $poste;
            
            setup_postdata($post);
            
            get_template_part('templates-parts/case', 'loop');
        
        endforeach;
        
        wp_reset_postdata(); 

endif; ?>