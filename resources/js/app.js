import './bootstrap';
import 'bootstrap/dist/js/bootstrap.js';


// NAVBAR 
//USARE L'OGGETTO "SCROLL"

let navbar= document.querySelector("#navbar")


window.addEventListener("scroll",()=>{
    // console.log(window.scrollY);


    if (window.scrollY > 0) {

        navbar.classList.add("navbar-scrolled")

    } else{
        navbar.classList.remove("navbar-scrolled")
    }
}
)

// SEARCH 
let search= document.querySelector(".search-scrolled")


window.addEventListener("scroll",()=>{
    // console.log(window.scrollY);


    if (window.scrollY > 0) {

        search.classList.add("search-scrolled")

    } else{
        search.classList.remove("search-scrolled")
    }
}
)
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });