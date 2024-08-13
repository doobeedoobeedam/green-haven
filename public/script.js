document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
});

let currentSlide = 0;

function moveSlide(step) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    
    currentSlide = (currentSlide + step + totalSlides) % totalSlides;
    const offset = -currentSlide * 100;
    slides.style.transform = `translateX(${offset}%)`;
}