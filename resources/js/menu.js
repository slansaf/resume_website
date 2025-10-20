const menuActive = document.querySelector('.nav');
const burger = document.querySelector('.navigation__burger');
const menuClose= document.querySelector('.close');

function toggleMenu() {
    menuActive.classList.toggle('nav__hidden');
}

burger.addEventListener('click', toggleMenu);
menuClose.addEventListener('click', toggleMenu);