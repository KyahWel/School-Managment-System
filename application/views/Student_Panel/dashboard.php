<?php
include __DIR__ . '/../includes/studentSideBar.php'
?>

<head>
<link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <title>Dashboard</title>
</head>

<div class="height-100 pt-2 container-fluid">
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
                    <div class="billboardContent px-3">
                        <dl>
                            <dt>
                                <h5 class="title">Title, When</h5>
                            </dt>
                            <dd class="details">Details</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

</div>
<script src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>