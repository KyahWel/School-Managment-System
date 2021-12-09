var Status = document.getElementById("status");
var Edit = document.getElementById("edit");
var View = document.getElementById("view");

// Disable the button on initial page load
Status.disabled = false;

//add event listener
Status.addEventListener('click', function (event) {
    Status.disabled = !Status.disabled;
    if (Status.disabled == false) {
        View.disabled = false;
        Edit.disabled = false;
        Edit.style.background = "maroon"
        View.style.background = "maroon"
        Status.innerHTML = "ACTIVATED"
    }

    else {
        Edit.style.background = "gray"
        View.style.background = "gray"
        Status.innerHTML = "DEACTIVATED"

        View.disabled = true;
        Edit.disabled = true;
    }
});


