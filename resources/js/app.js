import './bootstrap';
import 'bootstrap/dist/js/bootstrap.js';



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