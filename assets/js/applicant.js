function personalInfo() {
  document.getElementById('steps').style.display = "block";
  document.getElementById('personalInfo').style.display = "block";
  document.getElementById('educationalattainment').style.display = "none";
  document.getElementById('requirement').style.display = "none";
  document.getElementById('final_step').style.display = "none";
}

function educationalAttainment() {
  if (validateForms() === false) { // has no errors
    document.getElementById('steps').style.display = "block";
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "block";
    document.getElementById('requirement').style.display = "none";
    document.getElementById('final_step').style.display = "none";
  }
}

function requirement() {
  if (validateFormss() === false) { // has no errors
    document.getElementById('steps').style.display = "block";
    document.getElementById('personalInfo').style.display = "none";
    document.getElementById('educationalattainment').style.display = "none";
    document.getElementById('requirement').style.display = "block";
    document.getElementById('final_step').style.display = "none";
  }
}

$('#confirmationPage').on('shown.bs.modal', function (e) {
  if (validateFormsss() === false) { // has no errors
  var courses = $("#courses option:selected").text();
  var fname = $("#fname").val();
  var midname = $("#midname").val();
  var surname = $("#surname").val();
  var suffix = $("#suffix").val();
  var lrn = $("#lrn").val();
  var gender = $("input[name='gender']:checked").val();
  var birthdate = $("#birthdate").val();
  var age1 = $("#age1").val();
  var birthplace1 = $("#birthplace1").val();
  var landline1 = $("#landline1").val();
  var email1 = $("#email1").val();
  var unit1 = $("#unit1").val();
  var street1 = $("#street1").val();
  var brgy = $("#brgy").val();
  var city1 = $("#city1").val();
  var zip = $("#zip").val();
  var nameschool = $("#nameschool").val();
  var program1 = $("#program1").val();
  var schooladdress = $("#schooladdress").val();
  var yearlvl = $("#yearlvl").val();
  var yeargrad = $("#yeargrad").val();
  var category = $("input[name='category']:checked").val();
  var gpa1 = $("#gpa1").val();
  // var medical = $("#medical").val();
  // var form137 = $("#form137").val();
  // var goodmoral = $("#goodmoral").val();

  $("#confirmationPage .modal-body").html(
    '<p class="text-decoration-underline text-uppercase fw-bold my-2 pb-1">Course Preference</p>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Course Chosen:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + courses + ' </div> </div>' +
    '<hr class="px-2">' +
    '<p class="text-decoration-underline text-uppercase fw-bold my-2 pt-2">Personal Information</p>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3 col-sm-3">Name:</label><div class="col-lg-9 col-md-9 col-sm-9 fw-bold text-uppercase"> ' + fname + ' ' + midname + ' ' + surname + ' ' + suffix + ' </div> </div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">LRN:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + lrn + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Gender:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase">' + gender + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Birth Date:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + birthdate + ' </div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Age:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + age1 + '</div> </div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Birthplace:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + birthplace1 + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Landline:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + landline1 + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Email:</label><div class="col-lg-9 col-md-9 fw-bold"> ' + email1 + '</div></div>' +
    '<p class="text-decoration-underline text-uppercase fw-bold my-2 pt-3">Permanent Address</p>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Unit:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + unit1 + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Street:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + street1 + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Barangay:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + brgy + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">City:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + city1 + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Zipcode:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + zip + '</div></div>' +
    '<p class="text-decoration-underline text-uppercase fw-bold my-2 pt-3">School Last Attended</p>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Name of School:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + nameschool + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Program/Track:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase">' + program1 + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">School Address:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + schooladdress + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Year Level: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + yearlvl + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Year Graduated: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + yeargrad + '</div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">Category: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + category + ' </div></div>' +
    '<div class="row"> <label class="form-label col-lg-3 col-md-3">GPA: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + gpa1 + '</div></div>' +
    // '<p class="text-decoration-underline text-uppercase fw-bold my-2 pt-3">Admission Requirements</p>' +
    // '<div class="row"> <label class="form-label col-lg-3 col-md-3">Medical Record:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + medical + '</div></div>' +
    // '<div class="row"> <label class="form-label col-lg-3 col-md-3">Form 137:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + form137 + '</div></div>' +
    // '<div class="row"> <label class="form-label col-lg-3 col-md-3">Good Moral:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> ' + goodmoral + '</div></div>' +
    '<p class="text-center pt-5 fw-bold">Please confirm by clicking the "CONFIRM" button below, "CANCEL" to go back to the Applicant Registration form. </p>'
  );}
});


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
     
      }, false)
    })
})()


const validateForms = () => {
  let hasError = false;
  const applicantForm = document.querySelector('#personalInfo') // this is a div not a form tag
  const applicantFormInputs = getFormInputs(applicantForm, ['input', 'select'])
  applicantFormInputs.forEach((element) => {
    const fieldFeedbackTemplate = document.querySelector("#fieldFeedbackTemplate").content
    const fieldFeedback = document.importNode(fieldFeedbackTemplate, true).querySelector('div')
    fieldFeedback.querySelector("small").innerText = " "
    if (element.nextSibling.id === "error-message") {
      element.classList.remove('is-invalid')
      element.nextSibling.remove()
    }
    if (element.hasAttribute("required") && element.value === "") {
      hasError = true
      element.classList.add("is-invalid")
      insertAfter(element, fieldFeedback)
    }
  })

  return hasError
}

const validateFormss = () => {
  let hasError = false;
  const applicantForm = document.querySelector('#educationalattainment') // this is a div not a form tag
  const applicantFormInputs = getFormInputs(applicantForm, ['input', 'select'])
  applicantFormInputs.forEach((element) => {
    const fieldFeedbackTemplate = document.querySelector("#fieldFeedbackTemplate").content
    const fieldFeedback = document.importNode(fieldFeedbackTemplate, true).querySelector('div')
    fieldFeedback.querySelector("small").innerText = " "
    if (element.nextSibling.id === "error-message") {
      element.classList.remove('is-invalid')
      element.nextSibling.remove()
    }
    if (element.hasAttribute("required") && element.value === "") {
      hasError = true
      element.classList.add("is-invalid")
      insertAfter(element, fieldFeedback)
    } 
  })

  return hasError
}

const validateFormsss = () => {
  let hasError = false;
  const applicantForm = document.querySelector('#requirement') // this is a div not a form tag
  const applicantFormInputs = getFormInputs(applicantForm, ['input', 'select'])
  applicantFormInputs.forEach((element) => {
    const fieldFeedbackTemplate = document.querySelector("#fieldFeedbackTemplate").content
    const fieldFeedback = document.importNode(fieldFeedbackTemplate, true).querySelector('div')
    fieldFeedback.querySelector("small").innerText = " "
    if (element.nextSibling.id === "error-message") {
      element.classList.remove('is-invalid')
      element.nextSibling.remove()
    }
    if (element.hasAttribute("required") && element.value === "") {
      hasError = true
      $('#confirmationPage').modal('hide');
      element.classList.add("is-invalid")
      insertAfter(element, fieldFeedback)
    } 
  })

  return hasError
  
}

const insertAfter = (referenceNode, newNode) => {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}
const getFormInputs = (form, constraints = []) => {
  const elements = []
  constraints.forEach((c) => {
    const formInputs = form.querySelectorAll(c)
    formInputs.forEach((input) => {
      elements.push(input)
    })
  })
  return elements
}
