<?php
$this->load->view('includes/adminSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/admission.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/announcement.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Admission </title>
</head>
<div class="height-100 pt-2 container-fluid pb-3">
    <h3 class="pt-3" id="tab" style="display:block">Admission</h3>

    <!--Add exam Schedule-->
    <div class="col-12 align-self-center pb-2" id="create" style="display: block;">
        <div class="accordion accordion-flush" id="accordion-addExamSchedule">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addExamSchedule" aria-expanded="false" aria-controls="addExamSchedule">
                        Add Exam Schedule
                    </button>
                </h2>
                <div id="addExamSchedule" class="accordion-collapse collapse" aria-labelledby="addExamScheduleHeader" data-bs-parent="#accordion-addExamSchedule">
                    <div class="accordion-body">
                        <form method="POST" action="<?php echo site_url('ExamController/addExam') ?>" class="formExam">
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <!--Date-->
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" aria-labelledby="Date">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!--Time-->
                                    <label class="form-label">Time</label>
                                    <input type="time" class="form-control" name="time" aria-labelledby="Time">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-12">
                                    <!--Building-->
                                    <label class="form-label">Building</label>
                                    <select class="form-select" name="building" aria-labelledby="Building">
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
                                    <input type="text" class="form-control" name="room_no" aria-labelledby="Room Number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <!--Time-->
                                    <label class="form-label">Floor Number</label>
                                    <input type="text" class="form-control" name="floor_no" aria-labelledby="Floor Number">
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
    <div class="col-12 align-self-center my-3" id="viewApplicantEnrolledStudents" style="display:block">
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
                                <th class="pb-3">Date</th>
                                <th class="pb-3">Time</th>
                                <th class="pb-3">Building</th>
                                <th class="pb-3">Room Number</th>
                                <th class="pb-3">Floor Number</th>
                                <th class="pb-3">Status</th>
                                <th class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exam as $examrow) { ?>
                                <tr>
                                    <td><?php echo date('m/d/Y', strtotime($examrow->date)) ?></td>
                                    <td><?php echo date('h:i:s a', strtotime($examrow->time)) ?></td>
                                    <td><?php echo $examrow->building ?></td>
                                    <td><?php echo $examrow->room_no ?></td>
                                    <td><?php echo $examrow->floor_no ?></td>
                                    <td><?php echo $examrow->status ?></td>

                                    <td>
                                        <div class="action-buttons">
                                            <?php if ($examrow->status == 1) : ?>
                                                <button type="button" id="edit" data-id='<?php echo $examrow->schedID; ?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editExamSchedule"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button>
                                                <button type="button" class="btn" id="status" onclick="location.href='<?php if ($examrow->status == 1) {
                                                                                                                            echo site_url('examController/deactivate');
                                                                                                                        } else {
                                                                                                                            echo site_url('examController/activate');
                                                                                                                        } ?>/<?php echo $examrow->schedID; ?>'">
                                                    Deactivate
                                                </button>

                                            <?php else : ?>
                                                <button type="button" id="edit" data-id='<?php echo $examrow->schedID; ?>' class="btn" disabled style="background-color: gray;">
                                                <i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                <button type="button" id="status" class="btn" onclick="location.href='<?php if ($examrow->status == 1) {
                                                                                                                            echo site_url('examController/deactivate');
                                                                                                                        } else {
                                                                                                                            echo site_url('examController/activate');
                                                                                                                        } ?>/<?php echo $examrow->schedID; ?>'">
                                                    Activate
                                                </button>

                                            <?php endif ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <!--Edit Exam Schedule-->
            <div class="modal fade" id="editExamSchedule" tabindex="-1" aria-modal="true" aria-labelledby="editExamHeader" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title p-0 text-white" id="editExamHeader">Edit Examination Schedule</h6>
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
                <!-- Filter and Search -->
                <div class=" d-flex  align-items-center pt-3 px-3">
                    <div class="ms-auto">
                        <label class="mb-2 text-dark">Filter by:</label>
                        <select name="stats" class="select" placeholder="status" aria-labelledby="Status">
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
                                <th class="pb-3">Applicant ID</th>
                                <th class="pb-3">Name</th>
                                <th class="pb-3">Course</th>
                                <th class="pb-3">Status</th>
                                <th class="pb-3"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($applicant as $applicantrow) { ?>
                                <?php if ($applicantrow->applicant_result != "Student") : ?>
                                    <tr>
                                        <td><?php echo $applicantrow->applicantNumber ?></td>
                                        <td><?php echo $applicantrow->firstname ?> <?php echo $applicantrow->lastname ?></td>
                                        <td><?php echo $applicantrow->degree ?> in <?php echo $applicantrow->major ?></td>
                                        <td><?php echo $applicantrow->applicant_result ?></td>
                                        <td>
                                            <button type="button" onclick="applicantDetails()" data-id='<?php echo $applicantrow->applicantID; ?>' class="btn btn-primary viewApplicant text-white text-uppercase addBtn">View</button>
                                            <?php if ($applicantrow->applicant_result == "Passed") : ?>
                                                <button type="button" class="btn btn-primary text-white text-uppercase addBtn">ADD</button>
                                            <?php else : ?>
                                                <button type="button" disabled style="background-color: gray;" class="btn btn-primary text-white text-uppercase addBtn">ADD</button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endif ?>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class=" d-flex justify-content-end my-3 p-3">
                        <button type="button" class="btn btn-primary btn-sm text-uppercase addALL px-3 " id="addAll" data-bs-toggle="modal" data-bs-target="#addApplicant">
                            ADD ALL PASSED APPLICANTS</button>
                    </div>

                    <!-- Add All PASSED Applicants Pop up Dialog-->
                    <div class="modal fade" id="addApplicant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-modal="true" aria-labelledby="cancelApplicationLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="<?php echo site_url('Admin_Main/addApplicants/') ?>">
                                    <div class="modal-header">
                                        <h6 class="modal-title text-white" id="cancelApplicationLabel">Add Applicant</h6>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        Are you sure you want to add the following applicants?
                                        <ul>
                                            <?php foreach ($applicant as $applicantrow) { ?>
                                                <?php if ($applicantrow->applicant_result == "Passed") : ?>
                                                    <br>
                                                    <li><?php echo $applicantrow->firstname ?> <?php echo $applicantrow->lastname ?> (<?php echo $applicantrow->applicantNumber ?>)</li>
                                                    <input type="text" hidden class="form-control" name="applicantID[]" value="<?php echo $applicantrow->applicantID ?>">
                                                    <input type="text" hidden class="form-control" name="lastname[]" value="<?php echo $applicantrow->lastname ?>">
                                                <?php endif ?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enrollment Tab -->
            <div class="tab-pane" id="enrollmentTabContent" role="tabpanel" aria-labelledby="Enrollment">
                <div class="px-5 pt-3 my-0 pb-0 text-center">
                    <img class="bugfix" src="../assets/images/bug-fixing.svg" alt="Under Maintenance">
                    <h3 class="pt-5 pb-4 my-0 pb-0 text-uppercase">This tab under maintenance.</h3>
                </div>
            </div>
        </div>
    </div>


    <!-- View Applicant Details -->
    <div class=" pt-2 container-fluid mb-4" id='viewApplicantDetails' style="display:none">
        <div class="mx-2">
            <button type="button" class="btn btn btn-danger my-3" onclick="enrollment()" style="background:maroon; border:none; font-size:0.8rem">
                <i class="fa fa-arrow-left"></i> Back</button>
            <span class="confirmTitle m-2">View Applicant Details </span>
        </div>
        <div id="applicantData">

        </div>
        <div class="p-1"></div>
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
                    <table class="table align-middle table-striped table-borderless table-hover px-2" class="table-body">
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
                    <img class="modal-content modalReceiptContent" alt="Receipt" id="receipt01">
                    <div id="caption" class="text-center"></div>
                </div>

                <div class=" d-flex justify-content-end my-3 mx-2">
                    <button type="button" class="btn btn-primary text-uppercase confirmEnrollment px-3" style="padding: 7px;"> Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1">&nbsp;</div>
</div>

<!-- Ajax and Jquery -->
<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- jQuery DataTables JS CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable();
        $('.edit_data').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('examController/edit'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#edit_sched').html(data);
                }
            });
        });

        $('.viewApplicant').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('Admin_Main/viewApplicant'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#applicantData').html(data);
                }
            });
        });
        // $('#table-bodySched').DataTable({
        //     "lengthMenu": [
        //         [5, 10, 20, -1],
        //         [5, 10, 20, "All"]
        //     ]
        // });
        // $('#table-bodyAppl').DataTable({
        //     "lengthMenu": [
        //         [20, 30, 50, -1],
        //         [20, 30, 50, "All"]
        //     ]
        // });
    });
    
</script>

<script src="<?php echo base_url('assets/js/admission.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>