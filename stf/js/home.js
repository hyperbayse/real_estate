import {auto_change} from "./docFunctions.js";

const imageSlides = document.querySelectorAll(".images img");
const homeAbout = document.querySelectorAll(".home_about > div");

auto_change(imageSlides, 7000);
auto_change(homeAbout);


const left = document.querySelector(".left");
const right = document.querySelector(".right");
const newListings = document.querySelector(".new_listings");


right.addEventListener('click', ()=>{
    newListings.scrollLeft += +300;
})
left.addEventListener('click', ()=>{
    newListings.scrollLeft += -300;
})

