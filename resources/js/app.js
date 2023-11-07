import './bootstrap';
import 'bootstrap/dist/js/bootstrap.js';
import { register } from 'swiper/element/bundle';
// register Swiper custom elements
register();


// NAVBAR 
//USARE L'OGGETTO "SCROLL"

let navbar= document.querySelector("#navbar")
// SEARCH 
let search= document.querySelector(".search-scrolled")


window.addEventListener("scroll",()=>{
    // console.log(window.scrollY);


    if (window.scrollY > 0) {

        navbar.classList.add("navbar-scrolled")
        search.classList.add("search-scrolled")
    } else{
        navbar.classList.remove("navbar-scrolled")
        search.classList.remove("search-scrolled")
    }
}
)



