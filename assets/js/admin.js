var Status = document.getElementById("status");
var Edit = document.getElementById("edit");
var View = document.getElementById("view");

Status.disabled = false;

Status.addEventListener('click', function (event) {
    Status.disabled = !Status.disabled;
    if (Status.disabled == false) {
        View.disabled = false;
        Edit.disabled = false;
        Edit.style.background = "maroon"
        View.style.background = "maroon"
        Status.innerHTML = "Activated"
    }
    else {
        Edit.style.background = "gray"
        View.style.background = "gray"
        Status.innerHTML = "Deactivated"
        View.disabled = true;
        Edit.disabled = true;
    }
});

// View Admin 
function mainAdmin() {
    document.getElementById('mainAdmin').style.display = "block";
    document.getElementById('viewAdmin').style.display = "none";
}

function viewAdmin() {
    document.getElementById('mainAdmin').style.display = "none";
    document.getElementById('viewAdmin').style.display = "block";
}

