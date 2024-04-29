<?php

/**
 * Card Collapsed Block Template.
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

/**
 * A template string of blocks.
 * Need help converting block HTML markup to an array?
 * 👉 https://happyprime.github.io/wphtml-converter/
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-templates/
 */

 $inner_blocks_template = array(
    array(
        'core/media-text',
        array(
            'mediaPosition' => 'right',
            'mediaId' => 227,
            'mediaLink' => 'http://localhost:8888/etiqmedia/consequatur-esse-et-est-est/wp_dummy_content_generator_226-jpg/',
            'mediaType' => 'image',
            'mediaWidth' => 30,
            'imageFill' => true,
            'style' => array(
                'spacing' => array(
                    'padding' => array(
                        'top' => '0',
                        'bottom' => '0',
                        'left' => '0',
                        'right' => '0'
                    )
                ),
                'elements' => array(
                    'link' => array(
                        'color' => array(
                            'text' => 'var:preset|color|background'
                        )
                    )
                )
            ),
            'backgroundColor' => 'neutral-80',
            'textColor' => 'background',
            'className' => 'is-style-card'
        ),
        array(
            array(
                'core/heading',
                array(
                    'level' => 3,
                    'content' => 'Title goes here',
                    'style' => array(
                        'typography' => array(
                            'textTransform' => 'uppercase'
                        )
                    )
                ),
                array()
            ),
            array(
                'core/group',
                array(
                    'layout' => array(
                        'type' => 'flex',
                        'flexWrap' => 'wrap',
                        'justifyContent' => 'space-between',
                        'verticalAlignment'=> 'bottom'
                    ),
                    'metadata' => array(
                        'name' => 'Collapsed content'
                    )
                ),
                array(
                    array(
                        'core/paragraph',
                        array(
                            'className' => 'card-collapsed--content',
                            'content' => 'Content Goes Here',
                            'style' => array(
                                'layout' => array(
                                    'selfStretch' => 'fixed',
                                    'flexSize' => '70%'
                                )
                            )
                        ),
                        array()
                    ),
                    array(
                        'core/paragraph',
                        array(
                            'className' => 'card-collapsed--toggle',
                            'content' => 'Leer menos',
                            'style' => array(
                                'layout' => array(
                                    'selfStretch' => 'fixed',
                                    'flexSize' => '20%'
                                )
                            )
                        ),
                        array()
                    ),
                    
                )
            ),
            
        )
    ),
    
    
 );

?>

<?php if ( ! $is_preview ) { ?>
    <div
        <?php
        echo wp_kses_data(
            get_block_wrapper_attributes(
                array(
                    'id'    => $block_id,
                    'class' => esc_attr( $class_name ),
                )
            )
        );
        ?>
    >
<?php } ?>

    <InnerBlocks
        templateLock="all" 
        class="card-collapsed-block__innerblocks"
        template="<?php echo esc_attr( wp_json_encode( $inner_blocks_template ) ); ?>"
    />

<?php if ( ! $is_preview ) { ?>
    </div>
<?php } ?>

<!-- Initialize Swiper -->
<script>

</script>