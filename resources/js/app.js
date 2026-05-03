import { createIcons, HandHeart, Headset, Hourglass, Medal, ShieldCheck, Smartphone } from 'lucide';

createIcons({
    icons: {
        HandHeart,
        Headset,
        Hourglass,
        Medal,
        ShieldCheck,
        Smartphone,
    },
});

const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.site-nav');

if (toggle && nav) {
    toggle.addEventListener('click', () => {
        const isOpen = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });

    nav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            nav.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });
}

document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const cards = Array.from(carousel.querySelectorAll('.testimonial-card'));
    const dots = Array.from(carousel.querySelectorAll('[data-slide]'));
    if (!cards.length) {
        return;
    }

    let active = Math.min(1, Math.max(cards.length - 1, 0));
    let timer;

    const setActive = (index) => {
        active = (index + cards.length) % cards.length;
        carousel.style.setProperty('--active', active);

        cards.forEach((card, cardIndex) => {
            card.classList.toggle('is-active', cardIndex === active);
        });

        dots.forEach((dot, dotIndex) => {
            const isActive = dotIndex === active;
            dot.classList.toggle('is-active', isActive);
            dot.setAttribute('aria-pressed', String(isActive));
        });
    };

    const start = () => {
        window.clearInterval(timer);
        timer = window.setInterval(() => setActive(active + 1), 4500);
    };

    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            setActive(Number(dot.dataset.slide));
            start();
        });
    });

    carousel.addEventListener('mouseenter', () => window.clearInterval(timer));
    carousel.addEventListener('mouseleave', start);

    setActive(active);
    start();
});
