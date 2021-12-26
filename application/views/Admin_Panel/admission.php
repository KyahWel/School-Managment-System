<?php
include __DIR__ . '/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/admission.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Admission </title>
</head>
<div class="height-100 pt-2 container-fluid">
    <h3 class="pt-3" id="tab" style="display:block">Admission</h3>

    <!--Tab Title -->
    <div class="col-12 align-self-center my-" id="viewApplicantEnrolledStudents" style="display:block">
        <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewApplTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link student active" id="viewApplicantButton" data-bs-toggle="tab" data-bs-target="#applicantTabContent" type="button" role="tab" aria-controls="applicantTabContent" aria-selected="true">Applicant</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link faculty" id="viewEnrollmenttButton" data-bs-toggle="tab" data-bs-target="#enrollmentTabContent" type="button" role="tab" aria-controls="enrollmentTabContent" aria-selected="false">Enrollment</button>
            </li>
        </ul>
        <form action="" method="post" id="AddApplicants">
            <!-- Applicant List -->
            <div class="tab-content p-3" id="viewApplTab">
                <div class="tab-pane show active" id="applicantTabContent" role="tabpanel" aria-labelledby="Applicants">
                    <!-- Filter and Search -->
                    <div class=" d-flex  align-items-center my-1">
                        <div class="px-2 pt-2 text-dark">
                            <input type="checkbox" name="addAll" id="checkApplicant" onclick="checkedAll.call(this);" /> Select all
                        </div>
                        <div class="ms-auto" id="filterAndSearch">
                            <label class="mb-2">Filter by:</label>
                            <select required placeholder="status">
                                <option value="" disabled selected hidden>Status</option>
                                <option value="Passed">Passed</option>
                                <option value="Failed">Failed</option>
                            </select>
                            <input type="text" id="searchApplicantID" name="searchApplicantID" placeholder="Search Applicant ID">
                            <button type="button" class="btn btn-sm searchBG" id="searchApplicantID"><i class="fas fa-search" title="Search"></i></button>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">

                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th style="width: 10px"></th>
                                    <th>Applicant ID</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="addApplicant" class="mx-2">1</td>
                                    <td>TUPM-APPL21-1234</td>
                                    <td>Lida Cruz</td>
                                    <td>BS-Computer Science</td>
                                    <td>PASSED</td>
                                    <td>
                                        <button type="button" class="btn btn-primary text-white text-uppercase addBtn">ADD</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="addApplicant" class="mx-2"> 2</td>
                                    <td>TUPM-APPL21-1234</td>
                                    <td>Lyah Bianca Aquino</td>
                                    <td>BS-Computer Science</td>
                                    <td>PASSED</td>
                                    <td>
                                        <button type="button" class="btn btn-primary text-white text-uppercase addBtn">ADD</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=" d-flex justify-content-end my-3">
                            <button type="button" class="btn btn-primary btn-sm text-uppercase addALL px-3 " id="addAll" data-bs-toggle="modal" data-bs-target="#addApplicant">
                                <i class="fas fa-plus fa-sm" title="Add All"></i> ADD ALL</button>
                        </div>

                        <!-- Add All PASSED Applicants Pop up Dialog-->
                        <div class="modal fade" id="addApplicant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cancelApplicationLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title text-white fw-bold" id="cancelApplicationLabel">Add Applicant</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        Are you sure you want to add kung ilang selected applicants?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <!-- Enrollment List -->
        <div class="tab-pane show" id="enrollmentTabContent" role="tabpanel" aria-labelledby="Enrollment">
            <div class=" d-flex justify-content-end my-1" id="filterAndSearch">
                <label class="px-2 pt-1 mb-2">Search ID: </label>
                <input type="text" id="searchStudentID" name="searchStudentID" placeholder="Search Student ID">
                <button type="button" class="btn btn-sm mx-1 searchBG" id="searchApplicantID"><i class="fas fa-search"></i></button>
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                    <!--Table Body-->
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th style="width: 200px;">Name</th>
                            <th>College</th>
                            <th>Course</th>
                            <th>Year Level</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TUPM-STUDENT-1234</td>
                            <td>Lida Cruz</td>
                            <td>COS</td>
                            <td>BS-Computer Science</td>
                            <td>Third</td>
                            <td>
                                <button type="button" class="btn btn-primary text-white text-uppercase confirmBtn">Confirm Enrollment</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TUPM-STUDENT-1234</td>
                            <td>Lida Cruz</td>
                            <td>COS</td>
                            <td>BS-Computer Science</td>
                            <td>Third</td>
                            <td>
                                <button type="button" class="btn btn-primary text-white text-uppercase confirmBtn" onclick="lastpage()">Confirm Enrollment</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div>
</div>

<div class="container my-3" id='viewEnrollmentDetails' style="display:none">
    <div class="mx-2 my-3" style="display:inline">
        <button type="button" class="btn btn btn-danger" onclick="enrollment()" style="background:maroon; border:none; font-size:0.8rem" onclick="requirement()">
            <i class="fa fa-arrow-left"></i> Back</button>confirm enrollment 
    </div>
    <div class="Title">
        <h3>Lida's Profile</h3>
    </div>

    <!-- View Professor Information -->
    <div class="viewProfessorContent d-flex align-items-center">
        <div id="viewProfessorAvatar">
            <img src="../assets/images/applicantAvatar.svg" alt="">
        </div>
        <div class="table-responsive">
            <table id="viewProfessorInformation">
                <tr>
                    <td class="px-2 pt-2">
                        <p><b>Student ID:</b></p>
                        <p><b>Name:</b></p>
                        <p><b>Course:</b></p>
                        <p><b>Term/Sem:</b></p>
                    </td>
                    <td class="px-3 pt-2">
                        <p>TUPM-STUDENT21-1234</p>
                        <p>Lida Cruz</p>
                        <p>BS-Computer Science</p>
                        <p>1st</p>
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <div class="enrollmentDetails my-3" id="details">
        <div class="tabHeader">
            <p class="text-center text-white p-2">Enrollment Details</p>
        </div>
        <div class="tabDetails">
            <p class="fw-bold px-4"> Subjects Enrolled</p>
            <div class="table-responsive">
                <table class="table align-middle table-striped table-borderless table-hover px-2" id="table-body">
                    <!--Table Body-->
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th style="width: 200px;">Subject Code</th>
                            <th>Subject</th>
                            <th>Units</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ABC-12</td>
                            <td>Data Structures and Algorithm</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ABC-13</td>
                            <td>Data Analytics</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="fw-bold px-4"> Attachment Receipt</p>
            <img src="../assets/images/download.png" alt="" class="px-3" style="width: 375px;">
        </div>
    </div>


</div>


</div>



<script type="text/javascript">
    function checkedAll() {
        // this refers to the clicked checkbox
        // find all checkboxes inside the checkbox' form
        var elements = this.form.getElementsByTagName('input');
        // iterate and change status
        for (var i = elements.length; i--;) {
            if (elements[i].type == 'checkbox') {
                elements[i].checked = this.checked;
            }
        }
    }

    function lastpage() {
        document.getElementById('viewEnrollmentDetails').style.display = "block";
        document.getElementById('viewApplicantEnrolledStudents').style.display = "none";
        document.getElementById('tab').style.display = "none";

    }

    function enrollment() {
        document.getElementById('viewApplicantEnrolledStudents').style.display = "block";
        document.getElementById('viewEnrollmentDetails').style.display = "none";
        document.getElementById('tab').style.display = "block";
    }
</script>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>