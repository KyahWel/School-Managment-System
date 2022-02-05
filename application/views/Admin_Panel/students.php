<?php
$this->load->view('includes/adminSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/student.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/announcement.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Students</title>
</head>
<div class="height-100 pt-2 container-fluid">
    <div class="my-3" id="mainStudent" style="display: block;">
        <div class="StudentTab my-3">
            <h3>Students</h3>
        </div>

        <!--Student List-->
        <div class="col-12 align-self-center" id="studentInformation">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Student Information</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive py-2">
                    <table class="table table-default table-striped align-middle table-borderless table-hover" id="table-body">
                        <thead class="thead">
                            <tr>
                                <th class="pb-3">Student ID</th>
                                <th class="pb-3">Name </th>
                                <!-- <th>Last Name</th> -->
                                <th class="pb-3">Course</th>
                                <th class="pb-3">Section</th>
                                <th class="pb-3">Yearlevel</th>
                                <th class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php foreach ($student as $studentrow) { ?>
                                <tr>
                                    <td><?php echo $studentrow->studentNumber ?></td>
                                    <td><?php echo $studentrow->firstname; ?> <?php echo $studentrow->lastname ?></td>
                                    <!-- <td><?php echo $studentrow->lastname ?></td> -->
                                    <td><?php echo $studentrow->degree; ?> in <?php echo $studentrow->major; ?></td>
                                    <td><?php echo $studentrow->sectionName; ?></td>
                                    <td><?php echo $studentrow->yearlevel; ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <?php if ($studentrow->status == 1) : ?>
                                                <li><button type="button" id="view" data-id='<?php echo $studentrow->studentID; ?>' class="btn view_data" onclick="viewStudent()"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                <li><button type="button" class="btn" id="status" onclick="location.href='<?php if ($studentrow->status == 1) {
                                                                                                                                echo site_url('studentControllerFunctions/deactivate');
                                                                                                                            } else {
                                                                                                                                echo site_url('studentControllerFunctions/activate');
                                                                                                                            } ?>/<?php echo $studentrow->studentID; ?>'">
                                                        Deactivate
                                                    </button>
                                                </li>
                                            <?php else : ?>
                                                <li><button type="button" id="view" data-id='<?php echo $studentrow->studentID; ?>' class="btn" disabled style="background-color: gray;"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                <li><button type="button" class="btn" id="status" onclick="location.href='<?php if ($studentrow->status == 1) {
                                                                                                                                echo site_url('studentControllerFunctions/deactivate');
                                                                                                                            } else {
                                                                                                                                echo site_url('studentControllerFunctions/activate');
                                                                                                                            } ?>/<?php echo $studentrow->studentID; ?>'">
                                                        Activate
                                                    </button>
                                                </li>
                                            <?php endif ?>
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

    <!--View Student-->
    <div class="container my-3" id='viewStudent' style="display: none;">
        <div class="viewStudentTitle d-flex align-items-center">
            <button type="button" class="btn btn-default btn-sm my-3" id="back-button" onclick="mainStudent()"><i class="fa fa-arrow-left"></i> Back</button>
            <h3><i>Student Profile</i></h3>
        </div>

        <div id="view_student">
        </div>
    </div>

    <div class="pt-1">&nbsp;</div>
</div>

<script src="<?php echo base_url('assets/js/student.js'); ?>"></script>
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
                url: "<?php echo site_url('studentControllerFunctions/view'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#view_student').html(data);
                }
            });
        });
        
        $('#table-body').DataTable({
			"lengthMenu": [
				[15, 25, 50, -1],
				[15, 25, 50, "All"]
			]
		});
		jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
    });
</script>
</body>

</html>