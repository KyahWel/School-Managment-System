function personalInfo() {
    document.getElementById('personalInfo').style.display = "block";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('Final').style.display = "none";
}

function educationalAttainment() {
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "block";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('Final').style.display = "none";
}

function requirement() {
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "block";
    document.getElementById('Final').style.display = "none";
}

function final_step() {
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('steps').style.display = "none";
    document.getElementById('final_step').style.display = "block";
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
          
        }

        form.classList.add('was-validated')
      }, false)
    })
})()