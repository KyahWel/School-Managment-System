<?php
$this->load->view('includes/adminSideBar');
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
                            <form method="POST" action="<?php echo site_url('FacultyControllerFunctions/addFaculty') ?>" id="addProfessorForm">
                                <div class="row mb-3">
                                    <div class="col">
                                        <!--Creator ID-->
                                        <label for="adminName" class="form-label">Created By</label>
                                        <input type="text" class="form-control" id="adminName" name="adminname" disabled value="<?= $this->session->userdata('auth_user')['firstname'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <!--First Name-->
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstname">
                                    </div>
                                    <div class="col-6">
                                        <!--Middle Name-->
                                        <label for="middleName" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="middleName" name="middlename">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <!--Last Name-->
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastname">
                                    </div>
                                    <div class="col-6">
                                        <!--Suffix-->
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" name="extname">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <!--College-->
                                        <label for="college" class="form-label">College</label>
                                        <input type="text" class="form-control" id="college" name="college">
                                    </div>
                                    <div class="col-6">
                                        <!--Department-->
                                        <label for="department" class="form-label">Department</label>
                                        <input type="text" class="form-control" id="department" name="department">
                                    </div>
                                </div>
                                <div class="addProfessorButton d-flex justify-content-end">
                                    <!--Buttons-->
                                    <button class="btn btn-default" id="addProfessorSave" type="submit" value="save">Save</button>
                                    <button class="btn btn-default" id="addProfessorCancel" type="reset" value="cancel">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Faculty Information -->
        <div class="col-12 align-self-center my-3" id="facultyInformation">
            <div class="table-wrapper">

                <div class="table-title">
                    <!--Table Header-->
                    <div class="row">
                        <div class="col">
                            <h2>Faculty Information</h2>
                        </div>
                    </div>
                </div>

                <div class="table-responsive py-3">
                    <table class="table table-body align-middle table-striped table-borderless table-hover" id="facultyList">
                        <!--Table Body-->
                        <thead>
                            <tr>
                                <th class="pb-3">Faculty ID</th>
                                <th class="pb-3">Faculty Name</th>
                                <th class="pb-3"> College</th>
                                <th class="pb-3">Department</th>
                                <th class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teacher as $teacherrow) { ?>
                                <tr>
                                    <td><?php echo $teacherrow->teacherNumber ?></td>
                                    <td><?php echo $teacherrow->firstname; ?> <?php echo $teacherrow->lastname ?></td>
                                    <td><?php echo $teacherrow->college; ?></td>
                                    <td><?php echo $teacherrow->department; ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <ul class="mb-0 px-0">
                                                <?php if ($teacherrow->status == 1) : ?>
                                                    <li><button type="button" id="view" data-id='<?php echo $teacherrow->teacherID; ?>' class="btn view_data" onclick="viewProfessor()"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                    <li><button type="button" id="edit" data-id='<?php echo $teacherrow->teacherID; ?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editProfessor"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                    <li>
                                                    <li><button type="button" class="btn" id="status" onclick="location.href='<?php if ($teacherrow->status == 1) {
                                                                                                                                    echo site_url('FacultyControllerFunctions/deactivate');
                                                                                                                                } else {
                                                                                                                                    echo site_url('FacultyControllerFunctions/activate');
                                                                                                                                } ?>/<?php echo $teacherrow->teacherID; ?>'">
                                                            Deactivate
                                                        </button>
                                                    </li>
                                                <?php else : ?>
                                                    <li><button type="button" id="view" data-id='<?php echo $teacherrow->teacherID; ?>' class="btn" disabled style="background-color: gray;"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                    <li><button type="button" id="edit" data-id='<?php echo $teacherrow->teacherID; ?>' class="btn" disabled style="background-color: gray;"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                    <li>
                                                    <li><button type="button" class="btn" id="status" onclick="location.href='<?php if ($teacherrow->status == 1) {
                                                                                                                                    echo site_url('FacultyControllerFunctions/deactivate');
                                                                                                                                } else {
                                                                                                                                    echo site_url('FacultyControllerFunctions/activate');
                                                                                                                                } ?>/<?php echo $teacherrow->teacherID; ?>'">
                                                            Activate
                                                        </button>
                                                    </li>
                                                <?php endif ?>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Faculty View Page -->
    <div class="container my-3" id='viewProfessor' style="display: none;">

        <div class="viewProfessorTitle">
            <button type="button" class="btn btn-default btn-sm" id="back-button" onclick="mainFaculty()"><i class="fa fa-arrow-left"></i> Back</button>
            <h3>Lida's Profile</h3>
        </div>

        <!-- View Professor Information -->
        <div class="viewProfessorContent d-flex align-items-center">
            <div class="profile-pic-div">
                <img src="../assets/images/facultyAvatar.jpg" alt="Professor Avatar" id="facultyPhoto">
            </div>
            <div class="table-responsive mx-3">
                <table id="viewProfessorInformation" class="table-body">
                    <tr>
                        <td class="py-3">
                            <p><b>Faculty ID:</b></p>
                            <p><b>Name:</b></p>
                            <p><b>Department:</b></p>
                            <p class="mb-0"><b>Email:</b></p>
                        </td>
                        <td class="py-3">
                            <p>1234567890</p>
                            <p>Lida Cruz</p>
                            <p>Lida12345</p>
                            <p class="mb-0">Mathematics Department</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- View Professor Table -->
        <div class="table-wrapper col-12 align-self-center mt-4 mb-3" id="viewProfessorTable">
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
                    <div id="view_faculty">

                    </div>
                </div>
                <!-- Subject Tab -->
                <div class="tab-pane" id="ProfessorSubject" role="tabpanel" aria-labelledby="viewProfessorSubjectTab">
                    <div class="table-responsive">
                        <table class="table table-body align-middle table-striped table-borderless table-hover">
                            <!--Table Body-->
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
                        <table class="table table-body align-middle table-striped table-borderless table-hover" id="sectionListOfFaculty">
                            <!--Table Body-->
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

    <!-- Edit Professor -->
    <div class="modal fade" id="editProfessor" tabindex="-1" aria-modal="true" aria-labelledby="editProfessorHeader" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="editProfessorHeader">Update Professor Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="" id="editProfessorForm">
                        <div class="row mb-3">
                            <div class="col-6">
                                <!--College-->
                                <label for="college-edit" class="form-label">College</label>
                                <input type="text" class="form-control" id="college-edit" name="college">
                            </div>
                            <div class="col-6">
                                <!--Department-->
                                <label for="department-edit" class="form-label">Department</label>
                                <input type="text" class="form-control" id="department-edit" name="department">
                            </div>
                        </div>
                        <div class="editProfessorButton d-flex justify-content-end">
                            <!--Buttons-->
                            <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                            <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

<script src="<?php echo base_url('assets/js/faculty.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- jQuery DataTables JS CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable();
        $('.view_data').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('FacultyControllerFunctions/viewFaculty'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#view_faculty').html(data);
                }
            });
        });
        $('#facultyList').DataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
        $('#sectionListOfFaculty').DataTable({
            "lengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ]
        });
    });
</script>