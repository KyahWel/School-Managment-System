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

