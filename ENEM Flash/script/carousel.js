document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.carousel-button.next');
    const prevButton = document.querySelector('.carousel-button.prev');
    const dotsNav = document.querySelector('.carousel-dots');
    const dots = Array.from(dotsNav.children);

    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoplayInterval;
    let isTransitioning = false;

    // Função para mostrar um slide específico
    function showSlide(index) {
        if (isTransitioning) return;
        isTransitioning = true;

        // Remove a classe active de todos os slides
        slides.forEach(slide => slide.classList.remove('active'));
        
        // Adiciona a classe active ao slide atual
        slides[index].classList.add('active');
        
        // Atualiza os dots
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');

        currentSlide = index;

        // Reset do flag de transição após a animação
        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    }

    // Função para ir para o próximo slide
    function nextSlide() {
        const next = (currentSlide + 1) % totalSlides;
        showSlide(next);
    }

    // Função para ir para o slide anterior
    function prevSlide() {
        const prev = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(prev);
    }

    // Eventos de clique nos botões
    nextButton.addEventListener('click', () => {
        clearInterval(autoplayInterval);
        nextSlide();
        startAutoplay();
    });

    prevButton.addEventListener('click', () => {
        clearInterval(autoplayInterval);
        prevSlide();
        startAutoplay();
    });

    // Eventos de clique nos dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            if (currentSlide === index) return;
            clearInterval(autoplayInterval);
            showSlide(index);
            startAutoplay();
        });
    });

    // Eventos de toque para dispositivos móveis
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        clearInterval(autoplayInterval);
    }, { passive: true });

    track.addEventListener('touchmove', (e) => {
        touchEndX = e.touches[0].clientX;
    }, { passive: true });

    track.addEventListener('touchend', () => {
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) { // Mínimo de 50px para considerar como swipe
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        startAutoplay();
    });

    // Pausa o autoplay quando o mouse está sobre o carrossel
    const carouselContainer = document.querySelector('.carousel-container');
    carouselContainer.addEventListener('mouseenter', () => {
        clearInterval(autoplayInterval);
    });

    carouselContainer.addEventListener('mouseleave', () => {
        startAutoplay();
    });

    // Função para iniciar o autoplay
    function startAutoplay() {
        clearInterval(autoplayInterval);
        autoplayInterval = setInterval(nextSlide, 5000);
    }

    // Mostra o primeiro slide e inicia o autoplay
    showSlide(0);
    startAutoplay();
}); 