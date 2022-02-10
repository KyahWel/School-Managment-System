<!DOCTYPE html>
<html lang="en">

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
            <?php $this->session->unset_userdata ('loginerror'); ?>
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
            <div class="btn-toolbar justify-content-between pb-2" role="toolbar" aria-label="Toolbar with button groups">
                <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>

                <input type="submit" class="btn btn-default " value="Login">
            </div>


            <button type="button" class="forgot py-0 my-0" data-bs-toggle="modal" data-bs-target="#forgotStudentPass">
					Forgot password?
			   </button>

            <p class="text-left1 px-1">
                 Applicant?
                <a href="applicant" onclick="applicantLogin()">Click here!</a><br>
            </p>
        </form>
    </div>

    <!-- Forgot password -->
		<div class="modal fade" id="forgotStudentPass" tabindex="-1" aria-modal="true" 
            aria-labelledby="forgotStudentPass" aria-hidden="true">
			<div class="modal-dialog modal-md modal-dialog-centered">
				<div class=" modal-content">
               <div class="d-flex justify-content-center head  px-0 py-3">
					  <h5 class="modal-title fw-bold">
                   Forgot Password</h5>
				  </div>
					<div class="modal-body px-3">
						<div>
							<p class="text-muted small pt-2">Verify your TUP Student Number</p>
							<form action="">
								<div class="form-floating my-3">
									<input type="text" class="form-control" name="studentUsername" id="forgotPassUsername" placeholder="Username">
									<label for="forgotPassUsername" class="py-2">Student Number</label>
								</div>
								<div class="d-flex justify-content-end pt-3 pb-2">
									<button type="submit" class="btn btn-default check mx-2">Verify</button>
									<button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal" aria-label="Close">
										Cancel
									</button>
								</div>
							</form>
						</div>

						<div hidden="true">
							<form action="">
								<p class="text-muted small pt-2">Enter the 6-digit code sent to your email</p>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="studentOTP" id="otp" placeholder="One-Time Pin" 
                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
									<label for="otp" class="py-2">One-Time PIN</label>
								</div>
								<div class="d-flex justify-content-end pt-3 pb-2">
									<button type="submit" class="btn btn-default check mx-2">Submit</button>
									<button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal" aria-label="Close">
										Cancel
									</button>
								</div>
							</form>
						</div>

						<div hidden="true">
							<form action="">
								<p class="text-muted small pt-2">Change your password</p>
								<div class="form-floating my-3">
									<input type="text" class="form-control" name="studentNewPass" id="newpass" placeholder="New Password">
									<label for="newpass" class="py-2">New Password</label>
								</div>
								<div class="form-floating mb-3">
									<input type="text" class="form-control" name="studentOldPass" id="confirmpass" placeholder="Confirm Password">
									<label for="confirmpass" class="py-2">Confirm Password</label>
								</div>
								<div class="d-flex justify-content-end pt-3 pb-2">
									<button type="submit" class="btn btn-default check mx-2">Submit</button>
									<button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal" aria-label="Close">
										Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>