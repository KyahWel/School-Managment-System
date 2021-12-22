const monthsFull = ["January","February","March","April","May","June","July","August","September","October","November","December"];
const months = ["Janu","Feb","March","April","May","June","July","Aug","Sept","Oct","Nov","Dec"];
const days = ["Sun","Mon","Tue","Wed","Thurs","Fri","Sat"];

const d = new Date();
let date = [d.getDate()];
let year = [d.getFullYear()];
let month = months[d.getMonth()];
let monthFull = monthsFull[d.getMonth()];
let day = days[d.getDay()];

const dateStr = day + " " + month + " " + date + ", " + year;
document.getElementById("getMonth").innerHTML = monthFull;
document.getElementById("today").innerHTML = dateStr;