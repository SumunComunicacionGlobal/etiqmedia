document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén todos los elementos toggle
    const toggles = document.querySelectorAll('.card-collapsed--toggle');

    // Agrega un event listener para el evento click a cada elemento toggle
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            // Obtén el elemento contenedor
            const container = this.closest('.wp-block-acf-card-collapsed');

            // Si el contenedor existe, togglear la clase
            if (container) {
                container.classList.toggle('is-expanded');
            }
        });
    });
});