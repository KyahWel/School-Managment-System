<?php
include __DIR__ . '/../includes/facultySideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/facultyMyStudents.css'); ?>" rel="stylesheet" type="text/css">
    <title>My Students</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainPage">

        <!-- Filter and Search -->
        <div class="col-12 align-self-center my-3" id="filterAndSearch">
            <label for="yearLevelFilter">Filter by:</label>
            <select name="Year Level" id="yearLevelFilter">
                <option value="" disabled selected hidden>Year Level</option>
                <option value="yearLevel">First Year</option>
                <option value="yearLevel">Second Year</option>
                <option value="yearLevel">Third Year</option>
                <option value="yearLevel">Fourth Year</option>
            </select>
            <label for="subjectCodeFilter"></label>
            <select name="Subject Code" id="subjectCodeFilter">
                <option value="" disabled selected hidden>Subject Code</option>
                <option value="subjectCode">Math-01</option>
                <option value="subjectCode">Math-02</option>
                <option value="subjectCode">Math-03</option>
                <option value="subjectCode">Math-03</option>
            </select>
            <input type="text" name="sectionSearch" placeholder="Search Section">
            <button type="button" class="btn btn-sm" id="sectionSearch"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div>
        
        <div class="table-wrapper">
        
            <!--Table Header-->
            <div class="table-title">
                <div class="row">
                    <div class="col">
                        <h2>My Students</h2>
                    </div>
                </div>
            </div>

            <!-- Table Content -->
            <div class="table-responsive">  
                <table class="table table-body align-middle table-striped table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>Subject Code</th>
                            <th>Subject Title</th>
                            <th>Year Level</th>
                            <th>Section</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <tr>
                            <td>Math-01</td> 
                            <td>Mathematics</td>
                            <td>First Year</td>
                            <td>
                                <div id="sectionName">
                                    <a href="#" onclick="sectionPage()">BSCS-1A</a>
                                </div>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <div class="container my-3" id="sectionPage">

        <button class="btn btn-sm" id="back-button" onclick="mainPage()"><i class="fa fa-arrow-left"></i> Back</button>

        <div class="table-responsive">
            <table id="sectionInformation">
                <tr>
                    <td>
                        <p><b>Course:</b></p>
                        <p><b>Subject Code:</b></p>
                        <p><b>Subject Title:</b></p>
                        <p class="mb-0"><b>Schedule:</b></p>
                    </td>
                    <td class="text-uppercase">
                        <p>BSCS</p>
                        <p>Math-01</p>
                        <p>Mathematics 1</p>
                        <p class="mb-0">Monday 7:00AM-9:00AM</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Search -->
        <div class="col-12 align-self-center mb-3" id="searchPanel">
            <input type="text" name="search" placeholder="Search Student ID">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div>
    
        <div class="table-wrapper">
            
            <!--Table Header-->
            <div class="table-title">
                <div class="row">
                    <div class="col">
                        <h2>BSCS-1A</h2>
                    </div>
                </div>
            </div>

            <!-- Table Content -->
            <div class="table-responsive">  
                <table class="table table-body align-middle table-striped table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <tr>
                            <td>Stud001-01</td> 
                            <td>Delgado</td>
                            <td>Kimberley</td>
                            <td> </td>
                            <td>
                                <button type="button" id="input" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#inputGrade"><i class="fas fa-plus"></i> Input Grade</button>
                                <button type="button" id="edit" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#editGrade"><i class="fas fa-pen"></i> Edit Grade</button>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <!-- Input Grade -->
    <div class="inputGrade modal fade" id="inputGrade" tabindex="-1" aria-modal="true" aria-labelledby="inputGradeHeader" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputGradeHeader">Input Grade</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="container my-3" action="">
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--Subject Code-->
                                <label for="subjectCode" class="form-label mb-0">Subject Code: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <!--Subject Title-->
                                <label for="subjectTitle" class="form-label mb-0">Subject Title: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--Student Name-->
                                <label for="studentName" class="form-label mb-0">Student Name: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <!--Student ID-->
                                <label for="studentID" class="form-label mb-0">Student ID: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--Section-->
                                <label for="section" class="form-label mb-0">Section: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <!--Schedule-->
                                <label for="schedule" class="form-label mb-0">Schedule: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row my-4 align-items-center">
                            <div class="col-sm-auto">
                                <label for="grade" class="col-form-label">Grade: </label>
                            </div>
                            <div class="col-auto col-sm-3">
                                <input type="grade" class="form-control" aria-describedby="gradeOfStudent">
                            </div>
                            <div class="col-sm-auto">
                                <label for="rating" class="col-form-label">Equivalent Rating: </label>
                            </div>
                            <div class="col-auto col-sm-3">
                                <input type="rating" class="form-control" aria-describedby="equivalentRating" readonly>
                            </div>
                        </div>
                        <div class="inputGradeButton d-flex justify-content-end pt-4">
                            <!--Buttons-->
                            <button class="btn btn-default" id="saveInput" type="submit" value="save">Save</button>
                            <button class="btn btn-default" id="cancelInput" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Grade -->
    <div class="editGrade modal fade" id="editGrade" tabindex="-1" aria-modal="true" aria-labelledby="editGradeHeader" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="editGradeHeader">Edit Grade</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="container my-3" action="">
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--Subject Code-->
                                <label for="subjectCode" class="form-label mb-0">Subject Code: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <!--Subject Title-->
                                <label for="subjectTitle" class="form-label mb-0">Subject Title: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--Student Name-->
                                <label for="studentName" class="form-label mb-0">Student Name: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <!--Student ID-->
                                <label for="studentID" class="form-label mb-0">Student ID: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--Section-->
                                <label for="section" class="form-label mb-0">Section: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <!--Schedule-->
                                <label for="schedule" class="form-label mb-0">Schedule: </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row my-4 align-items-center">
                            <div class="col-sm-auto">
                                <label for="grade" class="col-form-label">Old Grade: </label>
                            </div>
                            <div class="col-auto col-sm-3">
                                <input type="grade" class="form-control" aria-describedby="gradeOfStudent">
                            </div>
                            <div class="col-sm-auto">
                                <label for="rating" class="col-form-label">Equivalent Rating: </label>
                            </div>
                            <div class="col-auto col-sm-3">
                                <input type="rating" class="form-control" aria-describedby="equivalentRating" readonly>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center">
                            <div class="col-sm-auto">
                                <label for="grade" class="col-form-label">New Grade: </label>
                            </div>
                            <div class="col-auto col-sm-3">
                                <input type="grade" class="form-control" aria-describedby="gradeOfStudent">
                            </div>
                            <div class="col-sm-auto">
                                <label for="rating" class="col-form-label">Equivalent Rating: </label>
                            </div>
                            <div class="col-auto col-sm-3">
                                <input type="rating" class="form-control" aria-describedby="equivalentRating" readonly>
                            </div>
                        </div>
                        <div class="editGradeButton d-flex justify-content-end pt-4">
                            <!--Buttons-->
                            <button class="btn btn-default" id="save" type="submit" value="save">Confirm</button>
                            <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

<script src="<?php echo base_url('assets/js/facultyMyStudents.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>