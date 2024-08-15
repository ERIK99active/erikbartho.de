document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    let currentIndex = 0;

    function updateCarousel() {
        carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : carouselItems.length - 1;
        updateCarousel();
    });

    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex < carouselItems.length - 1) ? currentIndex + 1 : 0;
        updateCarousel();
    });
});

document.querySelector('.toggle-gallery').addEventListener('click', function() {
    // Alle versteckten Bilder sichtbar machen
    document.querySelectorAll('.hidden').forEach(function(image) {
        image.classList.remove('hidden');
    });

    // Button ausblenden, wenn alle Bilder sichtbar sind
    this.style.display = 'none';
});

document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM vollständig geladen und analysiert");
    // Der restliche Code bleibt gleich
});
