function personalInfo() {
    document.getElementById('steps').style.display = "block";
    document.getElementById('personalInfo').style.display = "block";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('final_step').style.display = "none";
}

function educationalAttainment() {
  document.getElementById('steps').style.display = "block";
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "block";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('final_step').style.display = "none";
}

function requirement() {
  document.getElementById('steps').style.display = "block";
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "block";
    document.getElementById('final_step').style.display = "none";
}

function final_step() {
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('steps').style.display = "none";
    document.getElementById('final_step').style.display = "block";
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementById('personalInfo');
  y = x.getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      if (!form.checkValidity()) {
        Event.preventDefault()
        Event.stopPropagation()
        alert("Please fill in all the required fields.");
      }

      form.classList.add('was-validated')
      personalInfo();
    }
    }
  }
  // // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += "finish";
  // }
  // return valid; // return the valid status


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
          alert("Please fill in all the required fields.");
        }

        form.classList.add('was-validated')
        personalInfo();
      }, false)
    })
})()
