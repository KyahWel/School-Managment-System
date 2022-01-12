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
    <div class="col-12 align-self-center" id="schedule">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Schedule</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">  
                    <table class="table table-fixed align-middle table-striped table-borderless table-hover" style="height: 250px;" id="table-body">
                        <thead class ="thead">
                            <tr>
			                    <th>Subject Code</th>
			                    <th>Subject Name </th>
                                <th>Section</th>
                                <th>Day</th>
                                <th>Time</th>
		                    </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Math001</td>
                                <td>Mathematics 1</td>
                                <td>BSCS-NS-1A</td>
                                <td>Mon</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math002</td>
                                <td>Mathematics 2</td>
                                <td>BSCS-2A</td>
                                <td>Wed</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math003</td>
                                <td>Mathematics 3</td>
                                <td>BSCS-NS-3A</td>
                                <td>Thur</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math004</td>
                                <td>Mathematics 4</td>
                                <td>BSCS-4A</td>
                                <td>Fri</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math001</td>
                                <td>Mathematics 1</td>
                                <td>BSCS-1A</td>
                                <td>Mon</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math002</td>
                                <td>Mathematics 2</td>
                                <td>BSCS-NS-2A</td>
                                <td>Tue</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math003</td>
                                <td>Mathematics 3</td>
                                <td>BSCS-NS-3A</td>
                                <td>Wed</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math004</td>
                                <td>Mathematics 4</td>
                                <td>BSCS-4A</td>
                                <td>Fri</td>
                                <td>7:00-9:00</td>
                            </tr>
                            <tr>
                                <td>Math001</td>
                                <td>Mathematics 1</td>
                                <td>BSCS-NS-1A</td>
                                <td>Mon</td>
                                <td>7:00-9:00</td>
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