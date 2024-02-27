document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén todos los elementos toggle
    const toggles = document.querySelectorAll('.card-collapsed--toggle');

    // Agrega un event listener para el evento click a cada elemento toggle
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            // Togglear la clase en el elemento toggle
            this.classList.toggle('tu-clase');

            // Obtén el elemento content y togglear la clase
            const content = this.parentNode.querySelector('.card-collapsed--content');
            if (content) {
                content.classList.toggle('is-expanded');
            }

            // Obtén el elemento media y togglear la clase
            const media = this.parentNode.parentNode.nextElementSibling;
            if (media) {
                media.classList.toggle('is-expanded');
            }
        });
    });
});