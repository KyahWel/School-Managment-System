<?php
include __DIR__ . '/../includes/studentSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <title>Dashboard</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <h3>Dashboard</h3>
    <div class="row">
        <!-- Date today -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
            <div class="calendar py-5">
                <div class="month pt-4">
                    <h1 id="getMonth"></h1>
                </div>
                <div class="day text-center">
                    <p id="today"></p>
                </div>
            </div>
        </div>

        <!-- Billboard -->
        <div class="col-lg-8 col-md-6 col-sm-12 mb-2">
            <div class="billboard">
                <div class="billboardTitle">
                    <p class="text-center text-white p-2">Current Billboard</p>
                </div>
                <div class="billboardContent px-3">
                    <dl>
                        <dt>
                            <h5 class="title">Title, When</h5>
                        </dt>
                        <dd class="details">Details</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <!-- View Professor Table -->
    <div class="col-12 align-self-center my-3" id="viewProfessorTable">
        <ul class="nav nav-tabs text-dark d-flex flex-row justify-content-evenly" id="viewProfessorTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="viewProfessorInformationTab" data-bs-toggle="tab" data-bs-target="#ProfessorInformation" type="button" role="tab" aria-controls="ProfessorInformation" aria-selected="true">Mon</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSubjectTab" data-bs-toggle="tab" data-bs-target="#ProfessorSubject" type="button" role="tab" aria-controls="ProfessorSubject" aria-selected="false">Tues</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Wed</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Thurs</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Fri</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Sat</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="viewProfessorSectionTab" data-bs-toggle="tab" data-bs-target="#ProfessorSection" type="button" role="tab" aria-controls="ProfessorSection" aria-selected="false">Sun</button>
            </li>
        </ul>
        <div class="tab-content p-3" id="viewProfessorTabContent">
            <!-- Information Tab -->
            <div class="tab-pane show active my-3" id="ProfessorInformation" role="tabpanel" aria-labelledby="viewProfessorInformationTab">
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
            </div>
            <!-- Subject Tab -->
            <div class="tab-pane" id="ProfessorSubject" role="tabpanel" aria-labelledby="viewProfessorSubjectTab">
                <div class="table-responsive">
                    <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                        <!--Table Body-->
                        <thead>
                            <tr>
                                <th>School Year</th>
                                <th>Year Level</th>
                                <th>Semester</th>
                                <th>Course</th>
                                <th>Subject Code</th>
                                <th>Subject Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020-2021</td>
                                <td>First</td>
                                <td>Second</td>
                                <td>BSCS</td>
                                <td>Math-01</td>
                                <td>Mathematics 1</td>
                            </tr>
                            <tr>
                                <td>2020-2021</td>
                                <td>First</td>
                                <td>Second</td>
                                <td>BSCS</td>
                                <td>Math-01</td>
                                <td>Mathematics 1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/calendar.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>