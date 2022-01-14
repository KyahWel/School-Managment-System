var Status = document.getElementById("status");
var Save = document.getElementById("save");

Status.disabled = false;

Save.addEventListener('click', function (event) {
    Status.style.background = "gray"
    Status.innerHTML = "DROPPED"
    Status.disabled = true;
});

//Disable page
$(function() {
    $('#my_form').on('submit', function() {
        $('#wait_lightbox').show(0);
    });
});