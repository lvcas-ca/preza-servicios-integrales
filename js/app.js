

const hamb = document.querySelector(".hamburger");
const menu = document.querySelector(".menu");
const nodoButton = document.querySelector(".click");
let $loader = document.querySelector('.loader');
let $dropdownMenu= document.querySelector('.dropdown-menu');
let dropdownT = document.querySelector('.dropdown-toggle');



document.addEventListener("click", (e) =>{
    if(e.target.matches(".hamburger--collapse") || e.target.matches(".hamburger-inner") || e.target.matches(".hamburger-box")){
        hamb.classList.toggle("is-active");
        menu.classList.toggle("menu-off");
        menu.classList.toggle("menu-on");
    }

    if(e.target.matches(".test")){
        $dropdownMenu.style.display = "block";
    }
   
})









 document.addEventListener("click", (e)=>{
    if(e.target.matches(".click")){
        menu.classList.toggle("menu-off");
        hamb.classList.toggle("is-active");
    }
    if(screen.width <= 800){
     if(e.target.matches("click")){
        menu.classList.toggle("menu-off");
        hamb.classList.toggle("is-active");
     }
    }
 });

 /*
 
 var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            900: {
            slidesPerView: 2,
            centeredSlides: true,
            },
            1200: {
            slidesPerView: 3, 
            centeredSlides: true,
            }
        },
  }); 
 
 
 */
  
