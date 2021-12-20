<?php
include __DIR__ . '/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/adminDashboard.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/gh/nizarmah/calendar-javascript-lib@master/calendarorganizer.min.js" rel="stylesheet">
    <title>Admin | Dashboard </title>
</head>

<body onload="startTime()">
    <div class="height-100 pt-2 container-fluid">
        <h3 class="mt-2">Dashboard</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                
            </div>


            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="billboard">
                    <div class="billboardTitle">
                        <p class="text-center text-white p-2">Current Billboard</p>
                    </div>
                    <div class="billboardContent px-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos iure ex at accusamus perspiciatis numquam soluta repudiandae magni debitis.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 align-self-center my-3" id="viewInfoDashboard">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewInfoTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link student active" id="viewStudentButton" data-bs-toggle="tab" data-bs-target="#studentsTabContent" type="button" role="tab" aria-controls="studentsTabContent" aria-selected="true">Students</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link faculty" id="viewFacultytButton" data-bs-toggle="tab" data-bs-target="#facultyTabContent" type="button" role="tab" aria-controls="facultyTabContent" aria-selected="false">Faculty</button>
                </li>
            </ul>
            <div class="tab-content p-3" id="viewStudentsTab">
                <div class="tab-pane show active" id="studentsTabContent" role="tabpanel" aria-labelledby="Students Information">
                    <div class="table-responsive">
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Stud001-2001</td>
                                    <td>Rivera</td>
                                    <td>Wally</td>
                                    <td>BSCS-3A-NS</td>
                                    <td>Regular</td>
                                </tr>
                                <tr>
                                    <td>Stud002-2001</td>
                                    <td>Castro</td>
                                    <td>Dexter</td>
                                    <td>BSCS-3A-NS</td>
                                    <td>Regular</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="facultyTabContent" role="tabpanel" aria-labelledby="Faculty Information">
                    <div class="table-responsive">
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                            <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>Faculty ID</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Prof001-2001</td>
                                    <td>test</td>
                                    <td>Wally</td>
                                    <td>BSCS-3A-NS</td>
                                    <td>Regular</td>
                                </tr>
                                <tr>
                                    <td>Prof002-2001</td>
                                    <td>test1</td>
                                    <td>Dexter</td>
                                    <td>BSCS-3A-NS</td>
                                    <td>Regular</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>


</body>

</html>