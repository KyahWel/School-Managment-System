<?php
include __DIR__.'/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/faculty.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Faculty</title>
</head>

<div class="height-100 pt-2 container-fluid">

    <!-- Faculty Main Page -->
    <div class="container my-3" id="mainFaculty" style="display: block;">

        <!-- Faculty Tab -->
        <div class="FacultyTab my-3">
            <h3><i>Welcome to Faculty Tab</i></h3>
        </div>

        <!-- Add Professor -->
        <div class="col-12 align-self-center my-3" id="createProfessor">

            <div class="accordion accordion-flush" id="accordion-addProfessor">
                <div class="accordion-item">

                    <h2 class="accordion-header" id="addProfessorHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addProfessor" aria-expanded="false" aria-controls="addProfessor">
                        Add Professor
                        </button>
                    </h2>

                    <div id="addProfessor" class="accordion-collapse collapse" aria-labelledby="addProfessorHeader" data-bs-parent="#accordion-addProfessor">
                        <div class="accordion-body">
                            <form action="" id="addProfessorForm">
                                <div class="row mb-3">
                                    <div class="col"> <!--Creator ID-->
                                        <label class="form-label">Creator ID</label>
                                        <input type="text" class="form-control" name="creatorID">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6"> <!--First Name-->
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                    <div class="col-6"> <!--Last Name-->
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lastname">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6"> <!--College-->
                                        <label class="form-label">College</label>
                                        <input type="text" class="form-control" name="college">
                                    </div>
                                    <div class="col-6"> <!--Department-->
                                        <label class="form-label">Department</label>
                                        <input type="text" class="form-control" name="department">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6"> <!--Username-->
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="col-6"> <!--Password-->
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="addProfessorButton d-flex justify-content-end"> <!--Buttons-->
                                    <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                    <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                                </div>  
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Filter and Search -->
        <div class="col-12 align-self-center my-3" id="filterAndSearch">
            <label>Filter by:</label>
            <select required>
                <option value="" disabled selected hidden>College</option>
                <option value="college">College 1</option>
                <option value="college">College 2</option>
                <option value="college">College 3</option>
            </select>
            <select required>
                <option value="" disabled selected hidden>Department</option>
                <option value="department">Department 1</option>
                <option value="department">Department 2</option>
                <option value="department">Department 3</option>
            </select>
            <input type="text" name="search" placeholder="Search Faculty ID">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div>  

        <!-- Faculty Information -->
        <div class="col-12 align-self-center my-3" id="facultyInformation">
            <div class="table-wrapper">
            
                <div class="table-title"> <!--Table Header-->
                    <div class="row">
                        <div class="col">
                            <h2>Faculty Information</h2>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">  
                    <table class="table align-middle table-striped table-borderless table-hover" id="table-body"> <!--Table Body-->
                        <thead>
                            <tr>
                                <th>Faculty ID</th>
                                <th>Faculty Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>     
                            <tr>
                                <td>Prof-123</td> 
                                <td>Lida Cruz</td>
                                <td>
                                <div class="action-buttons">
                                    <li><button type="button" id="view" class="btn" onclick="viewProfessor()"><i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                    <li><button type="button" id="edit" class="btn" data-bs-toggle="modal" data-bs-target="#editProfessor"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                    <li>
                                        <div id="status">ACTIVATED</div>
                                    </li>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- Faculty Edit -->
        <div class="modal fade" id="editProfessor" tabindex="-1" aria-labelledby="editProfessorHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfessorHeader">Update Professor Details</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="" id="editProfessorForm">
                            <div class="row mb-3">
                                <div class="col"> <!--Year Level-->
                                    <label class="form-label">Year Level</label>
                                    <input type="text" class="form-control" name="yearlevel">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6"> <!--Username-->
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="col-6"> <!--Password-->
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6"> <!--College-->
                                    <label class="form-label">College</label>
                                    <input type="text" class="form-control" name="college">
                                </div>
                                <div class="col-6"> <!--Department-->
                                    <label class="form-label">Department</label>
                                    <input type="text" class="form-control" name="department">
                                </div>
                            </div>
                            <div class="editProfessorButton d-flex justify-content-end"> <!--Buttons-->
                                <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>  
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Add Subject --> 
        <div class="modal fade" id="addSubjectFaculty" tabindex="-1" aria-labelledby="addSubjectFacultyHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addSubjectFacultyHeader">Add Subject</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="" id="addSubjectFacultyForm">
                            <div class="row mb-3">
                                <div class="col"> <!--School Year-->
                                    <label class="form-label">School Year</label>
                                    <input type="text" class="form-control" name="schoolYear">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6"> <!--Year Level-->
                                    <label class="form-label">Year Level</label>
                                    <input type="text" class="form-control" name="yearLevel">
                                </div>
                                <div class="col-6"> <!--Semester-->
                                    <label class="form-label">Semester</label>
                                    <input type="text" class="form-control" name="semester">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6"> <!--Subject Code-->
                                    <label class="form-label">Subject Code</label>
                                    <input type="text" class="form-control" name="subjectCode">
                                </div>
                                <div class="col-6"> <!--Subject Title-->
                                    <label class="form-label">Subject Title</label>
                                    <input type="text" class="form-control" name="subjectTitle">
                                </div>
                            </div>
                            <div class="addSubjectFacultyButton d-flex justify-content-end"> <!--Buttons-->
                                <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>  
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Faculty View Page -->
    <div class="container my-3" id='viewProfessor' style="display: none;">     
        <div class="viewProfessorTitle">
            <button class="btn btn-default btn-sm" id="back-button" onclick="mainFaculty()">Back</button>
            <h3>Lida's Profile</h3>
        </div>

        <!-- View Professor Information -->
        <div class="viewProfessorContent d-flex align-items-center">
            <div id="viewProfessorAvatar">
                <button class="btn"><i class="fas fa-user"></i></button>
            </div>
            <div class="table-responsive">
                <table id="viewProfessorInformation">
                    <tr>
                        <td>
                            <b>Faculty ID:</b><br>
                            <b>Name:</b><br>
                            <b>Username:</b><br>
                            <b>Department:</b><br>
                        </td>
                        <td>
                            1234567890<br>
                            Lida Cruz<br>
                            Lida12345<br>
                            Mathematics Department<br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- View Professor Filter and Search -->
        <div class="col-12 align-self-center my-3" id="filterAndSearch">
            <label>Filter by:</label>
            <select required>
                <option value="" disabled selected hidden>School Year</option>
                <option value="schoolYear">2019</option>
                <option value="schoolYear">2020</option>
                <option value="schoolYear">2021</option>
            </select>
            <select required>
                <option value="" disabled selected hidden>Year Level</option>
                <option value="yearLevel">First</option>
                <option value="yearLevel">Second</option>
                <option value="yearLevel">Third</option>
                <option value="yearLevel">Fourth</option>
            </select>
            <select required>
                <option value="" disabled selected hidden>Semester</option>
                <option value="semester">First</option>
                <option value="semester">Second</option>
            </select>
            <select required>
                <option value="" disabled selected hidden>Subject Code</option>
                <option value="subjectCode">12345</option>
                <option value="subjectCode">67890</option>
                <option value="subjectCode">76543</option>
            </select>
            <input type="text" name="search" placeholder="Search">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div> 

        <!-- View Professor Table -->
        <div class="col-12 align-self-center my-3" id="viewProfessorTable">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewProfessorTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="viewProfessorInformationTab" data-bs-toggle="tab" data-bs-target="#ProfessorInformation" type="button" role="tab" aria-controls="ProfessorInformation" aria-selected="true">Professor Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewProfessorSubjectTab" data-bs-toggle="tab" data-bs-target="#ProfessorSubject" type="button" role="tab" aria-controls="ProfessorSubject" aria-selected="false">Subject</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Section</button>
                </li>
            </ul>
            <div class="tab-content p-3" id="viewProfessorTabContent">
                <!-- Information Tab -->
                <div class="tab-pane show active my-3" id="ProfessorInformation" role="tabpanel" aria-labelledby="viewProfessorInformationTab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-1"> <!--Last Name-->
                            <input type="text" class="form-control" readonly>
                            <label class="form-label pt-2">Last Name</label>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-1"> <!--First Name-->
                            <input type="text" class="form-control" readonly>
                            <label class="form-label pt-2">First Name</label>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-1"> <!--Middle Name-->
                            <input type="text" class="form-control" readonly>
                            <label class="form-label pt-2">Middle Name</label>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-1"> <!--Suffix-->
                            <input type="text" class="form-control" readonly>
                            <label class="form-label pt-2">Suffix</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-1"> <!--Phone Number-->
                            <input type="text" class="form-control" readonly>
                            <label class="form-label pt-2">Phone Number</label>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-1"> <!--Email-->
                            <input type="text" class="form-control" readonly>
                            <label class="form-label pt-2">Email</label>
                        </div>
                    </div>
                </div>
                <!-- Subject Tab -->
                <div class="tab-pane" id="ProfessorSubject" role="tabpanel" aria-labelledby="viewProfessorSubjectTab">
                    <div class="table-responsive">  
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body"> <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>School Year</th>
                                    <th>Year Level</th>
                                    <th>Semester</th>
                                    <th>Course</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                </tr>
                            </thead>
                            <tbody>     
                                <tr>
                                    <td>2020-2021</td> 
                                    <td>First</td>
                                    <td>Second</td>
                                    <td>BSCS</td>
                                    <td>Math-01</td>
                                    <td>Mathematics 1</td>
                                </tr>
                                <tr>
                                    <td>2020-2021</td> 
                                    <td>First</td>
                                    <td>Second</td>
                                    <td>BSCS</td>
                                    <td>Math-01</td>
                                    <td>Mathematics 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Section Tab -->
                <div class="tab-pane" id="ProfessorSection" role="tabpanel" aria-labelledby="viewProfessorSectionTab">
                    <div class="table-responsive">  
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body"> <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>School Year</th>
                                    <th>Year Level</th>
                                    <th>Semester</th>
                                    <th>Course</th>
                                    <th>Section</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>     
                                <tr>
                                    <td>2020-2021</td> 
                                    <td>First</td>
                                    <td>Second</td>
                                    <td>BSCS</td>
                                    <td>BSCS-1A</td>
                                    <td>Math-01</td>
                                    <td>Mathematics 1</td>
                                    <td>Monday</td>
                                    <td>7:00AM-9:00AM</td>
                                </tr>
                                <tr>
                                    <td>2020-2021</td> 
                                    <td>First</td>
                                    <td>Second</td>
                                    <td>BSCS</td>
                                    <td>BSCS-1A</td>
                                    <td>Math-01</td>
                                    <td>Mathematics 1</td>
                                    <td>Monday</td>
                                    <td>7:00AM-9:00AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo base_url('assets/js/faculty.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>