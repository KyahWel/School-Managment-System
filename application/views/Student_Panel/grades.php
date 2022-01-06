<?php
include __DIR__ . '/../includes/studentSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/grades.css'); ?>" rel="stylesheet" type="text/css">
    <title>Student | Grades</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainGrades" style="display: block;">    
        <div class="GradesTab my-3">
            <h3>Grades</h3>
        </div>
        <div class="container-fluid " id="steps" style="display: block;">
            <div class=" mt-3 applicant-head text-dark px-3 rounded-3 information alert alert-danger">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    </div>
                    <div class="flex-grow ms-2">
                        <u>Attention to all Students</u>
                    </div>
                    <div class="flex-grow-1 ms-4">
                        Viewing of grades online is strictly for personal use only! Students who want an official copy from the Registrar for scholarship/employment purposes, must make a request for the official document from the Registrar's Office.<br>
                        Your GRADES posted in TUP WEB ERS from the previous school years were part of the data we migrated from the old enrollment system and are still subject for checking and validation from the registrar.<br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-6 text-uppercase fw-bolder">
                <label>Welcome, Lida Cruz</label>
            </div>
            <!--Search -->
            <div class="col-6 align-self-center my-3" id="filter">
                <label>Filter by:</label>
                <select required>
                    <option value="" disabled selected hidden>S.Y</option>
                    <option value="school_year">2019</option>
			        <option value="school_year2">2020</option>
			        <option value="school_year3">2021</option>
			        <option value="school_year4">2022</option>
                </select>
                <select required>
                    <option value="" disabled selected hidden>Yr. Level</option>
                    <option value="first">First</option>
                    <option value="second">Second</option>
                    <option value="third">Third</option>
                    <option value="fourth">Fourth</option>
                </select>
                <input type="text" id="searchGradesID" name="searchGradesID" placeholder="Search">
                <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
            </div> 
        </div> 
        <!--Grades List-->
        <div class="col-12 align-self-center" id="GradesTable">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <table class="col-11 mb-3 mt-3 align-self-center table-body">
                                <tr>
                                    <td>School Year: 2020-2021</td>
                                    <td>Year Level: Third</td>
                                </tr>
                                <tr>
                                    <td>Course: BSCS-NS</td>
                                    <td>Semester: First</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">  
                    <table class="table table-default align-middle table-striped table-borderless table-hover" id="table-body">
                        <thead>
                            <tr>
			                    <th>Subject Code</th>
			                    <th>Subject Name</th>
			                    <th>Teacher</th>
			                    <th>Units</th>
                                <th>Section</th>
                                <th>Average</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DM001</td>
                                <td>Discrete Mathematics</td>
                                <td>Salvador John</td>
                                <td>1</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.25</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>CSB001</td>
                                <td>CS Basics</td>
                                <td>Castro Dexter</td>
                                <td>2</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.00</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>DS001</td>
                                <td>Data Structures</td>
                                <td>Reyes Mary</td>
                                <td>3</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.75</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>SP001</td>
                                <td>System Programming</td>
                                <td>Salvador Jeff</td>
                                <td>3</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.25</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>DP001</td>
                                <td>Data Programming</td>
                                <td>Garcia Dave</td>
                                <td>1</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.25</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>OOP001</td>
                                <td>OOP using C++</td>
                                <td>Catahan Bryan</td>
                                <td>2</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.75</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>CN001</td>
                                <td>Computer Networks</td>
                                <td>Reyes Kyla</td>
                                <td>3</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.50</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>MA001</td>
                                <td>Mobile Applications</td>
                                <td>Roxas Tim</td>
                                <td>3</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.25</td>
                                <td><b>Passed</b></td>
                            </tr>
                            <tr>
                                <td>AJ001</td>
                                <td>Advanced Java</td>
                                <td>Acosta Jade</td>
                                <td>3</td>
                                <td>BSCS-NS-3A</td>
                                <td>1.50</td>
                                <td><b>Passed</b></td>
                            </tr> 
                        </tbody>
                    </table>	
                    <div class="col-12 mb-1 text-end px-5 fw-bold text-decoration-underline">GPA: 1.38</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>