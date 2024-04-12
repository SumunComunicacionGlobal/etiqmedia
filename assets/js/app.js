// Asegúrate de que el DOM esté cargado antes de ejecutar el script
document.addEventListener("DOMContentLoaded", function() {
    // Registra el plugin ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Selecciona todos los elementos con la clase .wp-block-heading
    const headings = document.querySelectorAll('.class-name-here');

    // Recorre cada elemento y crea una animación
    headings.forEach((heading) => {
        // Configura la opacidad inicial a 0 y la posición inicial 100px abajo
        gsap.set(heading, {autoAlpha: 0, y: 100});

        // Crea la animación
        gsap.to(heading, {
            autoAlpha: 1, // Anima la opacidad a 1
            y: 0, // Anima la posición a 0 (arriba)
            scrollTrigger: {
                trigger: heading, // Usa el encabezado como disparador
                start: 'top 20%', // Comienza la animación cuando el encabezado está al 80% del viewport
                once: true, // Asegura que la animación solo se ejecute una vez
                markers: true,
            }
        });
    });
});