<?php
include __DIR__ . '/../includes/studentSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/studentMyProfile.css'); ?>" rel="stylesheet" type="text/css">
    <title>My Profile</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <h3>My Profile</h3>
    <div class="viewStudentContent d-flex align-items-center">
        <div class="px-3">
            <img id="viewStudentAvatar" src="../assets/images/studentAvatar.svg" alt="Student Avatar">
        </div>

        <div class="table-responsive">
            <table id="viewStudentInformation" class="table-body">
                <tr>
                    <td class="px-3 pt-2">
                        <p><b>Username:</b></p>
                        <p><b>Student ID:</b></p>
                        <p><b>Course:</b></p>
                        <p><b>Section:</b></p>
                    </td>
                    <td class="pt-2 px-2">
                        <p>TUPM-STUDENT21-1234</p>
                        <p>Lida Cruz</p>
                        <p>BS-Computer Science</p>
                        <p>3A</p>
                    </td>
                </tr>
            </table>
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
                                        <option selected> <?php echo $applicant->course_chosen ?></option>

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
                                    <input type="text" name="firstname" value="<?php echo $applicant->firstname ?>" class="form-control form-control-sm" aria-label="First name" readonly>
                                </div>
                                <div class="col-lg-3 col-md-6 py-1">
                                    <label class="form-label small">Middle Name</label>
                                    <input type="text" name='middlename' value="<?php echo $applicant->middlename ?>" class="form-control form-control-sm" aria-label="Last name" readonly>
                                </div>
                                <div class="col-lg-3 col-md-6 py-1">
                                    <label class="form-label small">Surname</label>
                                    <input type="text" name="lastname" value="<?php echo $applicant->lastname ?>" class="form-control form-control-sm" aria-label="Surname" readonly>
                                </div>
                                <div class="col-lg-3 col-md-6 py-1">
                                    <labe class="form-label small">Suffix</label>
                                        <input type="text" name='extname' value="<?php echo $applicant->extname ?>" class="form-control form-control-sm" aria-label="Extension Name" readonly>
                                </div>
                            </div>

                            <!-- LRN and Gender-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12 pt-1">LRN:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name="LRN" value="<?php echo $applicant->LRN ?>" class="form-control form-control-sm" minlength="10" aria-label="LRN" readonly>
                                </div>

                                <div class="col-lg-2 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-12 pt-1">Gender:</label>
                                <?php if ($applicant->gender == 'Male') : ?>
                                    <div class="col-lg-3 col-md-12 pt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="Male" checked>Male
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="Female">Female
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="col-lg-3 col-md-12 pt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="Male">Male
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="Female" checked>Female
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>

                            <!-- Birthdate and Age-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12 pt-1">Birth Date:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="date" name='birthday' value="<?php echo $applicant->birthday ?>" class="form-control form-control-sm" aria-label="Birthdate" readonly>
                                </div>
                                <div class="col-lg-2 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-12 pt-1">Age:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name='age' value="<?php echo $applicant->age ?>" class="form-control form-control-sm" aria-label="Age" readonly>
                                </div>
                            </div>

                            <!-- Birthplace-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 pt-1">Birth Place:</label>
                                <div class="col-lg-3">
                                    <input type="text" name='birthplace' value="<?php echo $applicant->birthplace ?>" class="form-control form-control-sm" aria-label="Birthpalace" readonly>
                                </div>
                            </div>

                            <!-- Contact Number and Landline-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12 pt-1">Contact Number:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="tel" name='contactnum' value="<?php echo $applicant->contactnum ?>" class="form-control form-control-sm" aria-label="Contact Number" readonly>
                                </div>
                                <div class="col-lg-2 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-12 pt-1">Landline:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="tel" name='landline' value="<?php echo $applicant->landline ?>" class="form-control form-control-sm" aria-label="Landline" readonly>
                                </div>
                            </div>

                            <!-- Email Address-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 pt-1">Email Address:</label>
                                <div class="col-lg-4">
                                    <input type="email" name='email' value="<?php echo $applicant->email ?>" class="form-control form-control-sm" aria-label="Email Address" readonly>
                                </div>
                                <hr class="mt-4 mb-3">
                            </div>

                            <!-- Permanent Address -->
                            <p class="fw-bold">PERMANENT ADDRESS</p>

                            <!--Unit and Street-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12  pt-1">Unit #:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name='unit' value="<?php echo $applicant->unit ?>" class="form-control form-control-sm" aria-label="Unit Number" readonly>
                                </div>
                                <div class="col-lg-2 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-12 pt-1">Street:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name='street' class="form-control form-control-sm" value="<?php echo $applicant->street ?>" aria-label="Street" readonly>
                                </div>
                            </div>

                            <!-- Barangay and City-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12  pt-1">Barangay:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name='barangay' value="<?php echo $applicant->barangay ?>" class="form-control form-control-sm" aria-label="Barangay" readonly>
                                </div>
                                <div class="col-lg-2 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-12 pt-1">City:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name='city' class="form-control form-control-sm" value="<?php echo $applicant->city ?>" aria-label="City" readonly>
                                </div>
                            </div>

                            <!-- Zipcode and Province-->
                            <div class="row mt-2 small">

                                <label class="form-label col-lg-2 col-md-6 pt-1">Zipcode:</label>
                                <div class="col-lg-3 col-md-6">
                                    <input type="text" name='zipcode' value="<?php echo $applicant->zipcode ?>" class="form-control form-control-sm" aria-label="Zipcode" readonly>
                                </div>
                                <div class="col-lg-2 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-6 pt-1">Province:</label>
                                <div class="col-lg-3 col-md-6">
                                    <input type="text" name='province' value="<?php echo $applicant->province ?>" class="form-control form-control-sm" aria-label="Province" readonly>
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
                            <input type="text" name="school" value="<?php echo $applicant->last_school_attended ?>" class="form-control form-control-sm" aria-label="Name of School" readonly>
                        </div>
                        <div class="col-lg-1 col-md-none"> </div>

                        <label class="form-label col-lg-2 col-md-12 pt-1">Program/Track:</label>
                        <div class="col-lg-3 col-md-12">
                            <select class="form-select form-select-sm" name="track" aria-label="Program Track" value="abm" disabled>
                                <option value="<?php echo $applicant->track ?>" selected><?php echo $applicant->track ?></option>
                            </select>
                        </div>
                    </div>

                    <!-- School Adress-->
                    <div class="row mt-2 small">
                        <div class="col-lg-2">
                            <label class="form-label pt-1">School Address:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="school_address" value="<?php echo $applicant->school_address ?>" class="form-control form-control-sm" aria-label="School Address" readonly>
                        </div>
                    </div>

                    <!-- Year Level and Graduated-->
                    <div class="row mt-2 small">
                        <label class="form-label col-lg-2 col-md-12  pt-1">Year Level:</label>
                        <div class="col-lg-3 col-md-12">
                            <input type="text" name="year_level" value="<?php echo $applicant->year_level ?>" class="form-control form-control-sm" aria-label="Year level" readonly>
                        </div>
                        <div class="col-lg-2 col-md-none"> </div>


                        <label class="form-label col-lg-2 col-md-12 pt-1">Year Graduated:</label>

                        <div class="col-lg-3 col-md-12">
                            <input type="text" name="year_graduated" value="<?php echo $applicant->year_graduated ?>" class="form-control form-control-sm" aria-label="Year Graduated" readonly>
                        </div>
                    </div>

                    <!-- Category-->
                    <div class="row mt-2 small">
                        <label class="form-label col-lg-2 col-md-12  pt-1">Category:</label>
                        <?php if ($applicant->category == 'K-12') : ?>
                            <div class="col-lg-3 col-md-12 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" value="K-12" checked>K-12
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" value="Old Curriculum">Old Curriculum
                                </div>
                            </div>
                        <?php else : ?>
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
                            <input type="tel" name="gpa" value="<?php echo $applicant->gpa ?>" maxlength="4" class="form-control form-control-sm" aria-label="GPA" readonly>
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
                        <input name="medical_record" class="form-control form-control-sm" value="<?php echo $applicant->medical_record ?>" type="text" aria-label="Medical Record" disabled readonly>
                    </div>
                </div>

                <!--Form 137-->
                <div class="row mt-2 small">
                    <label class="form-label col-lg-2 col-md-12 pt-1">Form 137:</label>
                    <div class="col-lg-7 mb-3">
                        <input name="form_137" class="form-control form-control-sm" value="<?php echo $applicant->form_137 ?>" type="text" aria-label="Form 137" disabled readonly>
                    </div>
                </div>

                <!--Good Moral-->
                <div class="row mt-2 small">
                    <label class="form-label col-lg-2 col-md-12 pt-1">Good Moral:</label>
                    <div class="col-lg-7 mb-3">
                        <input name="good_moral" class="form-control form-control-sm" value="<?php echo $applicant->good_moral ?>" type="text" aria-label="Good Moral" disabled readonly>
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
</div>


<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>