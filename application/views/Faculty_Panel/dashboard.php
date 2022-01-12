<?php
include __DIR__ . '/../includes/facultySideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/announcement.css'); ?>" rel="stylesheet" type="text/css">
    <title>Dashboard</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <!-- If user accessed login page or other pages -->
    <?php if($this->session->flashdata('successFaculty')) : ?>
        <div class="alert alert-success alert-dismissible fade show">
            <?= $this->session->flashdata('successFaculty'); ?>
        </div>
    <?php elseif($this->session->flashdata('logout')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <?= $this->session->flashdata('logout'); ?>
             <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    <h3>Dashboard</h3>
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
                                        <h5 class="title text-uppercase text-dark"> <?php echo $announcement->title ?>, <?php echo $announcement->date ?>, <?php echo $announcement->time ?></h5>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="details mx-3">Details <br></h5>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary btn-sm mx-3 viewAnnounceDeets" data-bs-toggle="modal" data-bs-target="#viewAnnouncementDetailsFaculty">
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
                            </div>
                            <!-- View Details Announcement Modal -->
                            <div class="modal fade" id="viewAnnouncementDetailsFaculty" tabindex="-1" aria-modal="true" aria-labelledby="View Announcement" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Announcement</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col mb-3">
                                                   <b>Title: </b>Suspension of Classes 
                                                </div>
                                            </div>
                                            <div class="col  mb-3">
                                                    <b>Date Posted: </b> 2022-01-15 
                                            </div>
                                            <div class="col  mb-3">
                                                    <b>Time: </b> 12:00pm 
                                            </div>
                                            <div class="col  mb-3">
                                                    <b>Details: </b> <br>
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti quis voluptate voluptatum officiis voluptates perferendis, temporibus deleniti id ratione reprehenderit molestiae nisi amet, recusandae voluptatem at magni ab possimus mollitia libero, facilis aut esse nihil ullam distinctio. Modi dignissimos autem repellendus voluptas veritatis quos. Hic amet culpa numquam velit laboriosam?
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        <!--Schedule-->
        <div class="col-12 align-self-center my-3 pt-3 viewSched">
            <!--Nav button-->
            <ul class="nav nav-tabs text-dark d-flex flex-row justify-content-evenly" id="viewSchedule" role="tablist">
                <li class="nav-item d-flex flex-row" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#monday" type="button" role="tab" aria-controls="monday" aria-selected="true">Monday</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tuesday" type="button" role="tab" aria-controls="tuesday" aria-selected="false">Tuesday</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#wednesday" type="button" role="tab" aria-controls="wednesday" aria-selected="false">Wednesday</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#thursday" type="button" role="tab" aria-controls="thursday" aria-selected="false">Thursday</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#friday" type="button" role="tab" aria-controls="friday" aria-selected="false">Friday</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#saturday" type="button" role="tab" aria-controls="saturday" aria-selected="false">Saturday</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sunday" type="button" role="tab" aria-controls="sunday" aria-selected="false">Sunday</button>
                </li>
            </ul>
            
            <!--Sched Content-->
            <div class="tab-content p-4">
                <!-- Monday -->
                <div class="tab-pane show active text-dark" id="monday" role="tabpanel" aria-labelledby="Monday">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-4A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tuesday -->
                <div class="tab-pane " id="tuesday" role="tabpanel" aria-labelledby="Tuesday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-4A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wednesday -->
                <div class="tab-pane" id="wednesday" role="tabpanel" aria-labelledby="Wednesday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-4A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thursday -->
                <div class="tab-pane" id="thursday" role="tabpanel" aria-labelledby="Thursday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
=======
>>>>>>> Stashed changes
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
<<<<<<< Updated upstream
                                <div class="timetable-item-section">BSCS-NS-4A</div>
=======
                                <div class="timetable-item-section">BSCS-4A</div>
>>>>>>> Stashed changes
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< Updated upstream
=======
                <!-- Thursday -->
                <div class="tab-pane" id="thursday" role="tabpanel" aria-labelledby="Thursday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-4A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
>>>>>>> Stashed changes
                <!-- Friday -->
                <div class="tab-pane" id="friday" role="tabpanel" aria-labelledby="Friday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-4A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Saturday -->
                <div class="tab-pane" id="saturday" role="tabpanel" aria-labelledby="Saturday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-1A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 1</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-2A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 2</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-3A</div>
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Mathematics 3</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-section">BSCS-NS-4A</div>
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Mathematics 4</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sunday -->
                <div class="tab-pane" id="sunday" role="tabpanel" aria-labelledby="Sunday">
                <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-time">8:00am - 12:00pm</div>
                                <div class="timetable-item-name">Lesson Plan</div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-wrapper p-4" href="#">
                                <div class="timetable-item-time">4:00pm - 5:00pm</div>
                                <div class="timetable-item-name">Faculty Meeting</div>
                                <div class="box-content1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>