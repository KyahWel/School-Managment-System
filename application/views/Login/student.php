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
include __DIR__.'/../includes/loginNavbar.php'
?>
<div class="background">
    <!-- STUDENTS ACCESS -->
    <div class="wrapper">

        <!-- Invalid username or password -->
        <?php if($this->session->flashdata('loginerror')) : ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <?= $this->session->flashdata('loginerror'); ?>
                <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <h3><strong>Student Access Module</strong></h3>
        <hr>
        <form action="<?php echo site_url('Login/student_login') ?>" method="POST">
            <!-- Username -->
            <div class="form-group mb-4">
                <label for="username">Student Number</label>
                <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Student Number" required>
            </div>

            <!-- Password -->
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <div class="input-group-addon">
                    <i class="fa fa-key"></i>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>

            <!-- clear entries and login button -->
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>

                <input type="submit" class="btn btn-default " value="Login">
            </div>


            <p class="text-left">
                <a href="#!">Forgot password?</a><br>
            </p>

            <p class="text-left1">
                Applicant?
                <a href="applicant" onclick="applicantLogin()">Click here!</a><br>
            </p>
        </form>
    </div>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>