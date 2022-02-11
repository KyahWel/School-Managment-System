<?php
$this->load->view('includes/studentSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/enrollment.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/admission.css'); ?>" rel="stylesheet" type="text/css">
    <title>Enrollment</title>
</head>
<div class="lightbox">
    <div class="row">
        <div class="col-lg-12 align-self-center">
            <div class="table-wrapper-2">
                <div class="wrap px-5 py-5">
                    <img class="bugfix" src="../assets/images/bug-fixing.svg" alt="Under Maintenance" class="px-3">
                    <h3 class="text-uppercase">This page is under maintenance.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="height-100 pt-2 back container-fluid">
    <h3 class="py-2 fw-bold">Enrollment</h3>
    <div class="row my-3 pt-1">
        <div class="col-lg-6">
            <div class="row">
                <b class="col-lg-3">Student Name:</b>
                <p class="col-lg-8 text-uppercase"> San Pedro, Gina Borja</p>
            </div>
            <div class="row">
                <b class="col-lg-3"> Student ID:</b>
                <p class="col-lg-8 text-uppercase"> TUPM-21-2321</p>
            </div>
            <div class="row mb-3">
                <label class="col-lg-3 pt-1"><b>Course:</b></label>
                <div class="col-lg-5">
                    <select class="form-select form-select-sm" name="course" aria-label="Course" value="course nya">
                        <option selected value="Course Nya"> Course Nya</option>
                        <option value="Other courses"> Other Courses </option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-lg-3 pt-1"><b>Section:</b></label>
                <div class="col-lg-5">
                    <select class="form-select form-select-sm" name="section" aria-label="Section" value="section nya">
                        <option selected value="Course Nya"> Section nya</option>
                        <option value="Other courses"> Other sections </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <b class="col-lg-3">School Year:</b>
                <p class="col-lg-8 text-uppercase"> 2022-2023</p>
            </div>
            <div class="row">
                <b class="col-lg-3">Year Level:</b>
                <p class="col-lg-8 text-uppercase"> Third</p>
            </div>
            <div class="row">
                <label class="col-lg-3 pt-1"><b>Semester:</b></label>
                <div class="col-lg-5">
                    <select class="form-select form-select-sm" name="course" aria-label="Semester" value="semester">
                        <option selected hidden disabled> Please Select</option>
                        <option> First </option>
                        <option> Second </option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="enrollmentDetails mt-3 mb-5">
        <div class="tabHeader">
            <p class="text-center text-white p-2">Enrollment Details</p>
        </div>
        <div class="tabDetails p-3">
            <h6 class="fw-bold px-4">Available Subjects</h6>
            <div class="table-responsive">
                <table class="table text-center align-middle table-striped table-borderless table-hover px-2" aria-label="availableSubjectList" id="table-bodyEnrollment">
                    <!--Table Body-->
                    <thead>
                        <tr>
                            <th scope="col" style="width: 250px;">Subject Code</th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Credited Units</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ABC-12</td>
                            <td>Data Structures and Algorithm</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>ABC-13</td>
                            <td>Data Analytics</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>ABC-14</td>
                            <td>Information Assurance and Security</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>ABC-15</td>
                            <td>Web Development</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>ABC-16</td>
                            <td>Software Engineering</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mx-2">
                <button type="button" class="btn btn-warning btn-sm">Enroll</button>
            </div>
        </div>
    </div>
</div>
<div class="py-2">&nbsp;</div>


<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>