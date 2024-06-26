<?php
// Obtén los términos de la taxonomía 'category' para el post actual
$terms = get_the_terms(get_the_ID(), 'sector');
$classes = '';
if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $classes .= ' ' . $term->slug;
    }
}
?>

<div class="<?php echo $classes; ?> wp-block-group is-style-card is-style-card--horizontal is-content-justification-left has-background-color has-neutral-80-background-color">
    <div class="wp-block-group">
        <a class="stretched-link" href="<?php echo get_permalink(); ?>">
            <h3 class="wp-block-post-title" style="text-transform:uppercase;"><?php the_title(); ?></h3>
        </a>    
        <?php the_excerpt();?>
        <p class="wp-block-post-excerpt__more-text">
            <a class="wp-block-post-excerpt__more-link" href="<?php echo get_permalink(); ?>"><img width="16" height="16" class="wp-image-646" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/circle-add-white.svg" alt="">Ver caso</a>
        </p>
    </div>
    <figure class="wp-block-post-featured-image">
            <?php the_post_thumbnail('img-card'); ?>
    </figure>
</div>

