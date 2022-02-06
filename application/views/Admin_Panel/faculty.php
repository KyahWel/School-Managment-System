<?php
$this->load->view('includes/adminSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/faculty.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Faculty</title>
</head>

<div class="height-100 pt-2 container-fluid">

    <!-- Faculty Main Page -->
    <div class="my-3" id="mainFaculty" style="display: block;">
        <?php if ($this->session->flashdata('adminError')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <?= $this->session->flashdata('adminError'); ?>
                <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
            </div>
        <?php elseif ($this->session->flashdata('successAdmin')) : ?>
            <!-- Successfull change password alert -->
            <div class="alert alert-success alert-dismissible fade show">
                <?= $this->session->flashdata('successAdmin'); ?>
                <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif?>
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
        <div id="view_faculty">

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
                   <div id="edit_faculty">
                       
                   </div>
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
        $('.edit_data').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('FacultyControllerFunctions/editFaculty'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#edit_faculty').html(data);
                }
            });
        });
        $('#facultyList').DataTable({
            "lengthMenu": [
                [15, 25, 50, -1],
                [15, 25, 50, "All"]
            ]
        });
        $('#sectionListOfFaculty').DataTable({
            "lengthMenu": [
                [15, 25, 50, -1],
                [15, 25, 50, "All"]
            ]
        });
        jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
    });
</script>