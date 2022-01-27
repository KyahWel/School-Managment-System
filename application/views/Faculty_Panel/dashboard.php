<?php
    $this->load->view('includes/facultySideBar'); 
?>

<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/facultyDashboard.css'); ?>" rel="stylesheet" type="text/css">
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
                                                <button type="button" data-id='<?php echo $announcement->eaID ?>' class="btn btn-primary btn-sm mx-3 viewAnnounceDeets view_data" data-bs-toggle="modal" data-bs-target="#viewAnnouncementDetailsFaculty">
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
                                            <div id="event_result">

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
        <div class="col-12 align-self-center my-3 pt-3 viewSched ">
        <ul class="nav nav-tabs text-dark d-flex flex-row" id="viewSchedule" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#monday" type="button" role="tab" aria-controls="monday" aria-selected="true">Mon</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tuesday" type="button" role="tab" aria-controls="tuesday" aria-selected="false">Tue</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#wednesday" type="button" role="tab" aria-controls="wednesday" aria-selected="false">Wed</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#thursday" type="button" role="tab" aria-controls="thursday" aria-selected="false">Thurs</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#friday" type="button" role="tab" aria-controls="friday" aria-selected="false">Fri</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#saturday" type="button" role="tab" aria-controls="saturday" aria-selected="false">Sat</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sunday" type="button" role="tab" aria-controls="sunday" aria-selected="false">Sun</button>
                </li>
            </ul>
            <div class="tab-content p-4">
                <!-- Monday -->
                <div class="tab-pane show active mb-3 text-dark" id="monday" role="tabpanel" aria-labelledby="Monday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-NS-3A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-3B</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tuesday -->
                <div class="tab-pane " id="tuesday" role="tabpanel" aria-labelledby="Tuesday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-NS-3A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-3B</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wednesday -->
                <div class="tab-pane" id="wednesday" role="tabpanel" aria-labelledby="Wednesday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-NS-3A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-3B</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thursday -->
                <div class="tab-pane" id="thursday" role="tabpanel" aria-labelledby="Thursday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-NS-3A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-3B</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Friday -->
                <div class="tab-pane" id="friday" role="tabpanel" aria-labelledby="Friday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-NS-3A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-3B</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Saturday -->
                <div class="tab-pane" id="saturday" role="tabpanel" aria-labelledby="Saturday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-NS-3A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Mathematics 3</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2">BSCS-3B</h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sunday -->
                <div class="tab-pane" id="sunday" role="tabpanel" aria-labelledby="Sunday">
                    <div class="row mb-3">
                    <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 8:00am - 12:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Lesson Plan</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2"> N/A </h6>
                                    </div>
                                </div>
                                <div class="box-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="box-wrapper p-4" href="#">
                                <h5 class="timetable-item-time fw-bold"> <i class="fas fa-clock"></i> 1:00pm - 3:00pm</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle">Subject</div>
                                        <h6 class=" timetable-item-subj my-1 px-3 py-2">Faculty Meeting</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="timetable-item-subtitle"> Section</div>
                                        <h6 class=" timetable-item-prof my-1 px-3 py-2"> N/A</h6>
                                    </div>
                                </div>
                                <div class="box-content">
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
<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
 <!-- jQuery DataTables JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <!-- Ajax fetching data -->
 <script type="text/javascript">
    $(document).ready(function(){
      $('#dataTable').DataTable();
      $('.view_data').click(function(){
        var eventData = $(this).data('id');
        console.log(eventData);
        $.ajax({
          url: "<?php echo site_url('eventsController/viewAnnouncement');?>",
          method: "POST",
          data: {eventData:eventData},
          success: function(data){
            $('#event_result').html(data);
          }
        });
      });
    });
</script>
</body>

</html>