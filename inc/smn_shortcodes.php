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
            get_template_part('patterns/sector', 'loop');
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
            get_template_part('patterns/sector', 'loop');
        }
    }

    // Termina la ejecución
    wp_die();
}
add_action('wp_ajax_sectores', 'sectores_ajax');
add_action('wp_ajax_nopriv_sectores', 'sectores_ajax');
?>