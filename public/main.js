document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });

    gsap.from(".partner-item, .leaderboard-item, .transformation-card, .list", {
        opacity: 0,
        y: 50,
        duration: 1.5,
        stagger: 0.2,
        ease: "power2.out"
    });
});

let slideIndex = 0;

function showSlides(n) {
    const slides = document.querySelectorAll('.slide');
    if (n >= slides.length) slideIndex = 0;
    if (n < 0) slideIndex = slides.length - 1;

    const slideWidth = slides[0].offsetWidth;
    document.querySelector('.slides').style.transform = `translateX(${-slideWidth * slideIndex}px)`;
}

function moveSlide(n) {
    showSlides(slideIndex += n);
}

// Initialize
showSlides(slideIndex);
