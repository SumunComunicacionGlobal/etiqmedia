<?php
function sectores_shortcode() {
    // Obtén los términos de la taxonomía 'sectores'
    $sectores = get_terms('sector');

    // Comienza a capturar la salida
    ob_start();

    echo '<div class="sectores-container">';

    // Genera la lista de términos
    echo '<div class="sectores-list">';
    foreach ($sectores as $sector) {
        echo '<a href="#" class="sector-link" data-sector-id="' . $sector->term_id . '">' . $sector->name . '</a>';
    }
    echo '</div>';

    // Genera el loop inicial de entradas
    echo '<div class="sectores-posts wp-block-group alignfull is-style-group-horizontal-scroll has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">';
    $args = array(
        'post_type' => 'caso-de-uso',
        'tax_query' => array(
            array(
                'taxonomy' => 'sector',
                'field'    => 'term_id',
                'terms'    => $sectores[0]->term_id,
            ),
        ),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Aquí puedes personalizar cómo se muestran las entradas
            get_template_part('templates-parts/case', 'loop');
        }
    }
    echo '</div>';

    echo '</div>';

    // Devuelve la salida capturada
    return ob_get_clean();
}
add_shortcode('sectores', 'sectores_shortcode');


// Agrega el script de AJAX para sectores
function sectores_ajax() {
    // Verifica el nonce
    check_ajax_referer('sectores_nonce', 'nonce');

    // Obtén el ID del término
    $term_id = intval($_POST['term_id']);

    // Genera el loop de entradas
    $args = array(
        'post_type' => 'caso-de-uso',
        'tax_query' => array(
            array(
                'taxonomy' => 'sector',
                'field'    => 'term_id',
                'terms'    => $term_id,
            ),
        ),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Aquí puedes personalizar cómo se muestran las entradas
            get_template_part('templates-parts/case', 'loop');
        }
    }

    // Termina la ejecución
    wp_die();
}
add_action('wp_ajax_sectores', 'sectores_ajax');
add_action('wp_ajax_nopriv_sectores', 'sectores_ajax');


// Casos de uso relacionados
function casos_relacionados_shortcode() {
    // Obtén el ID del post actual
    global $post;
    $post_id = $post->ID;

    // Obtén los términos de la taxonomía 'sector' para el post actual
    $sectores = wp_get_post_terms($post_id, 'sector');

    // Si el post actual no tiene términos, devuelve una cadena vacía
    if (empty($sectores)) {
        return '';
    }

    // Comienza a capturar la salida
    ob_start();

    echo '<div class="sectores-container">';
    echo '<div class="sectores-posts wp-block-group alignfull is-style-group-horizontal-scroll has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">';

    // Genera el loop de casos de uso relacionados
    $args = array(
        'post_type' => 'caso-de-uso',
        'post__not_in' => array($post_id), // Excluye el post actual
        'tax_query' => array(
            array(
                'taxonomy' => 'sector',
                'field'    => 'term_id',
                'terms'    => $sectores[0]->term_id,
            ),
        ),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Aquí puedes personalizar cómo se muestran los casos de uso
            get_template_part('templates-parts/case', 'loop');
        }
    }
    echo '</div>';
    echo '</div>';

    // Devuelve la salida capturada
    return ob_get_clean();
}
add_shortcode('casos_relacionados', 'casos_relacionados_shortcode');
