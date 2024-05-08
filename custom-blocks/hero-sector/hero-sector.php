<?php

/**
 * Hero Sector Block.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Support custom id values.
$block_id = '';
if ( ! empty( $block['anchor'] ) ) {
    $block_id = esc_attr( $block['anchor'] );
}

// Create class attribute allowing for custom "className".
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

// get the current taxonomy term
$term = get_queried_object();

// vars
$url_cover = get_field('sector_img_cover', $term);

?>

<div class="wp-block-cover alignfull is-light is-style-cover-contain-background has-background-color has-text-color" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:70vh">
    <span aria-hidden="true" class="wp-block-cover__background has-neutral-80-background-color has-background-dim-60 has-background-dim"></span>
    <!-- <video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_html($url_cover); ?>" style="object-position:100% 50%" data-object-fit="cover" data-object-position="100% 50%"></video> -->
    <img width="1200" height="1200" class="wp-block-cover__image-background wp-image-1041" alt="" src="<?php echo esc_html($url_cover); ?>" style="object-position:100% 50%" data-object-fit="cover" data-object-position="100% 50%">
    
    <div class="wp-block-cover__inner-container wp-block-cover__inner-container has-global-padding is-layout-constrained wp-block-cover-is-layout-constrained">
        <div class="wp-block-columns is-layout-flex wp-block-columns-is-layout-flex" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column -->
            <div class="wp-block-column">
                <p class="has-text-align-left has-body-font-size" style="text-transform:uppercase">Sectores</p>

                <?php
                // Obtén el título de la consulta actual
                $title = get_the_archive_title();

                // Quita el prefijo del título, si existe
                $title = preg_replace('/^Sector: /', '', $title);

                // Convierte el título a mayúsculas
                $title = strtoupper($title);

                // Imprime el título
                echo '<h1>' . $title . '</h1>';

                // Obtén la descripción del término actual
                $description = term_description();

                // Imprime la descripción
                echo '<p>' . $description . '</p>';
                ?>

                <!-- wp:spacer {"height":"40px"} -->
                <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                
                <div class="wp-block-buttons is-content-justification-right is-layout-flex wp-block-buttons-is-layout-flex">
                    <div class="wp-block-button is-style-theme-with-icon" style="text-transform:uppercase">
                        <a class="wp-block-button__link wp-element-button" href="https://viral.sumun.net/etiqmedia/contactar/">Contactar</a>
                    </div>
                </div>

            </div>
            <div class="wp-block-column"></div>
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:cover -->