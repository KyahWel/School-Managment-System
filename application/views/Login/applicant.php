<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mainLogin.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/home.css'); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <title>ERS | Student Login</title>
    <style>
        .background {
            background: url(../assets/images/bg.png) no-repeat center/cover #f4f4f4;
            position: relative;
            height: 100vh;
        }

        @media screen and (max-width: 1024px) {
            .background {
                background: none #f4f4f4;
            }
        }
    </style>
</head>

<body>
    <?php
    include __DIR__ . '/../includes/loginNavbar.php'
    ?>
    <div class="background">

        <!-- APPLICANT LOGIN ACCESS MODULE -->
        <div class="wrapper" id="applicantLogin">

            <?php if ($this->session->flashdata('loginerror')) : ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?= $this->session->flashdata('loginerror'); ?>
                    <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
                </div>
            <?php elseif ($this->session->flashdata('successApplicant')) : ?>
                <!-- Successfull change password alert -->
                <div class="alert alert-success alert-dismissible fade show">
                    <?= $this->session->flashdata('successApplicant'); ?>
                    <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
                </div>
            <?php elseif ($this->session->flashdata('errorApplicant')) : ?>
                <!-- Successfull change password alert -->
                <div class="alert alert-danger alert-dismissible fade show">
                    <?= $this->session->flashdata('errorApplicant'); ?>
                    <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <h3 class="applicant"> <strong>Applicant Access Module</strong></h3>
            <form action="applicant_login" method="POST">
                <hr>

                <!-- Username -->
                <div class="form-group mb-4">
                    <label for="username">Applicant Number</label>
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Applicant Number" required>
                </div>

                <!-- clear entries and login button -->
                <div class="btn-toolbar justify-content-between mb-5" role="toolbar" aria-label="Toolbar with button groups">
                    <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
                    <input type="submit" class="btn btn-default " name="login" value="Login"></input>
                </div>

                <!--<p class= "notice">
             </p> -->
                <button type="button" class="btn btn-default apply" name="apply" onclick="location.href='<?php echo site_url('applicantRegistration') ?>'">APPLY NOW</button>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>