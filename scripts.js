document.addEventListener('DOMContentLoaded', function () {
    // Carousel Functionality
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    let currentIndex = 0;
    let isAnimating = false;

    function updateCarousel() {
        if (carouselInner && carouselItems.length > 0) {
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    }

    function handlePrevClick() {
        if (!isAnimating) {
            isAnimating = true;
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : carouselItems.length - 1;
            updateCarousel();
            setTimeout(() => (isAnimating = false), 500);
        }
    }

    function handleNextClick() {
        if (!isAnimating) {
            isAnimating = true;
            currentIndex = (currentIndex < carouselItems.length - 1) ? currentIndex + 1 : 0;
            updateCarousel();
            setTimeout(() => (isAnimating = false), 500);
        }
    }

    if (prevButton && nextButton) {
        prevButton.addEventListener('click', handlePrevClick);
        nextButton.addEventListener('click', handleNextClick);
    }

    // Gallery Toggle Function
    const toggleGalleryButton = document.querySelector('.toggle-gallery');
    if (toggleGalleryButton) {
        toggleGalleryButton.addEventListener('click', function () {
            const hiddenImages = document.querySelectorAll('.gallery .hidden');
            if (hiddenImages.length > 0) {
                hiddenImages.forEach((img) => {
                    img.classList.remove('hidden');
                });
                this.style.display = 'none';
            }
        });
    }

    // Service Cards Initialization
    function initServiceCards() {
        document.querySelectorAll('.service-card').forEach(card => {
            const frontVideo = card.querySelector('.service-card-front video');
            const backVideo = card.querySelector('.service-card-back video');
            
            // Auto-play front video
            if (frontVideo) {
                frontVideo.play().catch(() => {
                    // Autoplay failed - this is expected on mobile
                });
            }
            
            // Handle card flip
            card.addEventListener('click', function() {
                this.classList.toggle('flipped');
                
                // Handle back video
                if (backVideo) {
                    if (this.classList.contains('flipped')) {
                        backVideo.style.display = 'block';
                        backVideo.play().catch(() => {
                            // Autoplay failed
                        });
                    } else {
                        backVideo.pause();
                        backVideo.currentTime = 0;
                        backVideo.style.display = 'none';
                    }
                }
            });
        });
    }

    // Initialize service cards
    initServiceCards();
});

// Video-Playback beim Hover über Service Cards
document.addEventListener('DOMContentLoaded', () => {
    const serviceCards = document.querySelectorAll('.service-card');

    serviceCards.forEach((card) => {
        const video = card.querySelector('.card-video');

        if (video) {
            // Stelle sicher, dass das Video vorgeladen ist
            video.addEventListener('loadeddata', () => {
                video.style.opacity = '1'; // Sobald das Video geladen ist, sichtbar machen
            });

            // Starte das Video beim Hover
            card.addEventListener('mouseenter', () => {
                video.play();
            });

            // Pausiere das Video beim Verlassen
            card.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0; // Optional: Video zurücksetzen
            });
        }
    });
});

const serviceCards = document.querySelectorAll(".service-card");

serviceCards.forEach((card) => {
    const video = card.querySelector("video");
    card.addEventListener("mouseenter", () => {
        if (video) video.play(); // Video startet, wenn die Maus über die Karte ist
    });
    card.addEventListener("mouseleave", () => {
        if (video) video.pause(); // Video pausiert, wenn die Maus die Karte verlässt
    });
});


document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('click', function () {
        const video = this.querySelector('.service-card-back video');
        if (this.classList.contains('flipped')) {
            video.style.display = 'block'; // Video sichtbar machen
            video.play();
        } else {
            video.pause();
            video.currentTime = 0;
            video.style.display = 'none'; // Video ausblenden
        }
    });
});

// Service Cards
function initServiceCards() {
    document.querySelectorAll('.service-card').forEach(card => {
        const frontVideo = card.querySelector('.service-card-front video');
        const backVideo = card.querySelector('.service-card-back video');
        
        // Auto-play front video
        if (frontVideo) {
            frontVideo.play().catch(() => {
                // Autoplay failed - this is expected on mobile
            });
        }
        
        // Handle card flip
        card.addEventListener('click', function() {
            this.classList.toggle('flipped');
            
            // Handle back video
            if (backVideo) {
                if (this.classList.contains('flipped')) {
                    backVideo.play().catch(() => {
                        // Autoplay failed
                    });
                } else {
                    backVideo.pause();
                    backVideo.currentTime = 0;
                }
            }
        });
    });
}

// Initialize service cards when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initServiceCards();
});

