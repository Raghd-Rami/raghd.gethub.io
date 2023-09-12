const navSlide = () =>{
    const mobile = document.querySelector('.mobile');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    mobile.addEventListener('click', () => {
        //togglw nav
        nav.classList.toggle('nav-active');

        //animation links
        navLinks.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = '' ;
            }
            else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
    });
}

navSlide();