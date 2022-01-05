<?php
include __DIR__ . '/../includes/studentSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/studentDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <title>Dashboard</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <h3 class="fw-bold py-2">Dashboard</h3>
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
                              <!-- php -->

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


    <!-- View Professor Table -->
    <div class="col-12 align-self-center my-3 pt-3 viewSched">
        <ul class="nav nav-tabs text-dark d-flex flex-row justify-content-evenly" id="viewScehdule" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="viewProfessorInformationTab" data-bs-toggle="tab" data-bs-target="#monday" type="button" role="tab" aria-controls="ProfessorInformation" aria-selected="true">Monday</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSubjectTab" data-bs-toggle="tab" data-bs-target="#tuesday" type="button" role="tab" aria-controls="ProfessorSubject" aria-selected="false">Tuesday</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#wednesday" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Wednesday</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#thursday" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Thursday</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#friday" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Friday</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Saturday</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Sunday</button>
            </li>
        </ul>
        <div class="tab-content p-3" id="viewProfessorTabContent" style="background:transparent"> 
            <!-- Information Tab -->
            <div class="tab-pane show active my-3" id="monday" role="tabpanel" aria-labelledby="viewProfessorInformationTab" >
                di pa to tapos
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6 mb-1">
                       
                        <input type="text" class="form-control" readonly>
                        <label class="form-label pt-2">Last Name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                       
                        <input type="text" class="form-control" readonly>
                        <label class="form-label pt-2">First Name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                    
                        <input type="text" class="form-control" readonly>
                        <label class="form-label pt-2">Middle Name</label>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-1">
                       
                        <input type="text" class="form-control" readonly>
                        <label class="form-label pt-2">Suffix</label>
                    </div>
                </div> -->
                
            </div>
            <!-- Subject Tab -->
            <div class="tab-pane" id="ProfessorSubject" role="tabpanel" aria-labelledby="viewProfessorSubjectTab">
                <div class="table-responsive">
                    <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
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
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>