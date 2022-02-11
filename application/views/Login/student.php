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
include_once __DIR__.'/../includes/loginNavbar.php'
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
            <?php elseif ($this->session->flashdata('successForgotStudent')) : ?>
				<div class="alert alert-success alert-dismissible fade show">
					<?= $this->session->flashdata('successForgotStudent'); ?>
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
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Student Number"
                required>
            </div>

            <!-- Password -->
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <div class="input-group-addon">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                required>
            </div>

            <!-- clear entries and login button -->
            <div class="btn-toolbar justify-content-between pb-2" role="toolbar"
            aria-label="Toolbar with button groups">
                <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>

                <input type="submit" class="btn btn-default " value="Login">
            </div>


            <button type="button" class="forgot py-0 my-0" data-bs-toggle="modal"
            data-bs-target="#forgotStudentPass">
					Forgot password?
			   </button>

            <p class="text-left1 px-1">
                 Applicant?
                <a href="<?php echo base_url('Login/applicant'); ?>">Click here!</a><br>
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
                        Forgot Password
                    </h5>
				  </div>
					<div class="modal-body px-3">
                        <div id="errorMessageForgot" class="alert alert-danger alert-dismissible fade show" style="display:none">
                                Error: Student data not found
                                <button type="button" class="btn-close close exit"></button>
                        </div>
                        <div id="errorMessageKey" class="alert alert-danger alert-dismissible fade show" style="display:none">
                                Error: Invalid Key
                                <button type="button" class="btn-close close exitKey"></button>
                        </div>
						<div id="verify">
							<p class="text-muted small pt-2">Verify your TUP Student Number</p>
								<div class="form-floating my-3">
									<input type="text" class="form-control" id="studentUsername"
                                    name="studentUsername" placeholder="Username">
									<label for="forgotPassUsername" class="py-2">Student Number</label>
								</div>
								<div class="d-flex justify-content-end pt-3 pb-2">
									<button type="button" class="btn btn-default check mx-2 studentNumber">
                                        Verify
                                    </button>
									<button type="button" onclick="location.href='<?php echo base_url('Login/student')?>'"
                                    class="btn btn-secondary px-3">
										Cancel
									</button>
								</div>
						</div>

						<div id="code" style="display:none">
							<p class="text-muted small pt-2">Enter the one-time pin code sent to your email</p>
							<div class="form-floating mb-3">
				    			<input type="text" class="form-control" name="studentOTP" maxlength="6" id="otp"
                                placeholder="One-Time Pin" 
                           oninput="this.value = this.value.replace(/[^a-z0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
								<label for="otp" class="py-2">One-Time PIN</label>
							</div>
							<div class="d-flex justify-content-end pt-3 pb-2">
								<button type="button" class="btn btn-default check mx-2 codekey">
                                    Submit
                                </button>
								<button type="button" onclick="location.href='<?php echo base_url('Login/student')?>'"
                                class="btn btn-secondary px-3" >
									Cancel
								</button>
							</div>							
						</div>

						<div id="changepass" style="display:none">
						
								<p class="text-muted small pt-2">Change your password</p>
								<div class="form-floating my-3">
									<input type="password" class="form-control" name="studentNewPass" id="newpass"
                                    placeholder="New Password">
									<label for="newpass" class="py-2">New Password</label>
								</div>
								<div class="form-floating mb-3">
									<input type="password" class="form-control" name="studentOldPass" id="confirmpass"
                                    placeholder="Confirm Password">
									<label for="confirmpass" class="py-2">Confirm Password</label>
								</div>
								<div class="d-flex justify-content-end pt-3 pb-2">
									<button type="submit" class="btn btn-default check mx-2 sendData">Submit</button>
									<button type="button" onclick="location.href='<?php echo base_url('Login/student')?>'"
                                    class="btn btn-secondary px-3" >
										Cancel
									</button>
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
  
    var newpass = document.getElementById("newpass");
    var confirmpass = document.getElementById("confirmpass");

    // new password and confirm password validation
    function validatePassword() {
        if (newpass.value != confirmpass.value) {
            confirmpass.setCustomValidity("Passwords don't match");

        } else {
            confirmpass.setCustomValidity('');
        }
    }
    newpass.onchange = validatePassword;
    confirmpass.onkeyup = validatePassword;
</script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- jQuery DataTables JS CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
	$(document).ready(function () {
		$('#dataTable').DataTable();
        $('.exit').click(function() {
                $('#errorMessageForgot').css('display', 'none');
        });
        $('.exitKey').click(function() {
                $('#errorMessageKey').css('display', 'none');
        });
		$('.studentNumber').click(function () {
			var username = $('#studentUsername').val();
			$.ajax({
				url: "<?php echo site_url('forgotpassword/studentForgot');?>",
				method: "POST",
				data: {
					username:username       
				},
				success: function (data) {
                    if(data != 0){
                        var key = Math.random().toString(36).substr(2, 6)
                        $('#verify').css('display', 'none');
                        $('#code').css('display', '');
                        $.ajax({
                            url: "<?php echo site_url('forgotpassword/sendEmailStudent');?>",
                            method: "POST",
                            data: {
                                key: key,
                                data: data
                            },
                            success: function (test) {
                                $('.codekey').click(function () {
                                    var code = $('#otp').val();
                                    console.log('Entered Key='+code)
                                    if(code==key){
                                        $('#code').css('display', 'none');
                                        $('#changepass').css('display', '');
                                        $('.sendData').click(function() {
											var confirmpass = $('#confirmpass').val();
											var newpass = $('#newpass').val();
											if(confirmpass==newpass){
												$.ajax({
												url: "<?php echo site_url('forgotpassword/changepassStudent'); ?>",
												method: "POST",
												data: {
													username:username,
													newpass:newpass
												},
												success:function(data) {
													window.location.replace("<?php echo base_url('Login/student')?>");
												}
											});	
											}
											else{
												$('#errorMessageConfirm').css('display', '') 	
											}
											
										});
                                    }
                                    else{
                                        $('#errorMessageKey').css('display', '') 
                                        }
                                    });
                            }    
                        });
                    }
                    else{
                        $('#errorMessageForgot').css('display', '') 
                    }
				}
			});
		});

       

	});

</script>
</body>

</html>