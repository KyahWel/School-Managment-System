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
    <link href="<?php echo base_url('assets/css/appicant.css'); ?>" rel="stylesheet" type="text/css">
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
                <div class="btn-toolbar justify-content-between mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
                    <input type="submit" class="btn btn-default " name="login" value="Login"></input>
                </div>

                <p class= "notice text-center">
                    <i>
                    For new applicant and applicants who have not completed the requirements, click APPLY NOW.
                    </i>
                </p>
                <button type="button" class="btn btn-default apply" data-bs-toggle="modal" data-bs-target="#verification" name="apply" >APPLY NOW</button>
            </form>
        </div>

        <!-- Profile Verification -->
        <div class="modal" id="verification" tabindex="-1" aria-modal="true" aria-hidden="true">
		<div class="modal-dialog modal-md modal-dialog-centered">
			<div class="modal-content">
				<div class="d-flex justify-content-center head py-3">
					<h5 class="modal-title fw-bold" id="editProfessorHeader">Profile Verification</h5>
				</div>
				<div class="modal-body mt-2 px-4">
                    <div class="row-lg-12 mt-0 asterisk align-items-center">
                        <div class="col">
							<div class="form-floating mb-3">
								<input type="text" name="firstnameVerify" id="fnameVerify"  class="form-control form-control-sm"
									required aria-label="First name" onkeydown="return /[a-z ]/i.test(event.key)"
									placeholder="First Name">
									<label for="fnameVerify">First name</label>
							</div>
                        </div>
						<div class="col mt-1">
							<div class="form-floating mb-3">
								<input type="text" name="middlename" id="midnameVerify"  class="form-control form-control-sm"
									aria-label="First name" onkeydown="return /[a-z ]/i.test(event.key)"
									placeholder="Middle Name">
								<label for="midnameVerify">Middle name</label>
							</div>
                        </div>
						<div class="col mt-1">
							<div class="form-floating mb-3">
								<input type="text" name="lastname" id="surnameVerify"  class="form-control form-control-sm"
									required aria-label="First name"
									placeholder="Surname">
								<label for="midnameVerify">Surname</label>
							</div>
                        </div>
                        <div class="col">
							<div class="form-floating mb-2">							
                                <input type="text" name="extname" id="suffixVerify" class="form-control form-control-sm"
                                    aria-label="Extension Name" required onkeydown="return /[a-z ]/i.test(event.key)"
									placeholder="Suffix">
                                <label class="form-label">Suffix</label>
							</div>
                        </div>
                    </div>
                </div>
				<hr class="line">
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-default check mx-2" onclick="location.href='<?php echo site_url('applicantRegistration') ?>'">Continue</button>
                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                    </button>
                </div>
			</div>
		</div>
	</div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>