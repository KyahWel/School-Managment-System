<?php
include __DIR__ . '/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/admission.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Admission </title>
</head>
<div class="height-100 pt-2 container-fluid pb-3">
    <h3 class="pt-3" id="tab" style="display:block">Admission</h3>

    <!--Tab Title -->
    <div class="col-12 align-self-center my-" id="viewApplicantEnrolledStudents" style="display:block">
        <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewTab" role="tablist">
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
                        <div class="ms-auto">
                            <label class="mb-2">Filter by:</label>
                            <select name="stats"required placeholder="status">
                                <option value="" disabled selected hidden>Status</option>
                                <option name="stats" value="Passed">Passed</option>
                                <option name="stats" value="Failed">Failed</option>
                                <option name="stats" value="Applied">Applied</option>
                            </select>
                            <input type="text" id="searchApplicantID" name="searchApplicantID" placeholder="Search Applicant ID">
                            <button type="button" class="btn btn-sm searchBG" id="searchApplicantIDIcon"><i class="fas fa-search" title="Search"></i></button>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">

                        <table class="table align-middle table-striped table-borderless table-hover" id="table-bodyAppl">
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
                                        <h6 class="modal-title text-white" id="cancelApplicationLabel">Add Applicant</h6>
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
            <div class=" d-flex justify-content-end my-1">
                <label class="px-2 pt-1 mb-2">Search ID: </label>
                <input type="text" id="searchStudentID" name="searchStudentID" placeholder="Search Student ID">
                <button type="button" class="btn btn-sm mx-1 searchBG" id="searchStudentIDIcon"><i class="fas fa-search"></i></button>
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-striped table-borderless table-hover" id="table-bodyEnroll">
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
                                <button type="button" onclick="lastpage()" class="btn btn-primary text-white text-uppercase confirmBtn">Confirm Enrollment</button>
                            </td>
                        </tr>
                        <tr>
                            <td>TUPM-STUDENT-1234</td>
                            <td>Lida Cruz</td>
                            <td>COS</td>
                            <td>BS-Computer Science</td>
                            <td>Third</td>
                            <td>
                                <button type="button" onclick="lastpage()" class="btn btn-primary text-white text-uppercase confirmBtn">Confirm Enrollment</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Enrollment Details/Confirmation Tab -->
<div class="height-100 pt-2 container-fluid" id='viewEnrollmentDetails' style="display:none">
    <div class="mx-2">
        <button type="button" class="btn btn btn-danger my-3" onclick="enrollment()" style="background:maroon; border:none; font-size:0.8rem" onclick="requirement()">
            <i class="fa fa-arrow-left"></i> Back</button>
        <span class="confirmTitle m-2">Confirm Enrollment </span>
    </div>

    <div class="viewStudentContent d-flex align-items-center">
        <div>
            <img id="viewStudentAvatar" src="../assets/images/applicantAvatar.svg" alt="Applicant Avatar">
        </div>

        <div class="table-responsive">
            <table id="viewStudentInformation" class="table-body">
                <tr>
                    <td class="px-3 pt-2">
                        <p><b>Student ID:</b></p>
                        <p><b>Name:</b></p>
                        <p><b>Course:</b></p>
                        <p><b>Term/Sem:</b></p>
                    </td>
                    <td class="pt-2 px-2">
                        <p>TUPM-STUDENT21-1234</p>
                        <p>Lida Cruz</p>
                        <p>BS-Computer Science</p>
                        <p>1st</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="enrollmentDetails mt-3 mb-5" id="details">
        <div class="tabHeader">
            <p class="text-center text-white p-2">Enrollment Details</p>
        </div>
        <div class="tabDetails p-3">
            <h6 class="fw-bold px-4"> Subjects Enrolled</h6>
            <div class="table-responsive">
                <table class="table align-middle table-striped table-borderless table-hover px-2" id="table-bodyDetails">
                    <!--Table Body-->
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th style="width: 250px;">Subject Code</th>
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
                        <tr>
                            <td>3</td>
                            <td>ABC-14</td>
                            <td>Information Assurance and Security</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>ABC-15</td>
                            <td>Web Development</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h6 class="fw-bold px-4"> Attachment Receipt</h6>
            <img id="receiptAttachment" src="../assets/images/download.png" alt="Receipt Attachment" class="px-3">

            <!-- Receipt Modal -->
            <div id="myModal" class="modal modalReceipt">
            <span class="close">&times;</span>
                <img class="modal-content modalReceiptContent" id="receipt01">
                <div id="caption" class="text-center"></div>
            </div>

            <div class=" d-flex justify-content-end my-3 mx-2">
                <button type="button" class="btn btn-primary text-uppercase confirmEnrollment px-3" style="padding: 7px;"> Confirm</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("receiptAttachment");
    var modalImg = document.getElementById("receipt01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

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