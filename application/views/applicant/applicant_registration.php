<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/applicant.css'); ?>" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
      
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous">
    </script>
    <title>Applicant Registration</title>

</head>

<body>
    <div class="d-flex justify-content-between text-white header px-3 py-2">
        <div class="brand py-2">
            Technological University of the Philippines
        </div>
        <button type="button" class="btn btn-outline-warning cancel mx-1 fw-bold" data-bs-toggle="modal" data-bs-target="#cancelApplication">
            Cancel
        </button>
        <!-- Cancel Dialog Box-->
        <div class="modal fade" id="cancelApplication" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cancelApplicationLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white fw-bold" id="cancelApplicationLabel">Cancel Application</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                        Are you sure you want to cancel your application?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="reset" class="btn btn-primary" onclick="location.href='<?php echo site_url('Login/applicant'); ?>'">Yes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row height-100vh">
            <div class="col-lg-3 col-md-3 col-sm-0 col-xl-2 px-0 bg-default d-flex sticky-top">
                <div class="d-flex flex-md-column flex-row flex-grow-1 align-items-center text-dark">
                    <div href="/" class="d-block align-items-center pb-sm-3 text-dark text-decoration-none">
                        <div class="d-none d-md-inline">
                            <img src="assets/images/applicantAvatar.svg" alt="" class="pt-4 mx-4" style="width: 125px;">
                            <br>
                            <p class="text-center pt-4 h5 fw-bold">Welcome, Applicant</p>
                            <!-- <p class="text-center pt-2 fw-bold h5">Applicant !</p> -->
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contents -->
            <div class="col d-flex flex-column">
                <div class="container-fluid" id="steps" style="display: block;">

                    <div class=" mt-3 applicant-head text-dark px-3 rounded-3 information ">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                1. Kindly type 'NA' in boxes where there are no possible answers to the information being requested. <br>
                                2. Enter a valid email address to receive the test permit.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row height-sm-100 contents">
                    <div class="col">
                        <form method='POST' class="needs-validation" novalidate enctype="multipart/form-data" name="applicantform" id="applicantForm">
                            <!-- Personal Information -->
                            <div id='personalInfo' class=" container pt-3" style="display: block;">
                                <div class="step_progressbar">
                                    <ul>
                                        <li class="active">Personal Information <span class="spare1"> <br></span></li>
                                        <li>Education Attainment</li>
                                        <li>Requirements <span class="spare"> <br></span></li>
                                        <li>Review All <span class="spare"> <br></span></li>
                                    </ul>
                                </div>
                                <div class="Wrapper">
                                    <div class="tabTitle">
                                        <p class="text-white"><i class="fa fa-user"></i> <span class="px-2"> Personal Information </span></p>
                                    </div>
                                    <div class="Contents">

                                        <div class="mb-3 row">
                                            <label for="courses" class="col-2 form-label small pt-2">Course: </label>
                                            <div class="col-lg-7 col-md-10 col-sm-12">
                                                <select class="form-select form-select-sm" id="courses" name="course_chosen" aria-label="Select Course" required>
                                                    <option value="" selected>--Please Select--</option>
                                                    <?php foreach ($course as $course) { ?>
                                                        <option value='<?php echo $course->degree ?> in <?php echo $course->major ?>'><?php echo $course->degree ?> in <?php echo $course->major ?></option>
                                                    <?php } ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a course.
                                                </div>
                                            </div>
                                            <hr class="mt-4 mb-1">
                                        </div>

                                        <!-- Name Input-->
                                        <div class="row mt-0 asterisk">
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">First Name</label>
                                                <input type="text" name="firstname" id="fname" class="form-control form-control-sm" aria-label="First name" required>
                                                <div class="invalid-feedback">
                                                    Please input your first name.
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">Middle Name</label>
                                                <input type="text" name='middlename' id="midname" class="form-control form-control-sm" aria-label="Last name" required>
                                                <div class="invalid-feedback">
                                                    Please input your middle name.
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">Surname</label>
                                                <input type="text" name="lastname" id="surname" class="form-control form-control-sm" aria-label="Surname" required>
                                                <div class="invalid-feedback">
                                                    Please input your surname.
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">Suffix</label>
                                                <input type="text" name='extname' id="suffix" class="form-control form-control-sm" aria-label="Extension Name" required>
                                                <div class="invalid-feedback">
                                                    Please input your extension name.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- LRN and Gender-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">LRN:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name="LRN" id="lrn" class="form-control form-control-sm" minlength="10" aria-label="LRN" required>
                                                <div class="invalid-feedback">
                                                    Please input your LRN.
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-md-none"> </div>
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Gender:</label>
                                            <div class="col-lg-3 col-md-12 pt-1">
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="Male" required>
                                                    <label class="form-check-label" for="gender"> Male </label>
                                                    <div class="invalid-feedback"> Please select your gender. </div>
                                                </div>
                                                <div class="form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" name="gender" value="Female" required>
                                                    <label class="form-check-label" for="gender"> Female </label>
                                                    <div class="invalid-feedback"> &nbsp </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Birthdate and Age-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Birth Date:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="date" name='birthday' id="birthdate" class="form-control form-control-sm" aria-label="Birthdate" required>
                                                <div class="invalid-feedback">
                                                    Please input your birthdate.
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Age:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='age' id="age1" class="form-control form-control-sm" aria-label="Age" required>
                                                <div class="invalid-feedback">
                                                    Please input your age.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Birthplace-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 pt-1">Birth Place:</label>
                                            <div class="col-lg-3">
                                                <input type="text" name='birthplace' id="birthplace1" class="form-control form-control-sm" aria-label="Birthpalace" required>
                                                <div class="invalid-feedback">
                                                    Please input your birthplace.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Contact Number and Landline-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Contact Number:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="tel" name='contactnum' id="contact" class="form-control form-control-sm" aria-label="Contact Number" required>
                                                <div class="invalid-feedback">
                                                    Please input your contact number.
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Landline:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="tel" name='landline' id="landline1" class="form-control form-control-sm" aria-label="Landline" required>
                                                <div class="invalid-feedback">
                                                    Please input your landline number.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email Address-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 pt-1">Email Address:</label>
                                            <div class="col-lg-4">
                                                <input type="email" name='email' id="email1" class="form-control form-control-sm" aria-label="Email Address" required>
                                                <div class="invalid-feedback">
                                                    Please input you valid email address.
                                                </div>
                                            </div>
                                            <hr class="mt-4 mb-3">
                                        </div>

                                        <!-- Permanent Address -->
                                        <p class="fw-bold">PERMANENT ADDRESS</p>

                                        <!--Unit and Street-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12  pt-1">Unit #:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='unit' id="unit1" class="form-control form-control-sm" aria-label="Unit Number" required>
                                                <div class="invalid-feedback">
                                                    Please input your unit #.
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Street:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='street' id="street1" class="form-control form-control-sm" aria-label="Street" required>
                                                <div class="invalid-feedback">
                                                    Please input your street.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Barangay and City-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12  pt-1">Barangay:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='barangay' id="brgy" class="form-control form-control-sm" aria-label="Barangay" required>
                                                <div class="invalid-feedback">
                                                    Please input your barangay.
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">City:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='city' id="city1" class="form-control form-control-sm" aria-label="City" required>
                                                <div class="invalid-feedback">
                                                    Please input your city.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Zipcode and Province-->
                                        <div class="row mt-2 small asterisk">

                                            <label class="form-label col-lg-2 col-md-6 pt-1">Zipcode:</label>
                                            <div class="col-lg-3 col-md-6">
                                                <input type="text" name='zipcode' id="zip" class="form-control form-control-sm" aria-label="Zipcode" required>
                                                <div class="invalid-feedback">
                                                    Please input your zipcode.
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-6 pt-1">Province:</label>
                                            <div class="col-lg-3 col-md-6">
                                                <input type="text" name='province' id="province1" class="form-control form-control-sm" aria-label="Province" required>
                                                <div class="invalid-feedback">
                                                    Please input your province.
                                                </div>
                                            </div>
                                        </div>

                                        <!--  Next Step button-->
                                        <br>
                                        <div class="d-flex stepButtons">
                                            <button type="button" class="btn btn-warning ms-auto mb-2" onclick="educationalAttainment();">
                                                <div class=" d-flex align-items-center ">
                                                    <div class="flex-shrink-0">
                                                        <span class="next text-dark">Next Step </span> <br> Educational Attainment
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <i class="fas fa-angle-double-right fa-lg"></i>
                                                    </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--personalInfoContents-->
                            </div>
                            <!--personalInfoWrapper-->


                            <!-- ------------------------------------------------------------------------------------------------------- -->

                            <!-- Educational Attainment -->
                            <div id='educationalattainment' class=" container pt-3" style="display: none;">
                                <div class="step_progressbar">
                                    <ul>
                                        <li>Personal Information</li>
                                        <li class="active">Education Attainment</li>
                                        <li>Requirements</li>
                                    </ul>
                                </div>
                                <div class="Wrapper">
                                    <div class="tabTitle">
                                        <p class="text-white"><i class="fa fa-user-graduate"></i> <span class="px-2"> Educational Attainment </span></p>
                                    </div>
                                    <div class="Contents">
                                        <p class="fw-bold">SCHOOL LAST ATTENDED</p>

                                        <!--Name of School and Track-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Name of School:</label>
                                            <div class="col-lg-4 col-md-12">
                                                <input type="text" name="school" id="nameschool" class="form-control form-control-sm" aria-label="Name of School" required>
                                                <div class="invalid-feedback">
                                                    Please input your school name.
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Program/Track:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <select class="form-select form-select-sm" name="track" aria-label="Program Track" required>
                                                    <option selected disabled></option>
                                                    <option value="">ABM</option>
                                                    <option value="">HUMSS</option>
                                                    <option value="">STEM</option>
                                                    <option value="">ICT</option>
                                                    <option value="">GAS</option>
                                                    <option value="">N/A</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select your track.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- School Adress-->
                                        <div class="row mt-2 small asterisk">
                                            <div class="col-lg-2">
                                                <label class="form-label pt-1">School Address:</label>
                                            </div>
                                            <div class="col-lg-10">
                                                <input type="text" name="school_address" id="schooladdress" class="form-control form-control-sm" aria-label="School Address" required>
                                                <div class="invalid-feedback">
                                                    Please input your school address.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Year Level and Graduated-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12  pt-1">Year Level:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name="year_level" id="yearlvl" class="form-control form-control-sm" aria-label="Year level" required>
                                                <div class="invalid-feedback">
                                                    Please input year level.
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>


                                            <label class="form-label col-lg-2 col-md-12 pt-1">Year Graduated:</label>

                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name="year_graduated" id="yeargrad" class="form-control form-control-sm" aria-label="Year Graduated" required>
                                                <div class="invalid-feedback">
                                                    Please input graduated year.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Category-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12  pt-1">Category:</label>
                                            <div class="col-lg-4 col-md-12 pt-1">
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" type="radio" name="category" value="K-12" required>
                                                    <label class="form-check-label" for="category"> K-12 </label>
                                                    <div class="invalid-feedback"> Please select your category. </div>
                                                </div>
                                                <div class="form-check-inline mb-3">
                                                    <input class="form-check-input" type="radio" name="category" value="Old Curriculum" required>
                                                    <label class="form-check-label" for="category"> Old Curriculum </label>
                                                    <div class="invalid-feedback"> &nbsp </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- GPA-->
                                        <div class="row mt-2 small asterisk">
                                            <div class="col-lg-2">
                                                <label class="form-label pt-1">GPA:</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="tel" name="gpa" id="gpa1" maxlength="4" class="form-control form-control-sm" aria-label="GPA" required>
                                                <div class="invalid-feedback">
                                                    Please input your gpa.
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Step button-->
                                        <div class="pt-5 mt-5"></div>
                                        <div class="d-flex stepButtons justify-content-between">
                                            <button type="button" class="btn btn-warning mb-3" onclick="personalInfo()">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-1 px-0">
                                                        <i class="fas fa-angle-double-left fa-lg"></i>
                                                    </div>
                                                    <div class="flex-shrink-0 text-end">
                                                        <span class="next text-dark">Previous Step </span> <br> Personal Information
                                                    </div>
                                                </div>
                                            </button>

                                            <button type="button" class="btn btn-warning ms-auto mb-3" onclick="requirement()">
                                                <div class=" d-flex align-items-center ">
                                                    <div class="flex-shrink-0 text-start d-md-block">
                                                        <span class="next text-dark">Next Step </span> <br> Requirements
                                                    </div>
                                                    <div class="flex-grow-1 ms-1 px-0">
                                                        <i class="fas fa-angle-double-right fa-lg"></i>
                                                    </div>
                                                </div>
                                            </button>

                                        </div>
                                    </div>
                                    <!--Education Contents-->
                                </div>
                                <!--Education Wrapper-->
                            </div>
                            <!-- educational attainment div -->


                            <!-- ------------------------------------------------------------------------------------------------------- -->
                            <!-- Requirements -->
                            <div id='requirement' class=" container pt-3 " style="display: none;">
                                <div class="step_progressbar">
                                    <ul>
                                        <li>Personal Information</li>
                                        <li>Education Attainment</li>
                                        <li class="active">Requirements</li>
                                    </ul>
                                </div>
                                <div class="Wrapper">
                                    <div class="tabTitle">
                                        <p class="text-white"><i class="fas fa-file"></i> <span class="px-2">Requirements </span></p>
                                    </div>
                                    <div class="Contents">
                                        <p class="fw-bold">ADMISSION REQUIREMENTS</p>

                                        <!--Medical Record-->
                                        <div class="row mt-4 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Medical Record:</label>
                                            <div class="col-lg-7 mb-3">
                                                <input name="medical_record" id="medical" class="form-control form-control-sm" type="file" aria-label="Medical Record" required>
                                            </div>
                                        </div>

                                        <!--Form 137-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Form 137:</label>
                                            <div class="col-lg-7 mb-3">
                                                <input name="form_137" id="form137" class="form-control form-control-sm" type="file" aria-label="Form 137" required>
                                            </div>
                                        </div>

                                        <!--Good Moral-->
                                        <div class="row mt-2 small asterisk">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Good Moral:</label>
                                            <div class="col-lg-7 mb-3">
                                                <input name="good_moral" id="goodmoral" class="form-control form-control-sm" type="file" aria-label="Good Moral" required>
                                            </div>
                                        </div>

                                        <!--  Step buttons-->
                                        <div class="pt-5 mt-5"></div>
                                        <div class="d-flex stepButtons justify-contend-between">
                                            <button type="button" class="btn btn-warning mb-2" onclick="educationalAttainment()">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="fas fa-angle-double-left fa-lg"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 text-end">
                                                        <span class="next text-dark">Previous Step </span> <br> Educational Attainment
                                                    </div>
                                                </div>
                                            </button>
                                            <button type="button" class="btn btn-warning ms-auto mb-3" data-bs-toggle="modal" data-bs-target="#confirmationPage">
                                                <div class=" d-flex align-items-center ">
                                                    <div class="flex-shrink-0 text-start d-md-block">
                                                        <span class="next text-dark">PROCEED
                                                    </div>
                                                    <div class="flex-grow-1 ms-1 px-0">
                                                        <i class="fas fa-angle-double-right fa-lg"></i>
                                                    </div>
                                                </div>
                                            </button>

                                        </div>
                                    </div>
                                    <!-- Requiremets Contents-->
                                </div>
                                <!--Requirements Wrapper-->
                            </div>
                            <!-- requirements div -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <template id="fieldFeedbackTemplate">
        <div id="error-message">
            <small class="text-danger">
                <!-- Add error message here using selector-->
            </small>
        </div>
    </template>
    
    <!-- Confirmation Page -->

    <!-- Modal -->
    <div class="modal fade" id="confirmationPage" data-bs-backdrop="static" aria-modal="true" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center text-uppercase">
                    <h5 class="modal-title">Confirmation Page</h5>
                </div>
                <div class="modal-body">
      
                </div>
                <div class="modal-footer d-flex justify-content-middle">
                    <button type="button" class="btn btn-warning text-uppercase">CONFIRM</button>
                    <button type="button" class="btn btn-secondary text-uppercase" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">

    $('#confirmationPage').on('shown.bs.modal', function (e) {
    var fname = $("#fname").val(); 
    var midname = $("#midname").val(); 
    var surname = $("#surname").val(); 
    var suffix = $("#suffix").val(); 
    var lrn = $("#lrn").val(); 
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
    var schooladdress = $("#schooladdress").val(); 
    var yearlvl = $("#yearlvl").val(); 
    var yeargrad = $("#yeargrad").val(); 
    var gpa1 = $("#gpa1").val(); 
    var medical = $("#medical").val(); 
    var form137 = $("#form137").val(); 
    var goodmoral = $("#goodmoral").val(); 

    $(".modal-body").html(
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Name:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+fname+' '+midname+' '+surname+' '+suffix+' </div> </div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">LRN:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+lrn+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Birth Date:</label><div class=""col-lg-9 col-md-9 fw-bold text-uppercase"> '+birthdate+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Age:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+age1+'</div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Birthplace:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+birthplace1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Landline:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+landline1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Email:</label><div class="col-lg-9 col-md-9 fw-bold"> '+email1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Unit:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+unit1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Street:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+street1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Barangay:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+brgy+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">City:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+city1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Zipcode:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+zip+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Name of School:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+nameschool+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">School Address:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+schooladdress+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Year Level: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+yearlvl+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Year Graduated: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+yeargrad+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">GPA: </label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+gpa1+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Medical Record:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+medical+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Form 137:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+form137+'</div></div>' +
        '<div class="row"> <label class="form-label col-lg-3 col-md-3">Good Moral:</label><div class="col-lg-9 col-md-9 fw-bold text-uppercase"> '+goodmoral+'</div></div>' 
        );     }); 

    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/applicant.js'); ?>"></script>

    <script>


    </script>
</body>

</html>