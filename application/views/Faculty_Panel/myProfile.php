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
            <h3 mx-0>My Profile</h3>
            <div class=" d-flex align-items-center">
                <div class=" profile-pic-div">
                    <img src="../assets/images/facultyAvatar.png" alt="Student Avatar" id="facultyPhoto">
                    <input type="file" id="facultyFile">
                    <label for="file" id="uploadBtnFaculty">Choose Photo</label>
                </div>

                <!-- My Profile Details -->
                <div class="table-responsive mx-3">
                    <table id="myProfileDetails" class="table-body">
                        <tr>
                            <td class="px-3 pt-2">
                                <p><b>Faculty ID:</b></p>
                                <p><b>Name:</b></p>
                                <p><b>Department:</b></p>
                                <p><b>Email::</b></p>

                            </td>
                            <td class="pt-2 px-2">
                                <p>1234567890</p>
                                <p>Lida Cruz</p>
                                <p>Mathematics Department</p>
                                <p>lida.garcia@gmail.com</p>

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

                <div class="container my-3">
                    <form class="container mt-4" action="">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--Last Name-->
                                <input type="text" class="form-control" readonly>
                                <label class="form-label pt-2">Last Name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--First Name-->
                                <input type="text" class="form-control" readonly>
                                <label class="form-label pt-2">First Name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--Middle Name-->
                                <input type="text" class="form-control" readonly>
                                <label class="form-label pt-2">Middle Name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-1">
                                <!--Suffix-->
                                <input type="text" class="form-control" readonly>
                                <label class="form-label pt-2">Suffix</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-1">
                                <!--Phone Number-->
                                <input type="text" class="form-control" readonly>
                                <label class="form-label pt-2">Phone Number</label>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-1">
                                <!--Email-->
                                <input type="text" class="form-control" readonly>
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
                            <form class="container my-3" action="">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--Last Name-->
                                        <input type="text" class="form-control">
                                        <label class="form-label pt-2">Last Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--First Name-->
                                        <input type="text" class="form-control">
                                        <label class="form-label pt-2">First Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--Middle Name-->
                                        <input type="text" class="form-control">
                                        <label class="form-label pt-2">Middle Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-1">
                                        <!--Suffix-->
                                        <input type="text" class="form-control">
                                        <label class="form-label pt-2">Suffix</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <!--Phone Number-->
                                        <input type="text" class="form-control">
                                        <label class="form-label pt-2">Phone Number</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <!--Email-->
                                        <input type="text" class="form-control">
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
<script type="text/javascript">
    const imgDiv = document.querySelector('.profile-pic-div');
    const avatar = document.querySelector('#facultyPhoto');
    const file = document.querySelector('#facultyFile');
    const uploadBtn = document.querySelector('#uploadBtnFaculty');

    //if user hover on img div 

    imgDiv.addEventListener('mouseenter', function() {
        uploadBtnFaculty.style.display = "block";
    });

    //if we hover out from img div

    imgDiv.addEventListener('mouseleave', function() {
        uploadBtnFaculty.style.display = "none";
    });

    //lets work for image showing functionality when we choose an image to upload

    //when we choose a foto to upload

    facultyFile.addEventListener('change', function() {
        //this refers to file
        const choosedFile = this.files[0];

        if (choosedFile) {

            const reader = new FileReader(); //FileReader is a predefined function of JS

            reader.addEventListener('load', function() {
                avatar.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
        }
    });
</script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>