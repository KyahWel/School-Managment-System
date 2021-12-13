<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/applicant.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="d-flex justify-content-between text-white header px-3 py-2">
        <div class="brand">
            Technological University of the Philippines
        </div>
        <!-- <div class="cancel">
            Cancel Application
        </div> -->
    </div>
    <div class="container-fluid">
        <div class="row height-100">
            <div class="col-lg-3 col-md-3 col-sm-0 col-xl-2 px-0 bg-default d-flex sticky-top">
                <div class="d-flex flex-md-column flex-row flex-grow-1 align-items-center text-dark">
                    <div href="/" class="d-block align-items-center pb-sm-3 text-dark text-decoration-none">
                        <div class="d-none d-md-inline">
                            <img src="assets/images/applicantAvatar.svg" alt="" class="pt-4 mx-4" style="width: 125px;">
                            <br>
                            <p class="text-center pt-4 h5">Welcome,</p>
                            <p class="text-center pt-2 fw-bold h5">Applicant-21-2322 </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contents -->
            <div class="col d-flex flex-column h-sm-100 ">
                <div class="mt-3 applicant-head text-white px-3">
                    Appicant ID: <span class="fw-bold"> Applicant-21-2123 </span>
                    <!--APPLICANT NUMBER READ -->
                </div>

                <!--Information -->
                <div class=" mt-3 applicant-head text-dark px-3 rounded-3 information ">
                    <i class="fa fa-info-circle float-start clearfix" aria-hidden="true"></i>
                    <p>
                        1. Kindly type 'NA' in boxes where there are no possible answers to the information being requested. <br>
                        2. Enter a valid email address to receive the test permit.
                    </p>
                </div>


                <div class="row contents">

                    <div class="col">
                        <form method='POST' enctype="multipart/form-data">
                            <!-- ------------------------------------------------------------------------------------------------------- -->
                            <!-- 1st Div -->

                            <div id='personalInfo' class=" container pt-3" style="display: block;">
                                <div class=" personalInfoWrapper">
                                    <div class="personalInfoTitle">
                                        <p class="text-white"> Personal Information</p>
                                    </div>
                                    <div class="personalInfoContents">
                                        <!-- Course Dropdown, next change: use AJAX and JQUERY to retrieve data from database-->
                                        <div class="mb-3 row">
                                            <label for="courses" class="col-2 form-label small pt-2">Course: </label>
                                            <div class="col-lg-7 col-md-10 col-sm-12">
                                                <select class="form-select form-select-sm" id="courses" name="course_chosen" aria-label="Select Course">
                                                    <option value="" selected>--Please Select--</option>
                                                    <?php foreach ($course as $course) { ?>
                                                        <option value='<?php echo $course->degree ?> in <?php echo $course->major ?>'><?php echo $course->degree ?> in <?php echo $course->major ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <hr class="mt-4 mb-2">

                                            <!-- Name Input-->
                                            <div class="row mt-0">
                                                <!-- <div class="col-lg-2 col-md-12 form-label small ">
                                                    <label for="Name" class="form-control-sm px-0">Name: </label>
                                                </div> -->
                                                <div class="col-lg-3 col-md-6 pt-1">
                                                    <label for="inputEmail4" class="form-label small">First Name</label>
                                                    <input type="text" name="firstname" class="form-control form-control-sm" placeholder="First name" aria-label="First name">
                                                </div>
                                                <div class="col-lg-3 col-md-6 pt-1">
                                                    <label for="inputEmail4" class="form-label small">Middle Name</label>
                                                    <input type="text" name='middlename' class="form-control form-control-sm" placeholder="Middle name" aria-label="Last name">
                                                </div>
                                                <div class="col-lg-3 col-md-6 pt-1">
                                                    <label for="inputEmail4" class="form-label small">Surname</label>
                                                    <input type="text" name="lastname" class="form-control form-control-sm" placeholder="Surname" aria-label="Surname">
                                                </div>
                                                <div class="col-lg-3 col-md-6 pt-1">
                                                    <label for="inputEmail4" class="form-label small">Suffix</label>
                                                    <input type="text" name='extname' class="form-control form-control-sm" placeholder="Suffix" aria-label="Extension Name">
                                                </div>
                                            </div>

                                            <!-- LRN and Gender-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2 col-md-12">
                                                    <label class="form-label pt-1">LRN Number:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <input type="text" name="LRN" class="form-control form-control-sm" placeholder="LRN-Number" aria-label="LRN">

                                                </div>
                                                <div class="col-lg-2 col-md-none"> </div>

                                                <div class="col-lg-2 col-md-12 ">
                                                <label class="form-label pt-1">Gender:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-12 pt-1">
                                                   
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" value="Male">Male

                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" value="Female">Female

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Birthdate and Age-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2 col-md-12">
                                                    <label class="form-label pt-1">Birth Date:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <input type="date"  name='birthday' class="form-control form-control-sm"  aria-label="Birthdate">

                                                </div>
                                                <div class="col-lg-2 col-md-none"> </div>

                                                <div class="col-lg-2 col-md-12">
                                                <label class="form-label pt-1">Age:</label>

                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <input type="text" name='age' class="form-control form-control-sm"  aria-label="Age">

                                                </div>
                                            </div>
                                                        
                                            <!-- Birthplace-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2">
                                                    <label class="form-label pt-1">Birth Place:</label>
                                                </div>
                                                <div class="col-lg-3">
                                                <input type="text" name='birthplace' class="form-control form-control-sm"  aria-label="Birthpalace">
                                                </div>
                                            </div>

                                            <!-- Contact Number and Landline-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2 col-md-12 ">
                                                    <label class="form-label pt-1">Contact Number:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <input type="tel"  name='contactnum' class="form-control form-control-sm"  aria-label="Contact Number">

                                                </div>

                                                <div class="col-lg-2 col-md-none"> </div>

                                                <div class="col-lg-2 col-md-12">
                                                <label class="form-label pt-1">Landline:</label>

                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <input type="tel" name='landline' class="form-control form-control-sm"  aria-label="Landline">

                                                </div>
                                            </div>

                                            <!-- Email Address-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2">
                                                    <label class="form-label pt-1">Email Address:</label>
                                                </div>
                                                <div class="col-lg-4">
                                                <input type="email" name='birthplace' class="form-control form-control-sm"  aria-label="Email Address" required>
                                                </div>
                                            </div>

                                            <hr class="mt-4 mb-3">

                                            <!-- Permanent Address -->
                                           <p class="fw-bold">PERMANENT ADDRESS</p>

                                           <!--Unit and Street-->
                                           <div class="row mt-2 small">
                                                <div class="col-lg-2 col-md-6 ">
                                                    <label class="form-label pt-1">Unit #:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <input type="text" name='unit' class="form-control form-control-sm"  aria-label="Contact Number">

                                                </div>

                                                <div class="col-lg-2 col-md-none"> </div>

                                                <div class="col-lg-2 col-md-6">
                                                <label class="form-label pt-1">Street:</label>

                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <input type="text" name='street' class="form-control form-control-sm"  aria-label="Landline">

                                                </div>
                                            </div>

                                            <!-- Barangay and City-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2 col-md-6 ">
                                                    <label class="form-label pt-1">Barangay:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <input type="text"  name='barangay' class="form-control form-control-sm"  aria-label="Contact Number">

                                                </div>
                                                <div class="col-lg-2 col-md-none"> </div>
                                                <div class="col-lg-2 col-md-6">
                                                <label class="form-label pt-1">City:</label>

                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <input type="text" name='city' class="form-control form-control-sm"  aria-label="Landline">

                                                </div>
                                            </div>

                                            <!-- Zipcode and Province-->
                                            <div class="row mt-2 small">
                                                <div class="col-lg-2 col-md-6 ">
                                                    <label class="form-label pt-1">Zipcode:</label>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <input type="text" name='zipcode' class="form-control form-control-sm"  aria-label="Contact Number">

                                                </div>
                                                <div class="col-lg-2 col-md-none"> </div>
                                                <div class="col-lg-2 col-md-6">
                                                <label class="form-label pt-1">Province:</label>

                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <input type="text" name='province' class="form-control form-control-sm"  aria-label="Landline">

                                                </div>
                                            </div>
                                        <!--  -->
                                    </div>
                                    <!--personalInfoContents-->
                                </div>
                                <!--personalInfoWrapper-->
                            </div>
                    </div>
                    <footer class="row bg-light py-4 mt-auto">
                        <div class="col"> Footer content here... </div>
                    </footer>
                </div>
            </div>
        </div>

</body>

</html>