<?php
include __DIR__ . '/../includes/facultySideBar.php'
?>

<head>
<link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <title>Dashboard</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <!-- If user accessed login page or other pages -->
    <?php if($this->session->flashdata('status')) : ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('status'); ?>
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