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
    // Agrega la clase 'sector-link--active' al primer elemento de la lista
    $('.sector-link').first().addClass('sector-link--active');

    // Guarda la última ID del sector que se agregó como una clase
    var lastSectorId;

    $('.sector-link').click(function(e) {
        e.preventDefault();

        // Quita la clase 'sector-link--active' de cualquier elemento que la tenga
        $('.sector-link--active').removeClass('sector-link--active');

        // Agrega la clase 'sector-link--active' al elemento en el que se hizo clic
        $(this).addClass('sector-link--active');

        // Obtiene la ID del sector del atributo 'data-sector-id' del elemento en el que se hizo clic
        var sectorId = $(this).data('sector-id');

        // Quita la última ID del sector que se agregó como una clase
        if (lastSectorId) {
            $('.sectores-container').removeClass('sector-' + lastSectorId);
        }

        // Agrega la ID del sector como una clase al contenedor '.sectores-container'
        $('.sectores-container').addClass('sector-' + sectorId);

        // Guarda la ID del sector para la próxima vez
        lastSectorId = sectorId;

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

// Añade botones de scroll a la izquierda y derecha
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".is-style-group-horizontal-scroll").forEach((content) => {
        // Solo agrega los botones si hay más de un elemento hijo
        if (content.children.length > 1) {
            // Crea los botones
            const rightBtn = document.createElement("button");
            rightBtn.classList.add("scrolling-button", "scrolling-button--right");
            rightBtn.innerHTML = "→";
            rightBtn.disabled = false;

            const leftBtn = document.createElement("button");
            leftBtn.classList.add("scrolling-button", "scrolling-button--left");
            leftBtn.innerHTML = "←";
            leftBtn.disabled = true;

            // Crea un contenedor para los botones
            const buttonContainer = document.createElement("div");
            buttonContainer.classList.add("scrolling-button-container");

            // Agrega los botones al contenedor
            buttonContainer.appendChild(leftBtn);
            buttonContainer.appendChild(rightBtn);

            // Crea un contenedor para el div .is-style-group-horizontal-scroll y el div .scrolling-button-container
            const scrollContainer = document.createElement("div");
            scrollContainer.classList.add("horizontal-scroll--container");

            // Agrega el div .is-style-group-horizontal-scroll y el div .scrolling-button-container al contenedor
            scrollContainer.appendChild(content.cloneNode(true));
            scrollContainer.appendChild(buttonContainer);

            // Reemplaza el div .is-style-group-horizontal-scroll original con el nuevo contenedor
            content.parentNode.replaceChild(scrollContainer, content);

            // Agrega los controladores de eventos de clic a los botones
            rightBtn.addEventListener("click", () => {
                const scrollContent = scrollContainer.firstChild;
                scrollContent.scrollLeft += 800;
                leftBtn.disabled = false;

                // Desactiva el botón derecho si se ha llegado al final del scroll
                if (scrollContent.scrollWidth - scrollContent.scrollLeft - scrollContent.clientWidth <= 0) {
                    rightBtn.disabled = true;
                }
            });

            leftBtn.addEventListener("click", () => {
                const scrollContent = scrollContainer.firstChild;
                scrollContent.scrollLeft -= 800;
                rightBtn.disabled = false;

                // Desactiva el botón izquierdo si se ha llegado al principio del scroll
                if (scrollContent.scrollLeft <= 0) {
                    leftBtn.disabled = true;
                }
            });
        }
    });
});

// Añade clase a body cuando se hace scroll
window.addEventListener("scroll", function() {
    if (window.scrollY > 0) {
        document.body.classList.add("scrolled");
    } else {
        document.body.classList.remove("scrolled");
    }
});
