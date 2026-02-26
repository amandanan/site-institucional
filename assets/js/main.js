document.addEventListener('DOMContentLoaded', () => {

    // ================== Scroll Animations ==================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                const children = Array.from(entry.target.querySelectorAll('.animate'));
                children.forEach((el, i) => {
                    setTimeout(() => el.classList.add('visible'), i * 150);
                });
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.section').forEach(section => observer.observe(section));

    // ================== Smooth Scroll ==================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e){
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            const headerOffset = document.querySelector('.header').offsetHeight;
            const elementPosition = target.offsetTop;
            const offsetPosition = elementPosition - headerOffset;

            window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
        });
    });

    // ================== Banner Carousel ==================
    const slides = document.querySelectorAll('.carousel-slide');
    const prev = document.querySelector('.carousel-prev');
    const next = document.querySelector('.carousel-next');
    const bullets = document.querySelectorAll('.bullet');
    const container = document.querySelector('.carousel-container');
    let index = 0;

    function showSlide(i){
        if(i < 0) index = slides.length - 1;
        else if(i >= slides.length) index = 0;
        else index = i;
        container.style.transform = `translateX(-${index * 100}%)`;
        bullets.forEach((b,j) => b.classList.toggle('active', j === index));
    }

    prev.addEventListener('click', () => showSlide(index - 1));
    next.addEventListener('click', () => showSlide(index + 1));
    bullets.forEach((b,i) => b.addEventListener('click', () => showSlide(i)));

    // Auto slide
    setInterval(() => showSlide(index + 1), 5000);
});



