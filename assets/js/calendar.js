const monthsFull = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const months = ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];
const days = ["Sun", "Mon", "Tue", "Wed", "Thurs", "Fri", "Sat"];

const d = new Date();
let date = [d.getDate()];
let year = [d.getFullYear()];
let month = months[d.getMonth()];
let monthFull = monthsFull[d.getMonth()];
let day = days[d.getDay()];

const dateStr = day + " " + monthFull + " " + date + ", " + year;
document.getElementById("today").innerHTML = dateStr;

window.onload = displayClock();
function displayClock(){
  var display = new Date().toLocaleTimeString();
  document.getElementById("getMonth").innerHTML = display;
  setTimeout(displayClock, 1000); 
}
