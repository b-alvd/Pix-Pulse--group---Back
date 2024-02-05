const navEl = document.querySelector('.header_nav');
const hamburgerEl = document.querySelector('.header_hamburger');
const navItemEls = document.querySelectorAll('.header_nav__item');

hamburgerEl.addEventListener('click', () => {
    navEl.classList.toggle('header_nav--open');
    hamburgerEl.classList.toggle('header_hamburger--open');
});

navItemEls.forEach(navItemEl => {
    navItemEl.addEventListener('click', () => {
        navEl.classList.remove('header_nav--open');
        hamburgerEl.classList.remove('header_hamburger--open');
    });
});