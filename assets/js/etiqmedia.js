document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén el elemento .toggle-mega-menu
    const toggle = document.querySelector('.toggle-mega-menu');

    // Si el elemento .toggle-mega-menu existe
    if (toggle) {
        // Agrega un event listener para el evento click
        toggle.addEventListener('click', function() {
            // Obtén el elemento #mega-menu
            const megaMenu = document.getElementById('mega-menu');

            // Si el elemento #mega-menu existe
            if (megaMenu) {
                // Añade la clase is-open
                megaMenu.classList.add('is-open');
            }

            // Cambia el estilo overflow del body a hidden
            document.body.style.overflow = 'hidden';
        });
    }

    // Obtén el elemento .toggle-mega-menu--close
    const toggleClose = document.querySelector('.toggle-mega-menu--close');

    // Si el elemento .toggle-mega-menu--close existe
    if (toggleClose) {
        // Agrega un event listener para el evento click
        toggleClose.addEventListener('click', function() {
            // Obtén el elemento #mega-menu
            const megaMenu = document.getElementById('mega-menu');

            // Si el elemento #mega-menu existe
            if (megaMenu) {
                // Quita la clase is-open
                megaMenu.classList.remove('is-open');
            }

            // Cambia el estilo overflow del body a su valor original
            document.body.style.overflow = '';
        });
    }
});

document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén el elemento .toggle-filter-by
    const toggle = document.querySelector('.toggle-filter-by');

    // Si el elemento .toggle-filter-by existe
    if (toggle) {
        // Agrega un event listener para el evento click
        toggle.addEventListener('click', function() {
            // Obtén el elemento .filter-by
            const filterBy = document.querySelector('.filter-by');

            // Si el elemento .filter-by existe
            if (filterBy) {
                // Togglear la clase filter-by--is-open
                filterBy.classList.toggle('filter-by--is-open');
            }
        });
    }
});


document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén el elemento .toggle-wp-block-partners
    const toggle = document.querySelector('.toggle-wp-block-partners');

    // Si el elemento .toggle-wp-block-partners existe
    if (toggle) {
        // Agrega un event listener para el evento click
        toggle.addEventListener('click', function() {
            // Obtén el elemento .wp-block-partners
            const partners = document.querySelector('.wp-block-partners');

            // Si el elemento .wp-block-partners existe
            if (partners) {
                // Togglear la clase is-open
                partners.classList.toggle('wp-block-partners--is-open');
            }
        });
    }
});

var sectores_nonce = my_script_vars.sectores_nonce;

jQuery(document).ready(function($) {
    $('.sector-link').click(function(e) {
        e.preventDefault();

        var term_id = $(this).data('sector-id');

        $.ajax({
            url: my_script_vars.ajaxurl,
            type: 'POST',
            data: {
                action: 'sectores',
                nonce: sectores_nonce,
                term_id: term_id
            },
            success: function(response) {
                $('.sectores-posts').html(response);
            }
        });
    });
});


window.addEventListener("scroll", function() {
    if (window.scrollY > 0) { // Ajusta este valor según tus necesidades
        document.body.classList.add("scrolled");
    } else {
        document.body.classList.remove("scrolled");
    }
});
