const navMenu = document.getElementById('custom-nav');
const navLiS = document.getElementsByClassName('nav-items');
const navClose = document.getElementById('nav-close');
const navOpen = document.getElementById('nav-open');
console.log(navLiS);
navOpen.addEventListener('click', openNav, true);
function openNav() {
    for (let i = 0; i < navLiS.length; i++) {
        navLiS[i].classList.add('open');
    }
    navClose.classList.add('open')
    navOpen.classList.add('hide')
}

navClose.addEventListener('click', closeNav, true);
function closeNav() {
    for (let i = 0; i < navLiS.length; i++) {
        navLiS[i].classList.remove('open');
    }
    navOpen.classList.remove('hide')
    navClose.classList.remove('open')
}