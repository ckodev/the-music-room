const navMenuUL = document.getElementById('custom-nav-container');
const navLiS = document.getElementsByClassName('nav-items');
const navClose = document.getElementById('nav-close');
const navOpen = document.getElementById('nav-open');

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
        navLiS[i].classList.remove('active');
    }
    
    navOpen.classList.remove('hide')
    navClose.classList.remove('open')
}



// adds active class to selected nav item either onClick or onScroll
let section = document.querySelectorAll('.scroll-section');
        let lists = document.querySelectorAll('.nav-items');
        function activeLink(li) {
            lists.forEach((item) => item.classList.remove('active'));
            li.classList.add('active');
        }
        lists.forEach((item) =>
            item.addEventListener('click', function(){
                activeLink(this);
                
            }));

        window.onscroll = _.throttle( () => {
            section.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 200;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    const target = document.querySelector(`[href='#${id}']`).parentElement;
                    const grandparent = target.parentElement; 
                    activeLink(grandparent);
                }
                console.log(top)
            })
        }, 500);

