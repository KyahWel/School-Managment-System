<?php
include __DIR__ . '/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Dashboard </title>
</head>

<body>
    <div class="height-100 pt-2 container-fluid">
        <!-- If user accessed login page or other pages -->
        <?php if($this->session->flashdata('status')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <?= $this->session->flashdata('status'); ?>
                <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
            </div>
        <?php elseif($this->session->flashdata('success')): ?>
        <!-- Successfull change password alert -->
            <div class="alert alert-success alert-dismissible fade show">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <h3 class="mt-2">Dashboard</h3>
        <div class="row">
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
                                            <h5 class="title">Title: <?php echo $announcement->title ?>, <?php echo $announcement->date ?>, <?php echo $announcement->time ?></h5>
                                            <p class="details px-5">Details <br> <?php echo $announcement->details ?></p>
                                        </div>
                                    <?php endif ?>
                                <?php } ?>

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
        <div class="col-12 align-self-center my-3" id="viewInfoDashboard">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewInfoTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link student active" id="viewStudentButton" data-bs-toggle="tab" data-bs-target="#studentsTabContent" type="button" role="tab" aria-controls="studentsTabContent" aria-selected="true">Students</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link faculty" id="viewFacultytButton" data-bs-toggle="tab" data-bs-target="#facultyTabContent" type="button" role="tab" aria-controls="facultyTabContent" aria-selected="false">Faculty</button>
                </li>
            </ul>
            <div class="tab-content p-3" id="viewStudentsTab">
                <div class="tab-pane show active" id="studentsTabContent" role="tabpanel" aria-labelledby="Students Information">
                     <!-- Filter and Search -->
                <div class=" d-flex justify-content-end my-2" id="studentFilter">
                    <label class="px-2 pt-1">Search ID: </label>
                    <input type="text" name="searchStudentID" placeholder="Search Student ID">
                    <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
                </div>
                    <div class="table-responsive">
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($student as $studentrow) { ?>
                                    <tr>
                                        <td><?php echo $studentrow->studentNumber ?></td>
                                        <td><?php echo $studentrow->firstname; ?></td>
                                        <td><?php echo $studentrow->lastname ?></td>
                                        <td> </td>
                                        <td><?php echo $studentrow->status; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Faculty List -->
                <div class="tab-pane" id="facultyTabContent" role="tabpanel" aria-labelledby="Faculty Information">
                    <!-- Filter and Search -->
                    <div class=" d-flex justify-content-end my-2" id="facultyFilter">
                        <label class="px-2 pt-1">Search ID: </label>
                        <input type="text" id="searchFacultyID" name="searchFacultyID" placeholder="Search Faculty ID">
                        <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>Faculty ID</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
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
    </div>

    <script src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>