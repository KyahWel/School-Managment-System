<?php
include __DIR__ . '/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/admission.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Admission </title>
</head>
<div class="height-100 pt-2 container-fluid pb-3">
    <h3 class="pt-3" id="tab" style="display:block">Admission</h3>

    <!--Add exam Schedule-->
    <div class="col-12 align-self-center" id="create" style="display: block;">
        <div class="accordion accordion-flush" id="accordion-addExamSchedule">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addExamSchedule" aria-expanded="false" aria-controls="addExamSchedule">
                        Add Exam Schedule
                    </button>
                </h2>
                <div id="addExamSchedule" class="accordion-collapse collapse" aria-labelledby="addExamScheduleHeader" data-bs-parent="#accordion-addExamSchedule">
                    <div class="accordion-body">
                        <form method="POST" action="<?php echo site_url('ExamController/addExam')?>" class="formExam">
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <!--Date-->
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!--Time-->
                                    <label class="form-label">Time</label>
                                    <input type="time" class="form-control" name="time">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <!--Building-->
                                    <label class="form-label">Building</label>
                                    <select class="form-select" name="building">
                                        <option value="" disabled selected hidden>--Please Select--</option>
                                        <option value="College of Science">College of Science</option>
                                        <option value="College of Engineering">College of Engineering</option>
                                        <option value="College of Industrial Education">College of Industrial Education</option>
                                        <option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
                                        <option value="College of Liberal Arts">College of Liberal Arts</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!--Time-->
                                    <label class="form-label">Room Number</label>
                                    <input type="text" class="form-control" name="room_no">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <!--Time-->
                                    <label class="form-label">Floor Number</label>
                                    <input type="text" class="form-control" name="floor_no">
                                </div>
                            </div>
                            <div class="addExamScheduleButton d-flex justify-content-end">
                                <!--Buttons-->
                                <button class="btn btn-default" id="examSave" type="submit" name="submit" value="save">Save</button>
                                <button class="btn btn-default" id="examCancel" type="reset" value="cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Tab Title -->
    <div class="col-12 align-self-center my-3 " id="viewApplicantEnrolledStudents" style="display:block">
        <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="viewSchedButton" data-bs-toggle="tab" data-bs-target="#scheduleTabContent" type="button" role="tab" aria-controls="scheduleTabContent" aria-selected="true">Exam Schedule</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewApplicantButton" data-bs-toggle="tab" data-bs-target="#applicantTabContent" type="button" role="tab" aria-controls="applicantTabContent" aria-selected="true">Applicant</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewEnrollmenttButton" data-bs-toggle="tab" data-bs-target="#enrollmentTabContent" type="button" role="tab" aria-controls="enrollmentTabContent" aria-selected="false">Enrollment</button>
            </li>
        </ul>
        <div class="tab-content ">
            <!-- Information Tab -->
            <div class="tab-pane show active pt-3" id="scheduleTabContent" role="tabpanel" aria-labelledby="scheduleTab Content">
                <div class="table-responsive">
                    <table class=" table align-middle  table-striped table-borderless table-hover" id="table-bodySched">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Building</th>
                                <th>Room Number</th>
                                <th>Floor Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($exam as $examrow) {?>
                                <tr>
                                    <td><?php echo date('m/d/Y', strtotime($examrow->date))?></td>
                                    <td><?php echo date('h:i:s a', strtotime($examrow->time))?></td>
                                    <td><?php echo $examrow->building?></td> 
                                    <td><?php echo $examrow->room_no?></td> 
                                    <td><?php echo $examrow->floor_no?></td>
                                    <td><?php echo $examrow->status?></td>
                                    
                                    <td>
                                        <div class="action-buttons">
                                            <?php if ($examrow->status == 1): ?>
                                            <button type="button" id="edit" data-id='<?php echo $examrow->schedID;?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editExamSchedule"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button>
                                            <button type="button" class="btn" id="status" onclick="location.href='<?php if($examrow->status == 1){echo site_url('examController/deactivate');} else {echo site_url('examController/activate');}?>/<?php echo $examrow->schedID; ?>'">
                                                Deactivate
                                            </button>
                        
                                            <?php else: ?>
                                               <button type="button" id="edit" data-id='<?php echo $examrow->schedID;?>' class="btn" disabled style="background-color: gray;"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                <button type="button" id="status" class="btn" onclick="location.href='<?php if($examrow->status == 1){echo site_url('examController/deactivate');} else {echo site_url('examController/activate');}?>/<?php echo $examrow->schedID; ?>'">
                                                Activate
                                                </button>
                                                	
                                            <?php endif ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Edit Exam Schedule-->
            <div class="modal fade" id="editExamSchedule" tabindex="-1" aria-labelledby="editExamHeader" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title p-0" id="editExamHeader">Edit Exam Schedule</h6>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="edit_sched">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Applicant Tab -->
            <div class="tab-pane" id="applicantTabContent" role="tabpanel" aria-labelledby="Applicants">
                <form action="" method="post" id="AddApplicants">
                    <!-- Filter and Search -->
                    <div class=" d-flex  align-items-center my-1 p-3">
                        <div class="px-2 pt-2 text-dark">
                            <input type="checkbox" name="addAll" id="checkApplicant" onclick="checkedAll.call(this);" /> Select all
                        </div>
                        <div class="ms-auto">
                            <label class="mb-2 text-dark">Filter by:</label>
                            <select name="stats" class="select" placeholder="status">
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
                                <?php foreach($applicant as $applicantrow) {?>
                                    <tr>
                                        <td><input type="checkbox" name="addApplicant" class="mx-2"></td>
                                        <td><?php echo $applicantrow->applicantNumber?></td> 
                                        <td><?php echo $applicantrow->firstname?> <?php echo $applicantrow->lastname?></td> 
                                        <td><?php echo $applicantrow->course_chosen?></td>
                                        <td><?php echo $applicantrow->applicant_result?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary text-white text-uppercase addBtn">ADD</button>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>

                        <div class=" d-flex justify-content-end my-3 p-3">
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
                </form>
            </div>
            <!-- Section Tab -->
            <div class="tab-pane " id="enrollmentTabContent" role="tabpanel" aria-labelledby="Enrollment">
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
            <button type="button" class="btn btn btn-danger my-3" onclick="enrollment()" style="background:maroon; border:none; font-size:0.8rem">
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
            document.getElementById('create').style.display = "none";
            document.getElementById('viewEnrollmentDetails').style.display = "block";
            document.getElementById('viewApplicantEnrolledStudents').style.display = "none";
            document.getElementById('tab').style.display = "none";

        }

        function enrollment() {
            document.getElementById('create').style.display = "block";
            document.getElementById('viewApplicantEnrolledStudents').style.display = "block";
            document.getElementById('viewEnrollmentDetails').style.display = "none";
            document.getElementById('tab').style.display = "block";
        }
    </script>
    <!-- Ajax and Jquery -->
    <!-- jQuery JS CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
    <!-- jQuery DataTables JS CDN -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- Ajax fetching data -->
    <script type="text/javascript">
        $(document).ready(function(){
        $('#dataTable').DataTable();
        $('.edit_data').click(function(){
            var id = $(this).data('id');
            $.ajax({
            url: "<?php echo site_url('examController/edit');?>",
            method: "POST",
            data: {id:id},
            success: function(data){
                $('#edit_sched').html(data);
            }
            });
        });
        });
    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>

    </html>