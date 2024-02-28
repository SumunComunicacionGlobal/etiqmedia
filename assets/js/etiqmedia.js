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