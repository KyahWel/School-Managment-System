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
    <title>ERS | Applicant Login</title>
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
    <script language="JavaScript">
            window.history.forward(1);
    </script>

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
                <?php $this->session->unset_userdata ('loginerror'); ?>
            <?php elseif ($this->session->flashdata('invalid')) : ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?= $this->session->flashdata('invalid'); ?>
                    <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
                </div>
                <?php $this->session->unset_userdata ('invalid'); ?>
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
                <div class="btn-toolbar justify-content-between mb-2" role="toolbar" aria-label="Toolbar with button groups">
                    <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
                    <input type="submit" class="btn btn-default " name="login" value="Login"></input>
                </div>
                <button type="button" class="forgot py-0 my-0" data-bs-toggle="modal" data-bs-target="#forgotApplicantNumber"
                 title="Your applicant number is sent together with the test permit. Kindly check your email.">
                    Forgot applicant number?
                </button>
                <p class= "notice text-center p-1">
                    <i>
                    For new applicant and applicants who have not completed the requirements, click APPLY NOW.
                    </i>
                </p>
                <button type="button" class="btn btn-default apply" data-bs-toggle="modal" 
                data-bs-target="#verification" name="apply" >APPLY NOW</button>
            </form>
        </div>

        <!-- Forgot tup number -->
        <div class="modal fade" id="forgotApplicantNumber" tabindex="-1" aria-modal="true" aria-labelledby="forgotApplicantNumber" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body small">
                Your applicant number is sent together with the test permit. Kindly check your email.
                <p class="mt-3 text-muted">
                    <i>If you happen to delete your email, please do contact the school administation.</i> 
                </p>
                </div>
                <div class="d-flex justify-content-end mx-3 mb-3">
                    <button type="button" class="btn btn-default py-1" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Profile Verification -->
        <div class="modal" id="verification" tabindex="-1" aria-modal="true" aria-hidden="true">
		<div class="modal-dialog modal-md modal-dialog-centered">
			<div class="modal-content">
				<div class="d-flex justify-content-center head py-3">
					<h5 class="modal-title fw-bold" id="editProfessorHeader">
                    Profile Verification</h5>
				</div>
				<div class="modal-body mt-2 px-4">
                    <div class="row-lg-12 mt-0 asterisk align-items-center">
                        <div id="errorMessage" class="alert alert-danger alert-dismissible fade show" style="display:none">
                                Error: Applicant data already exists
                                <button type="button" class="btn-close close exit"></button>
                        </div>
                        
                        <div class="col">
							<div class="form-floating mb-3">
								<input type="text" name="firstnameVerify" id="fnameVerify"  class="form-control form-control-sm"
									required aria-label="First name" onkeydown="return /[a-z ]/i.test(event.key)"
									placeholder="First Name">
									<label for="fnameVerify" class="py-2">First name</label>
							</div>
                        </div>
						<div class="col mt-1">
							<div class="form-floating mb-3">
								<input type="text" name="middlename" id="midnameVerify"  class="form-control form-control-sm"
									aria-label="First name" onkeydown="return /[a-z ]/i.test(event.key)"
									placeholder="Middle Name">
								<label for="midnameVerify" class="py-2">Middle name</label>
							</div>
                        </div>
						<div class="col mt-1">
							<div class="form-floating mb-3">
								<input type="text" name="lastname" id="surnameVerify"  class="form-control form-control-sm"
									required aria-label="First name"
									placeholder="Surname">
								<label for="midnameVerify" class="py-2">Surname</label>
							</div>
                        </div>
                        <div class="col">
							<div class="form-floating mb-2">							
                                <input type="text" name="extname" id="suffixVerify" class="form-control form-control-sm"
                                    aria-label="Extension Name" required onkeydown="return /[a-z ]/i.test(event.key)"
									placeholder="Suffix">
                                <label class="form-label" class="py-2">Suffix</label>
							</div>
                        </div>
                    </div>
                </div>
				<hr class="line">
                <div class="d-flex justify-content-center mb-3">
                    <button type="button" class="btn btn-default check mx-2">Continue</button>
                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                    </button>
                </div>
               
			</div>
		</div>
	</div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
     <!-- jQuery JS CDN -->
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- jQuery DataTables JS CDN -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>                                             
    <script type="text/javascript">
        $(document).ready(function(){
            <?php $this->session->unset_userdata('authenticated')?>
            $('#dataTable').DataTable();
            $('.exit').click(function() {
                $('#errorMessage').css('display', 'none');
            });
            $('.check').click(function() {
                var fname = $("#fnameVerify").val();
                var lname = $("#surnameVerify").val();
                var middlename = $("#midnameVerify").val();
                var extname = $("#suffixVerify").val();
                if(fname=='' || lname==''){
                    if(fname==''){
                        $("#fnameVerify").css("border", "1px solid red");
                    }
                    else{
                        $("#fnameVerify").css("border", "1px solid black");
                    }
                    if(lname==''){
                        $("#surnameVerify").css("border", "1px solid red");
                    }
                    else{
                        $("#surnameVerify").css("border", "1px solid black");
                    }
                   
                }
                else{
                    $.ajax({
                        url: "<?php echo site_url('applicantVerification');?>",
                        method: "POST",
                        data: {
                            fname:fname,
                            lname:lname,
                            middlename:middlename,
                            extname:extname
                        },
                        success: function(data) {
                            if(data == 1){
                                // Data is not existing in database
                                window.location.replace('<?php echo site_url('applicantRegistration'); ?>'+'?firstname="'+fname+'"&lastname="'+lname+'"&middlename="'+middlename+'"&extname="'+extname+'"');                            
                            }
                            else{
                                // Data is existing in database
                                $('#errorMessage').css('display', '') 
                            }
                        }
                    });
                }
                
            });
});
    </script>                               
</body>

</html>