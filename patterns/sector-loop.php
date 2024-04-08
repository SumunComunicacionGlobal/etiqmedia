<div class="wp-block-group is-style-card has-background-color has-bodytext-background-color">
    <div class="wp-block-group is-vertical is-nowrap is-layout-flex">
        <h3 class="wp-block-post-titleoop" style="text-transform:uppercase;"><?php the_title(); ?></h3>
        <?php the_excerpt();?>
        <p class="wp-block-post-excerpt__more-text">
            <a class="wp-block-post-excerpt__more-link" href="<?php the_permalink(); ?>">
            <img width="16" height="16" class="wp-image-646" src="http://localhost:8888/etiqmedia/wp-content/uploads/2024/02/circle-add-white.svg" alt="">
            Ver caso
            </a>
        </p>
    </div>

    <figure class="wp-block-post-featured-image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </figure>

</div>

