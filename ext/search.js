import {eventDisplaySwitch, showToggle} from "../stf/js/docFunctions.js";

const srInstance = document.querySelector(".sr_instance");
const sInput = document.querySelector(".property_search input");
const cancelIcon = document.querySelector(".cancelIcon");
const filterIcon = document.querySelector(".filter_icon")
const filterBox = document.querySelector(".filter_box")


const sri = eventDisplaySwitch(sInput, srInstance, "focus", "");
cancelIcon.addEventListener('click', ()=>{srInstance.style.display = "none"})

filterIcon.addEventListener('click', ()=>{showToggle(filterBox)})