// Receipt Modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("receiptAttachment");
var modalImg = document.getElementById("receipt01");
var captionText = document.getElementById("caption");
img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// Select All Checkbox
function checkedAll() {
    // this refers to the clicked checkbox
    // find all checkboxes inside the checkbox' form
    var elements = this.form.getElementsByTagName('input');
    // iterate and change status
    for (var i = elements.length; i--;) {
        if (elements[i].type == 'checkbox') {
            elements[i].checked = this.checked;
        }
    }
}

// Requirements modal
function openModal() {
    document.getElementById("requirementsModal").style.display = "block";
}

function closeModal() {
    document.getElementById("requirementsModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";

}

// switching tabs
function lastpage() {
    document.getElementById('create').style.display = "none";
    document.getElementById('viewEnrollmentDetails').style.display = "block";
    document.getElementById('viewApplicantEnrolledStudents').style.display = "none";
    document.getElementById('tab').style.display = "none";
    document.getElementById('viewApplicantDetails').style.display = "none";

}

function enrollment() {
    document.getElementById('create').style.display = "block";
    document.getElementById('viewApplicantEnrolledStudents').style.display = "block";
    document.getElementById('viewEnrollmentDetails').style.display = "none";
    document.getElementById('viewApplicantDetails').style.display = "none";
    document.getElementById('tab').style.display = "block";
}

function applicantDetails() {
    document.getElementById('viewApplicantDetails').style.display = "block";
    document.getElementById('create').style.display = "none";
    document.getElementById('viewApplicantEnrolledStudents').style.display = "none";
    document.getElementById('viewEnrollmentDetails').style.display = "none";
    document.getElementById('tab').style.display = "none";
}