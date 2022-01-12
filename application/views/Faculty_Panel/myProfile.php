<?php
include __DIR__ . '/../includes/facultySideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/facultyProfile.css'); ?>" rel="stylesheet" type="text/css">
    <title>My Profile</title>
</head>

<div class="height-100 pt-2 container-fluid">

    <div class="container my-3">
        <!-- Page Title -->
        <div class="myProfile my-3">
            <h3 class="py-2">My Profile</h3>
            <div class=" d-flex align-items-center info1 my-2">
                <div class=" profile-pic-div">
                    <img src="../assets/images/facultyAvatar.png" alt="Student Avatar" id="facultyPhoto">
                </div>

                <!-- My Profile Details -->
                <div class="table-responsive mx-3">
                    <table id="myProfileDetails" class="table-body">
                        <tr>
                            <td class="px-3 pt-2">
                                <p><b>Faculty ID:</b></p>
                                <p><b>Name:</b></p>
                                <p><b>Department:</b></p>
                                <p><b>Email:</b></p>

                            </td>
                            <td class="pt-2 px-2">
                                <p><?php echo $prof->teacherNumber?> </p>
                                <p><?php echo $prof->firstname?> <?php echo $prof->lastname?></p>
                                <p><?php echo $prof->department?> </p>
                                <p><?php echo $prof->email?> </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <!-- Personal Information -->
            <div class="table-wrapper">
                <!--Table Header-->
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Personal Information</h2>
                        </div>
                    </div>
                </div>

                <div class="container info my-3">
                    <form class="container mt-4" action="">
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--Last Name-->
                                <input type="text" class="form-control" readonly value="<?php echo $prof->lastname?>">
                                <label class="form-label pt-2">Last Name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--First Name-->
                                <input type="text" class="form-control" readonly value="<?php echo $prof->firstname?>">
                                <label class="form-label pt-2">First Name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--Middle Name-->
                                <input type="text" class="form-control" readonly  value="<?php echo $prof->middlename?>">
                                <label class="form-label pt-2">Middle Name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--Suffix-->
                                <input type="text" class="form-control" readonly  value="<?php echo $prof->extname?>">
                                <label class="form-label pt-2">Suffix</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-1">
                                <!--Phone Number-->
                                <input type="text" class="form-control" readonly  value="<?php echo $prof->phonenum?>">
                                <label class="form-label pt-2">Phone Number</label>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-1">
                                <!--Email-->
                                <input type="text" class="form-control" readonly  value="<?php echo $prof->email?>">
                                <label class="form-label pt-2">Email</label>
                            </div>
                        </div>
                    </form>
                    <div class="myProfileButton d-flex justify-content-end">
                        <!--Buttons-->
                        <button class="btn btn-default" id="edit" data-bs-toggle="modal" data-bs-target="#editPersonalInformation">Edit</button>
                    </div>
                </div>

            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editPersonalInformation" tabindex="-1" aria-labelledby="editPersonalInformationHeader" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPersonalInformationHeader">Edit Personal Information</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="container my-3" method="POST" action="<?php echo site_url('FacultyControllerFunctions/updateTeacher/')?><?= $this->session->userdata('auth_user')['teacherID']?>">
                                <div class="row mb-3">
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--Last Name-->
                                        <input type="text" class="form-control" name="lastname" value="<?php echo $prof->lastname?>">
                                        <label class="form-label pt-2">Last Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--First Name-->
                                        <input type="text" class="form-control" name="firstname" value="<?php echo $prof->firstname?>">
                                        <label class="form-label pt-2">First Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--Middle Name-->
                                        <input type="text" class="form-control" name="middlename" value="<?php echo $prof->middlename?>">
                                        <label class="form-label pt-2">Middle Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--Suffix-->
                                        <input type="text" class="form-control" name="extname" value="<?php echo $prof->extname?>">
                                        <label class="form-label pt-2">Suffix</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <!--Phone Number-->
                                        <input type="text" class="form-control" name="phonenum" value="<?php echo $prof->phonenum?>">
                                        <label class="form-label pt-2">Phone Number</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <!--Email-->
                                        <input type="text" class="form-control" name="email" value="<?php echo $prof->email?>">
                                        <label class="form-label pt-2">Email</label>
                                    </div>
                                </div>
                                <div class="editPersonalInformationButton d-flex justify-content-end">
                                    <!--Buttons-->
                                    <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                    <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>