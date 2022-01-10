<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/applicant.css'); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <title>Applicant Data</title>
</head>

<body>
    <div class="d-flex justify-content-between text-white header px-3 py-2">
        <div class="brand py-2">
            Technological University of the Philippines
        </div>
        <a href="<?php echo base_url('Logout'); ?>" class="nav_link btn btn-outline-light logout mx-2 fw-bold" id="logout"><span class="nav_name">Logout</span> </a>

    </div>
    <div class="container-fluid">
        <div class="row height-100vh">
            <div class="col-lg-3 col-md-3 col-sm-0 col-xl-2 px-0 bg-default d-flex sticky-top">
                <div class="d-flex flex-md-column flex-row flex-grow-1 align-items-center text-dark">
                    <div href="/" class="d-block align-items-center pb-sm-3 text-dark text-decoration-none">
                        <div class="d-none d-md-inline">
                            <img src="../assets/images/applicantAvatar.svg" alt="" class="pt-4 mx-4" style="width: 125px;">
                            <br>
                            <p class="text-center pt-4 h5">Welcome,</p>
                            <p class="text-center pt-2 fw-bold h5"> <?php echo $applicant->applicantNumber?></p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
 
            <!-- Contents -->
            <div class="col d-flex flex-column">
                
                <div class="container-fluid" id="steps" style="display: block;">
                    <?php if($this->session->flashdata('status')) : ?>
                        <br>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <?= $this->session->flashdata('status'); ?>
                            <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    <div class="mt-3 applicant-head text-white px-3">
                        Appicant ID: <span class="fw-bold"><?php echo $applicant->applicantNumber?></span>
                        <!--APPLICANT NUMBER READ -->
                    </div>

                    <!--Information -->
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
                        <!-- Personal Information -->
                        <div id='personalInfo' class=" container pt-3" style="display: block;">
                            <div class="Wrapper">
                                <div class="tabTitle">
                                    <p class="text-white"><i class="fa fa-user"></i> <span class="px-2"> Personal Information </span></p>
                                </div>
                                <div class="Contents">
                                    <fieldset disabled>
                                        <!-- Course Dropdown, next change: use AJAX and JQUERY to retrieve data from database-->
                                        <div class="mb-3 row">
                                            <label for="courses" class="col-2 form-label small pt-2">Course: </label>
                                            <div class="col-lg-7 col-md-10 col-sm-12">
                                                <select class="form-select form-select-sm" id="courses" name="course_chosen" value="bscs" aria-label="Select Course" disabled>
                                                    <option selected> <?php echo $applicant->course_chosen?></option>

                                                </select>
                                            </div>
                                            <hr class="mt-4 mb-1">
                                        </div>

                                        <!-- Name Input-->
                                        <div class="row mt-0">
                                            <!-- <div class="col-lg-2 col-md-none form-label small ">                                                   
                                                    <label for="Name" class="form-control-sm">Name: </label>
                                            </div> -->
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">First Name</label>
                                                <input type="text" name="firstname" value="<?php echo $applicant->firstname?>" class="form-control form-control-sm" aria-label="First name" readonly>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">Middle Name</label>
                                                <input type="text" name='middlename' value="<?php echo $applicant->middlename?>" class="form-control form-control-sm" aria-label="Last name" readonly>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <label class="form-label small">Surname</label>
                                                <input type="text" name="lastname" value="<?php echo $applicant->lastname?>" class="form-control form-control-sm" aria-label="Surname" readonly>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-1">
                                                <labe class="form-label small">Suffix</label>
                                                    <input type="text" name='extname' value="<?php echo $applicant->extname?>" class="form-control form-control-sm" aria-label="Extension Name" readonly>
                                            </div>
                                        </div>

                                        <!-- LRN and Gender-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">LRN:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name="LRN" value="<?php echo $applicant->LRN?>" class="form-control form-control-sm" minlength="10" aria-label="LRN" readonly>
                                            </div>

                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Gender:</label>
                                            <?php if ($applicant->gender == 'Male'):?>
                                            <div class="col-lg-3 col-md-12 pt-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="Male" checked>Male
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="Female">Female
                                                </div>
                                            </div>
                                            <?php else: ?>
                                            <div class="col-lg-3 col-md-12 pt-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="Male" >Male
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="Female"checked>Female
                                                </div>
                                            </div>
                                            <?php endif ?>
                                        </div>

                                        <!-- Birthdate and Age-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Birth Date:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="date" name='birthday' value="<?php echo $applicant->birthday?>" class="form-control form-control-sm" aria-label="Birthdate" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Age:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='age' value="<?php echo $applicant->age?>"class="form-control form-control-sm" aria-label="Age" readonly>
                                            </div>
                                        </div>

                                        <!-- Birthplace-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 pt-1">Birth Place:</label>
                                            <div class="col-lg-3">
                                                <input type="text" name='birthplace'value="<?php echo $applicant->birthplace?>" class="form-control form-control-sm" aria-label="Birthpalace" readonly>
                                            </div>
                                        </div>

                                        <!-- Contact Number and Landline-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 col-md-12 pt-1">Contact Number:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="tel" name='contactnum' value="<?php echo $applicant->contactnum?>" class="form-control form-control-sm" aria-label="Contact Number" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Landline:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="tel" name='landline' value="<?php echo $applicant->landline?>" class="form-control form-control-sm" aria-label="Landline" readonly>
                                            </div>
                                        </div>

                                        <!-- Email Address-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 pt-1">Email Address:</label>
                                            <div class="col-lg-4">
                                                <input type="email" name='email' value="<?php echo $applicant->email?>" class="form-control form-control-sm" aria-label="Email Address" readonly>
                                            </div>
                                            <hr class="mt-4 mb-3">
                                        </div>

                                        <!-- Permanent Address -->
                                        <p class="fw-bold">PERMANENT ADDRESS</p>

                                        <!--Unit and Street-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 col-md-12  pt-1">Unit #:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='unit' value="<?php echo $applicant->unit?>" class="form-control form-control-sm" aria-label="Unit Number" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">Street:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='street' class="form-control form-control-sm" value="<?php echo $applicant->street?>" aria-label="Street" readonly>
                                            </div>
                                        </div>

                                        <!-- Barangay and City-->
                                        <div class="row mt-2 small">
                                            <label class="form-label col-lg-2 col-md-12  pt-1">Barangay:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='barangay' value="<?php echo $applicant->barangay?>" class="form-control form-control-sm" aria-label="Barangay" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-12 pt-1">City:</label>
                                            <div class="col-lg-3 col-md-12">
                                                <input type="text" name='city' class="form-control form-control-sm" value="<?php echo $applicant->city?>" aria-label="City" readonly>
                                            </div>
                                        </div>

                                        <!-- Zipcode and Province-->
                                        <div class="row mt-2 small">

                                            <label class="form-label col-lg-2 col-md-6 pt-1">Zipcode:</label>
                                            <div class="col-lg-3 col-md-6">
                                                <input type="text" name='zipcode' value="<?php echo $applicant->zipcode?>" class="form-control form-control-sm" aria-label="Zipcode" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-none"> </div>

                                            <label class="form-label col-lg-2 col-md-6 pt-1">Province:</label>
                                            <div class="col-lg-3 col-md-6">
                                                <input type="text" name='province' value="<?php echo $applicant->province?>" class="form-control form-control-sm" aria-label="Province" readonly>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!--  Next Step button-->
                                    <br>
                                    <div class="d-flex stepButtons">
                                        <button type="button" class="btn btn-warning ms-auto mb-2 text-center" style="width: 7rem;" onclick="educationalAttainment()">
                                            Next
                                            <i class="fas fa-angle-double-right fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Educational Attainment -->
                <div id='educationalattainment' class=" container pt-3" style="display: none;">
                    <div class="Wrapper">
                        <div class="tabTitle">
                            <p class="text-white"><i class="fa fa-user-graduate"></i> <span class="px-2"> Educational Attainment </span></p>
                        </div>
                        <div class="Contents">
                            <fieldset disabled>
                                <p class="fw-bold">SCHOOL LAST ATTENDED</p>

                                <!--Name of School and Track-->
                                <div class="row mt-2 small">
                                    <label class="form-label col-lg-2 col-md-12 pt-1">Name of School:</label>
                                    <div class="col-lg-4 col-md-12">
                                        <input type="text" name="school" value="<?php echo $applicant->last_school_attended?>" class="form-control form-control-sm" aria-label="Name of School" readonly>
                                    </div>
                                    <div class="col-lg-1 col-md-none"> </div>

                                    <label class="form-label col-lg-2 col-md-12 pt-1">Program/Track:</label>
                                    <div class="col-lg-3 col-md-12">
                                        <select class="form-select form-select-sm" name="track"  aria-label="Program Track" value="abm" disabled>
                                            <option value="<?php echo $applicant->track?>" selected><?php echo $applicant->track?></option>
                                        </select>
                                    </div>
                                </div>

                                <!-- School Adress-->
                                <div class="row mt-2 small">
                                    <div class="col-lg-2">
                                        <label class="form-label pt-1">School Address:</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" name="school_address" value="<?php echo $applicant->school_address?>" class="form-control form-control-sm" aria-label="School Address" readonly>
                                    </div>
                                </div>

                                <!-- Year Level and Graduated-->
                                <div class="row mt-2 small">
                                    <label class="form-label col-lg-2 col-md-12  pt-1">Year Level:</label>
                                    <div class="col-lg-3 col-md-12">
                                        <input type="text" name="year_level" value="<?php echo $applicant->year_level?>" class="form-control form-control-sm" aria-label="Year level" readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-none"> </div>


                                    <label class="form-label col-lg-2 col-md-12 pt-1">Year Graduated:</label>

                                    <div class="col-lg-3 col-md-12">
                                        <input type="text" name="year_graduated" value="<?php echo $applicant->year_graduated?>" class="form-control form-control-sm" aria-label="Year Graduated" readonly>
                                    </div>
                                </div>

                                <!-- Category-->
                                <div class="row mt-2 small">
                                    <label class="form-label col-lg-2 col-md-12  pt-1">Category:</label>
                                    <?php if($applicant->category=='K-12'):?>
                                    <div class="col-lg-3 col-md-12 pt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" value="K-12" checked>K-12
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" value="Old Curriculum">Old Curriculum
                                        </div>
                                    </div>
                                    <?php else:?>
                                    <div class="col-lg-3 col-md-12 pt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" value="K-12">K-12
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" value="Old Curriculum" checked>Old Curriculum
                                        </div>
                                    </div>
                                    <?php endif ?>
                                </div>

                                <!-- GPA-->
                                <div class="row mt-2 small">
                                    <div class="col-lg-2">
                                        <label class="form-label pt-1">GPA:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="tel" name="gpa" value="<?php echo $applicant->gpa?>" maxlength="4" class="form-control form-control-sm" aria-label="GPA" readonly>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step button-->
                            <div class="pt-5 mt-5"></div>
                            <div class="d-flex stepButtons justify-content-between">
                                <button type="button" class="btn btn-warning mb-3 text-center" style="width: 7rem;" onclick="personalInfo()">
                                    <i class="fas fa-angle-double-left fa-lg"></i>
                                    Previous
                                </button>

                                <button type="button" class="btn btn-warning ms-auto mb-3 text-center" style="width: 7rem;" onclick="requirement()">
                                    Next
                                    <i class="fas fa-angle-double-right fa-lg"></i>
                                </button>
                            </div>
                        </div>
                        <!--Education Contents-->
                    </div>
                    <!--Education Wrapper-->
                </div>
                <!-- educational attainment div -->


                <!-- Requirements -->
                <div id='requirement' class=" container pt-3 " style="display: none;">
                    <div class="Wrapper">
                        <div class="tabTitle">
                            <p class="text-white"><i class="fas fa-file"></i> <span class="px-2">Requirements </span></p>
                        </div>
                        <div class="Contents">

                            <p class="fw-bold">ADMISSION REQUIREMENTS</p>

                            <!--Medical Record-->
                            <div class="row mt-4 small">
                                <label class="form-label col-lg-2 col-md-12 pt-1">Medical Record:</label>
                                <div class="col-lg-7 mb-3">
                                    <input name="medical_record" class="form-control form-control-sm" value="<?php echo $applicant->medical_record?>" type="text" aria-label="Medical Record" disabled readonly>
                                </div>
                            </div>

                            <!--Form 137-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12 pt-1">Form 137:</label>
                                <div class="col-lg-7 mb-3">
                                    <input name="form_137" class="form-control form-control-sm" value="<?php echo $applicant->form_137?>" type="text" aria-label="Form 137" disabled readonly>
                                </div>
                            </div>

                            <!--Good Moral-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12 pt-1">Good Moral:</label>
                                <div class="col-lg-7 mb-3">
                                    <input name="good_moral" class="form-control form-control-sm" value="<?php echo $applicant->good_moral?>" type="text" aria-label="Good Moral" disabled readonly>
                                </div>
                            </div>

                            <!--  Step buttons-->
                            <div class="pt-5 mt-5"></div>
                            <div class="d-flex stepButtons justify-content-between">
                                <button type="button" class="btn btn-warning mb-3 text-center" style="width: 7rem;" onclick="educationalAttainment()">
                                    <i class="fas fa-angle-double-left fa-lg"></i>
                                    Previous
                                </button>

                                <button type="button" class="btn btn-warning ms-auto mb-3 text-center" style="width: 7rem;" onclick="final_step()">
                                    Next
                                    <i class="fas fa-angle-double-right fa-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FINAL PROEDURE -->
                <div id='final_step' class="container mt-4 pt-1" style="display: none;">
                    <div class="mx-2 mb-3">
                        <button type="button" class="btn btn btn-danger" style="background:maroon; border:none; font-size:0.8rem" onclick="requirement()"> <i class="fa fa-arrow-left"></i> Back</button>
                    </div>
                    <div class="Wrapper">
                        <div class="tabTitle px-2">
                            <p class="text-white">Applicant Name: <?php echo $applicant->firstname?> <?php echo $applicant->middlename?> <?php echo $applicant->lastname?> <?php echo $applicant->extname?></p>
                        </div>
                        <div class="Contents">
                            <p class="note1 small">Please take note of your Applicant ID.</p>
                            <h3 class="fw-bold pt-3"> Applicant ID: <?php echo $applicant->applicantNumber?> </h4>
                                <p class="note2 pt-4"> Take the TUPSTAT on scheduled date, time, and specific venue. Bring with you the following: <br>
                                    a.) Test Permit <br>
                                    b.) 2 Sharpened pencil with eraser</p>
                                <p class="note3 pt-2 fw-bold"> Kindly check your email for the test permit or download it here.</p>
                                
                                <button type="button" class="btn btn-warning download mb-2" onclick="location.href='<?php echo site_url('applicantcontroller/downloadTestPermit/'.$applicant->applicantID)?>'">Download Test Permit </button>
                                

                                <p class="note4 pt-3 fw-bold"> Note: Please come one hour before the time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/applicant.js'); ?>"></script>
</body>

</html>