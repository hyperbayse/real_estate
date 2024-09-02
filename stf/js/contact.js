import {show_this} from "/docapp/stf/js/docFunctions.js";

const appointment = document.querySelector(".appointment");
const message = document.querySelector(".message");
const appointmentBox = document.querySelector(".appointment_box")
const messageBox = document.querySelector(".message_box");

appointment.addEventListener('click', function(){show_this(appointmentBox, messageBox, "block", "none")});
message.addEventListener('click', function(){show_this(messageBox, appointmentBox, "block", "none")});