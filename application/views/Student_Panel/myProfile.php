<?php
$this->load->view('includes/studentSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/admission.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/studentMyProfile.css'); ?>" rel="stylesheet" type="text/css">
    <title>My Profile</title>
</head>

<div class="height-100 pt-2 container-fluid">
    
    <h3 class="fw-bold my-3">My Profile</h3>
    <div class="viewStudentContent d-flex align-items-center">
        <div class=" profile-pic-div">
            <img src="../assets/images/studentAvatar.svg" alt="Student Avatar" id="photo">
        </div>

        <div class="table-responsive mx-3">
            <table id="viewStudentInformation" class="table-body">
                <tr>
                    <td class="px-3 pt-2">
                        <p><b>Username:</b></p>
                        <p><b>Email:</b></p>
                        <p><b>Course:</b></p>

                    </td>
                    <td class="pt-2 px-2">
                        <p> <?php echo $student->username?></p>
                        <p> <?php echo $student->email ?></p>
                        <p> <?php echo $student->degree ?> in  <?php echo $student->major ?> </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row height-sm-100 contents">
        <form method='POST' action="<?php echo site_url('studentControllerFunctions/updateData/')?><?= $this->session->userdata('auth_user')['applicantID']?>">
            <!-- Personal Information -->
            <div id='personalInfo' class="pt-3" style="display: block;">
                <div class="Wrapper">
                    <div class="tabTitle">
                        <p class="text-white"><i class="fa fa-user"></i> <span class="px-2"> Personal Information </span></p>
                    </div>
                    <div class="Contents">
                        <div class="mb-3 row asterisk">
                            <label for="courses" class="col-2 form-label small pt-2">Course: </label>
                            <div class="col-lg-7 col-md-10 col-sm-12">
                                <select class="form-select form-select-sm" id="courses" name="course_chosen" value="bscs" aria-label="Select Course" disabled>
                                    <option selected> <?php echo $student->degree ?> in  <?php echo $student->major ?> </option>

                                </select> 
                            </div>
                            <hr class="mt-4 mb-1">
                        </div>

                        <!-- Name Input-->
                        <div class="row mt-0 asterisk">
                            <div class="col-lg-3 col-md-6 py-1">
                                <label class="form-label small">First Name</label>
                                <input type="text" name="firstname" value="<?php echo $student->firstname?>" class="form-control form-control-sm" aria-label="First name" readonly>
                            </div>
                            <div class="col-lg-3 col-md-6 py-1">
                                <label class="form-label small">Middle Name</label>
                                <input type="text" name='middlename' value="<?php echo $student->middlename?>" class="form-control form-control-sm" aria-label="Last name" readonly>
                            </div>
                            <div class="col-lg-3 col-md-6 py-1">
                                <label class="small">Surname</label>
                                <input type="text" name="lastname" value="<?php echo $student->lastname?>" class="form-control form-control-sm" aria-label="Surname" readonly>
                            </div>
                            <div class="col-lg-3 col-md-6 py-1">
                                <labe class="small">Suffix</label>
                                    <input type="text" name='extname' value="<?php echo $student->extname?>" class="form-control form-control-sm" aria-label="Extension Name" readonly>
                            </div>
                        </div>

                        <!-- LRN and Gender-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 col-md-12 pt-1">LRN:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="text" name="LRN" value="<?php echo $student->LRN?>" class="form-control form-control-sm" minlength="12" aria-label="LRN" readonly>
                            </div>

                            <div class="col-lg-2 col-md-none"> </div>

                            <label class="form-label col-lg-2 col-md-12 pt-1">Gender:</label>

                            <div class="col-lg-3 col-md-12 pt-1" >
                                <?php if ( $student->gender == 'Male') : ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Male" checked disabled>Male
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Female" disabled>Female
                                    </div>
                                <?php else : ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Male" disabled >Male
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Female" checked disabled>Female
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>

                        <!-- Birthdate and Age-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 col-md-12 pt-1">Birth Date:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="date" name='birthday' value="<?php echo $student->birthday?>" class="form-control form-control-sm" aria-label="Birthdate" readonly>
                            </div>
                            <div class="col-lg-2 col-md-none"> </div>

                            <label class="form-label col-lg-2 col-md-12 pt-1">Age:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="text" name='age' value="<?php echo $student->age?>" class="form-control form-control-sm" aria-label="Age" readonly>
                            </div>
                        </div>

                        <!-- Birthplace-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 pt-1">Birth Place:</label>
                            <div class="col-lg-3">
                                <input type="text" name='birthplace' value="<?php echo $student->birthplace?>" class="form-control form-control-sm" aria-label="Birthpalace" readonly>
                            </div>
                        </div>

                        <!-- Contact Number and Landline-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 col-md-12 pt-1">Contact Number:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="tel" name='contactnum' id="connum" disabled="true" value="<?php echo $student->contactnum?>" class="form-control form-control-sm" aria-label="Contact Number">
                            </div>
                            <div class="col-lg-2 col-md-none"> </div>

                            <label class="form-label col-lg-2 col-md-12 pt-1">Landline:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="tel" name='landline' id="land" disabled="true" value="<?php echo $student->landline?>" class="form-control form-control-sm" aria-label="Landline" required>
                            </div>
                        </div>

                        <!-- Email Address-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 pt-1">Email Address:</label>
                            <div class="col-lg-4">
                                <input type="email" name='email' id="emailaddress" disabled="true"value="<?php echo $student->email?>" class="form-control form-control-sm" aria-label="Email Address" required>
                            </div>
                            <hr class="mt-4 mb-3">
                        </div>

                        <!-- Permanent Address -->
                        <p class="fw-bold">PERMANENT ADDRESS</p>

                        <!--Unit and Street-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 col-md-12  pt-1">Unit #:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="text" name='unit' id="Unit" disabled="true"value="<?php echo $student->unit?>" class="form-control form-control-sm" aria-label="Unit Number" required>
                            </div>
                            <div class="col-lg-2 col-md-none"> </div>

                            <label class="form-label col-lg-2 col-md-12 pt-1">Street:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="text" name='street' id="st" disabled="true" class="form-control form-control-sm" value="<?php echo $student->street?>" aria-label="Street" required>
                            </div>
                        </div>

                        <!-- Barangay and City-->
                        <div class="row mt-2 small asterisk">
                            <label class="form-label col-lg-2 col-md-12  pt-1">Barangay:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="text" name='barangay' id="brgy" disabled="true"value="<?php echo $student->barangay?>" class="form-control form-control-sm" aria-label="Barangay" required>
                            </div>
                            <div class="col-lg-2 col-md-none"> </div>

                            <label class="form-label col-lg-2 col-md-12 pt-1">City:</label>
                            <div class="col-lg-3 col-md-12">
                                <input type="text" name='city' id="City" disabled="true" class="form-control form-control-sm" value="<?php echo $student->city?>" aria-label="City" required>
                            </div>
                        </div>

                        <!-- Zipcode and Province-->
                        <div class="row mt-2 small asterisk">

                            <label class="form-label col-lg-2 col-md-6 pt-1">Zipcode:</label>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" name='zipcode' id="zip" disabled="true" value="<?php echo $student->zipcode?>" class="form-control form-control-sm" aria-label="Zipcode" required>
                            </div>
                            <div class="col-lg-2 col-md-none"> </div>

                            <label class="form-label col-lg-2 col-md-6 pt-1">Province:</label>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" name='province' id="prov" disabled="true" value="<?php echo $student->province?>" class="form-control form-control-sm" aria-label="Province" required>
                            </div>
                        </div>
                        </fieldset>
                        <!--  Next Step button-->
                        <br>
                        <div class="d-flex stepButtons justify-content-end pt-3">
                           <div class="mx-2"  id="editDiv" style="display: block;"> 
                        <button type="button" class="btn btn-warning ms-auto mb-3 text-center text-white" onclick="switchEdit()" style="width: 7rem; background:maroon; border:none; padding:6.2px 0;">
                                Edit
                            </button>
                           </div>
                           <div class="mx-2" id="saveDiv" style="display: none;"> 
                        <button type="submit" class="btn btn-warning ms-auto mb-3 text-center text-white" style=" width: 7rem; background:maroon; border:none; padding:6.2px 0;">
                                Save
                            </button>
                           </div>
                           <div>
                            <button type="button" class="btn btn-warning ms-auto mb-2 text-center" style="width: 7rem;" onclick="educationalAttainment()">
                                Next
                                <i class="fas fa-angle-double-right fa-lg"></i>
                            </button>
                           </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>


            <!-- Educational Attainment -->
            <div id='educationalattainment' class="pt-3" style="display: none;">
                <div class="Wrapper">
                    <div class="tabTitle">
                        <p class="text-white"><i class="fa fa-user-graduate"></i> <span class="px-2"> Educational Attainment </span></p>
                    </div>
                    <div class="Contents">
                        <fieldset disabled>
                            <p class="fw-bold">SCHOOL LAST ATTENDED</p>

                            <!--Name of School and Track-->
                            <div class="row mt-2 small asterisk">
                                <label class="form-label col-lg-2 col-md-12 pt-1">Name of School:</label>
                                <div class="col-lg-4 col-md-12">
                                    <input type="text" name="school" value="<?php echo $student->last_school_attended?>" class="form-control form-control-sm" aria-label="Name of School" readonly>
                                </div>
                                <div class="col-lg-1 col-md-none"> </div>

                                <label class="form-label col-lg-2 col-md-12 pt-1">Program/Track:</label>
                                <div class="col-lg-3 col-md-12">
                                    <select class="form-select form-select-sm" name="track" aria-label="Program Track" value="abm" disabled>
                                        <option value="" selected><?php echo $student->track?></option>
                                    </select>
                                </div>
                            </div>

                            <!-- School Adress-->
                            <div class="row mt-2 small asterisk">
                                <div class="col-lg-2">
                                    <label class="form-label pt-1">School Address:</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" name="school_address" value="<?php echo $student->school_address?>" class="form-control form-control-sm" aria-label="School Address" readonly>
                                </div>
                            </div>

                            <!-- Year Level and Graduated-->
                            <div class="row mt-2 small">
                                <label class="form-label col-lg-2 col-md-12  pt-1">Year Level:</label>
                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name="year_level" value="<?php echo $student->year_level?>" class="form-control form-control-sm" aria-label="Year level" readonly>
                                </div>
                                <div class="col-lg-2 col-md-none"> </div>


                                <label class="form-label col-lg-2 col-md-12 pt-1">Year Graduated:</label>

                                <div class="col-lg-3 col-md-12">
                                    <input type="text" name="year_graduated" value="<?php echo $student->year_graduated?>" class="form-control form-control-sm" aria-label="Year Graduated" readonly>
                                </div>
                            </div>

                            <!-- Category-->
                            <div class="row mt-2 small asterisk">
                                <label class="form-label col-lg-2 col-md-12  pt-1">Category:</label>
                                <?php if ($student->category == 'K-12') : ?>
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
                                    <input type="tel" name="gpa" value="<?php echo $student->gpa?>" maxlength="5" class="form-control form-control-sm" aria-label="GPA" readonly>
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
                            <div>
                     
                            <button type="button" class="btn btn-warning ms-auto mb-3 text-center" style="width: 7rem;" onclick="requirement()">
                                Next
                                <i class="fas fa-angle-double-right fa-lg"></i>
                            </button>
                            </div>
                        </div>
                    </div>
                    <!--Education Contents-->
                </div>
                <!--Education Wrapper-->
            </div>
            <!-- educational attainment div -->
        

        <!-- Requirements -->
        <div id='requirement' class=" pt-3 " style="display: none;">
            <div class="Wrapper">
                <div class="tabTitle">
                    <p class="text-white"><i class="fas fa-file"></i> <span class="px-2">Requirements </span></p>
                </div>
                <div class="Contents">
                    <p class="fw-bold">ADMISSION REQUIREMENTS</p>

                    <div class="row mb-3">
                        <div class="mb-3 fw-bold">
                            Medical Clearance <br>
                            <img src="../application\uploads\<?= $this->session->userdata('auth_user')['medical_record']?>" alt="Medical Clearance" class="rounded hover-shadow cursor" src="assets/images/download.png" onclick="openModal();currentSlide(1)" style="width: 200px;">
                        </div>
                        <div class="mb-3 fw-bold">
                            Form 137 <br>
                            <img src="../application\uploads\<?= $this->session->userdata('auth_user')['form137'] ?>" alt="Form 137" class="rounded hover-shadow cursor" onclick="openModal();currentSlide(2)" style="width: 200px">
                        </div>
                        <div class="mb-3 fw-bold">
                            Good Moral <br>
                            <img src="../application\uploads\<?= $this->session->userdata('auth_user')['goodmoral']?>" alt="Good Moral" class="rounded hover-shadow cursor" onclick="openModal();currentSlide(3)" style="width: 200px;">
                        </div>
                    </div>

                    <div id="requirementsModal" class="modal reqModal">
                        <span class="closeRequirement cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-Requirementscontent">
                            <div class="mySlides">
                                <div class="numbertext">Medical Clearance</div>
                                <img src="../application\uploads\<?= $this->session->userdata('auth_user')['medical_record']?>" alt="Medical Clearance" style="width:100%" height="500px">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">Form 137</div>
                                <img src="../application\uploads\<?= $this->session->userdata('auth_user')['form137']?>" alt="Form 137" style="width:100%" height="500px">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">Good Moral</div>
                                <img src="../application\uploads\<?= $this->session->userdata('auth_user')['goodmoral']?>" alt="Good Moral" style="width:100%" height="500px">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <!-- <div class="caption-container">
                        <p id="caption"></p>
                    </div> -->
                        </div>
                    </div>

                    <!--  Step buttons-->
                    <div class="pt-5 mt-5"></div>
                    <div class="d-flex stepButtons justify-content-between">
                        <button type="button" class="btn btn-warning mb-3 text-center" style="width: 7rem;" onclick="educationalAttainment()">
                            <i class="fas fa-angle-double-left fa-lg"></i>
                            Previous
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function personalInfo() {
        document.getElementById('personalInfo').style.display = "block";
        document.getElementById('educationalattainment').style.display = "none";
        document.getElementById('requirement').style.display = "none";
        document.getElementById('final_step').style.display = "none";
    }

    function educationalAttainment() {
        document.getElementById('personalInfo').style.display = "none";
        document.getElementById('educationalattainment').style.display = "block";
        document.getElementById('requirement').style.display = "none";
        document.getElementById('final_step').style.display = "none";
    }

    function requirement() {
        document.getElementById('personalInfo').style.display = "none";
        document.getElementById('educationalattainment').style.display = "none";
        document.getElementById('requirement').style.display = "block";
        document.getElementById('final_step').style.display = "none";
    }
    function switchEdit() {
         document.getElementById("prov").disabled=false;
         document.getElementById("zip").disabled=false;;
         document.getElementById("City").disabled=false;;
         document.getElementById("brgy").disabled=false;;
         document.getElementById("st").disabled=false;;
         document.getElementById("Unit").disabled=false;
         document.getElementById("emailaddress").disabled=false;;
         document.getElementById("land").disabled=false;;
         document.getElementById("connum").disabled=false;;


         document.getElementById('editDiv').style.display = "none";
         document.getElementById('saveDiv').style.display = "block";
    }

</script>

<script src="<?php echo base_url('assets/js/admission.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>