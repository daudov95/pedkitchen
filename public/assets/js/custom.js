const headerMenu = document.querySelector('.header-menu-burger');
const mobileMenu = document.querySelector('.mobile-menu');
const mobileMenuClose = document.querySelector('.mobile-menu__close');
const body = document.querySelector('body');


headerMenu.addEventListener('click', (e) => {
  body.classList.add('fixed');
  mobileMenu.classList.add('active');
});

mobileMenuClose.addEventListener('click', (e) => {
  body.classList.remove('fixed');
  mobileMenu.classList.remove('active');
});