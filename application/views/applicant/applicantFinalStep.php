<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/applicant.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="d-flex justify-content-between text-white header px-3 py-2">
        <div class="brand">
            Technological University of the Philippines
        </div>
        <!-- <div class="cancel">
            Cancel Application
        </div> -->
    </div>
    <div class="container-fluid">
        <div class="row height-100vh">
            <div class="col-lg-3 col-md-3 col-sm-0 col-xl-2 px-0 bg-default d-flex sticky-top">
                <div class="d-flex flex-md-column flex-row flex-grow-1 align-items-center text-dark">
                    <div href="/" class="d-block align-items-center pb-sm-3 text-dark text-decoration-none">
                        <div class="d-none d-md-inline">
                            <img src="../assets/images/applicantAvatar.svg" alt="" class="pt-4 mx-4" style="width: 125px;">
                            <br>
                            <p class="text-center pt-4 h5">Welcome,</p>
                            <p class="text-center pt-2 fw-bold h5">Applicant-21-2322 </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contents -->
            <div class="col d-flex flex-column">
                <div id='final_step' class="container mt-4 pt-3">
                    <div class="Wrapper">
                        <div class="tabTitle px-2">
                            <p class="text-white">Applicant Name: LIDA CRUZ </p>
                        </div>
                        <div class="Contents">
                            <p class="note1 small">Please take note of your Applicant ID.</p>
                            <h3 class="fw-bold pt-3"> Applicant ID: applicant ID READ </h4>
                            <p class="note2 pt-4"> Take the TUPSTAT on scheduled date, time, and specific venue. Bring with you the following: <br>
                                a.) Test Permit <br>
                                b.) 2 Sharpened pencil with eraser</p>
                            <p class="note3 pt-2 fw-bold"> Kindly check your email for the test permit or download it here.</p>

                            <button type="button" class="btn btn-warning download mb-2"> Download Test Permit </button>

                            <p class="note4 pt-3 fw-bold"> Note: Please come one hour before the time.</p>

                                <!--  DONE button-->
                            <div class="pt-4 mb-3"></div>
                            <div class="d-flex  align-items-end">
                                <input type="button" value="DONE" class="btn finishedButton btn-default text-white ms-auto my-3 mx-2 px-4" onclick="location.href='<?php echo site_url('Homepage')?>'">
                            </div>
                        </div>
                        <!--Contents-->
                    </div>
                    <!--wrapper-->
                </div>
                <!-- final step div -->
            </div>
        </div>
    </div>
</body>

</html>