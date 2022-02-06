<?php
$this->load->view('includes/adminSideBar');
?>


<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Dashboard </title>
</head>

<body>
    <div class="height-100 pt-2 container-fluid">
        <!-- If user accessed login page or other pages -->
       
        <?php if ($this->session->flashdata('logout')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <?= $this->session->flashdata('logout'); ?>
                <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <h3 class="mt-2">Dashboard</h3>
        <div class="row pb-3">
            <!-- Date today -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                <div class="calendar py-5">
                    <div class="month pt-4">
                        <h1 id="getMonth"></h1>
                    </div>
                    <div class="day text-center">
                        <p id="today"></p>
                    </div>
                </div>
            </div>

            <!-- Billboard -->
            <div class="col-lg-8 col-md-6 col-sm-12 mb-2">
                <div class="billboard">
                    <div class="billboardTitle">
                        <p class="text-center text-white p-2">Current Billboard</p>
                    </div>
                    <div class="billboardContent align-self-center text-center">
                        <div id="carouselControls" class="carousel carousel-dark slide px-3 " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active px-3">
                                    <h5 class="front text-uppercase">Announcements will be posted here</h5>
                                    <p class="details"></p>
                                </div>
                                <?php foreach ($announcement as $announcement) { ?>
                                    <?php if ($announcement->status == 1) : ?>
                                        <div class="carousel-item px-5">
                                            <h5 class="title text-uppercase text-dark"> <?php echo $announcement->title ?>, <?php echo $announcement->date ?>, <?php echo $announcement->time ?></h5>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5 class="details mx-3">Details <br></h5>
                                                </div>
                                                <div>
                                                    <button type="button" data-id='<?php echo $announcement->eaID ?>' class="btn btn-primary btn-sm mx-3 viewAnnounceDeets view_data" data-bs-toggle="modal" data-bs-target="#viewAnnouncementDetailsAdmin">
                                                        View Details
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="text-dark px-4">
                                                <?php echo $announcement->details ?>
                                            </p>
                                        </div>
                                    <?php endif ?>
                                <?php } ?>

                                <!-- View Details Announcement Modal -->
                                <div class="modal fade" id="viewAnnouncementDetailsAdmin" tabindex="-1" aria-modal="true" aria-labelledby="View Announcement" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View Announement</h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div id="event_result">

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Students List -->
        <div class=" col-12 align-self-center " id="viewInfoDashboard">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewInfoTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link student active px-4" id="viewStudentButton" data-bs-toggle="tab" data-bs-target="#studentsTabContent" type="button" role="tab" aria-controls="studentsTabContent" aria-selected="true">Students</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link faculty px-4" id="viewFacultytButton" data-bs-toggle="tab" data-bs-target="#facultyTabContent" type="button" role="tab" aria-controls="facultyTabContent" aria-selected="false">Faculty</button>
                </li>
            </ul>
            <div class="tab-content" id="viewStudentsTab">
                <div class="tab-pane show active" id="studentsTabContent" role="tabpanel" aria-labelledby="Students Information">
                    <div class="table-responsive">
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-bodyStud">
                            <!--Table Body-->
                            <thead class="text-center">
                                <tr>
                                    <th class="pb-3">Student ID</th>
                                    <th class="pb-3">Last Name</th>
                                    <th class="pb-3">First Name</th>
                                    <th class="pb-3">Section</th>
                                    <th class="pb-3">Year Level</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($student as $studentrow) { ?>
                                    <tr>
                                        <td><?php echo $studentrow->studentNumber ?></td>
                                        <td><?php echo $studentrow->firstname; ?></td>
                                        <td><?php echo $studentrow->lastname ?></td>
                                        <td><?php echo $studentrow->sectionName ?></td>
                                        <td><?php echo $studentrow->yearlevel; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Faculty List -->
                <div class="tab-pane" id="facultyTabContent" role="tabpanel" aria-labelledby="Faculty Information">
                    <div class="table-responsive">
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-bodyFac">
                            <!--Table Body-->
                            <thead class="text-center">
                                <tr>
                                    <th class="pb-3">Faculty ID</th>
                                    <th class="pb-3">Last Name</th>
                                    <th class="pb-3">First Name</th>
                                    <th class="pb-3">Section</th>
                                    <th class="pb-3">Status</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <?php foreach ($teacher as $teacherrow) { ?>
                                    <tr>
                                        <td><?php echo $teacherrow->teacherNumber ?></td>
                                        <td><?php echo $teacherrow->firstname; ?></td>
                                        <td><?php echo $teacherrow->lastname ?></td>
                                        <td> </td>
                                        <td><?php echo $teacherrow->status; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-1">&nbsp;</div>
    </div>

    <!-- jQuery JS CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- jQuery DataTables JS CDN -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!-- Ajax fetching data -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable();
            $('.view_data').click(function() {
                var eventData = $(this).data('id');
                console.log(eventData);
                $.ajax({
                    url: "<?php echo site_url('eventsController/viewAnnouncement'); ?>",
                    method: "POST",
                    data: {
                        eventData: eventData
                    },
                    success: function(data) {
                        $('#event_result').html(data);
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#table-bodyStud').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });
            jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
        });
        $(document).ready(function() {
            $('#table-bodyFac').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });
		jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
        });
    </script>

    <script src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>