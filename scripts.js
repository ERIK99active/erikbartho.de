document.addEventListener('DOMContentLoaded', function() {
    // Karussell-Funktionalität
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

    // Galerie-Funktionalität
    const toggleGalleryButton = document.querySelector('.toggle-gallery');
    const hiddenImages = document.querySelectorAll('.gallery-row.hidden');

    toggleGalleryButton.addEventListener('click', function() {
        hiddenImages.forEach(function(imageRow) {
            imageRow.classList.remove('hidden');
        });

        // Button ausblenden, wenn alle Bilder sichtbar sind
        this.style.display = 'none';
    });
});