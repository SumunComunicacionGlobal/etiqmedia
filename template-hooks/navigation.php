<div class="wp-block-navigation__search">

    <?php
        $block_content = '<!-- wp:search {"label":"Buscar","showLabel":false,"placeholder":"Ordenar mi despensa...","buttonText":"Buscar","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"}} /-->';
        echo do_blocks($block_content);
    ?>
</div>
