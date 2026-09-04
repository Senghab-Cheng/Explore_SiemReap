'use strict';

const overlay = document.querySelector('[data-overlay]');
const navOpenBtn = document.querySelector('[data-nav-open-btn]');
const navbar = document.querySelector('[data-navbar]');
const navCloseBtn = document.querySelector('[data-nav-close-btn]');
const goTopBtn = document.querySelector('[data-go-top]');
const header = document.querySelector('[data-header]');

const toggleNavigation = () => {
    if (!navbar || !overlay) return;
    navbar.classList.toggle('active');
    overlay.classList.toggle('active');
};

[navOpenBtn, navCloseBtn, overlay]
    .filter(Boolean)
    .forEach((element) => element.addEventListener('click', toggleNavigation));

document.querySelectorAll('[data-nav-link]').forEach((link) => {
    link.addEventListener('click', () => {
        if (navbar?.classList.contains('active')) toggleNavigation();
    });
});

window.addEventListener('scroll', () => {
    if (!header || !goTopBtn) return;
    const active = window.scrollY >= 200;
    header.classList.toggle('active', active);
    goTopBtn.classList.toggle('active', active);
});
