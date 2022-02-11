<?php
$this->load->view('includes/studentSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/grades.css'); ?>" rel="stylesheet" type="text/css">
    <title>Student | Grades</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainGrades" style="display: block;">
        <div class="GradesTab pt-2">
            <h3>View Grades</h3>
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
                        Viewing of grades online is strictly for personal use only! Students who want an official copy from the
                        Registrar for scholarship/employment purposes, must make a request for the official document from the
                        Registrar's Office.<br>
                        Your GRADES posted in TUP WEB ERS from the previous school years were part of the data we migrated from
                        the old enrollment system and are still subject for checking and validation from the registrar.<br>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-6 text-uppercase fw-bolder">
                <label>Welcome, <?php echo $student->firstname?> <?php echo $student->lastname?></label>
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
                <button type="button" class="btn btn-sm" id="search">
                    <i class="fas fa-search" data-bs-toggle="tooltip"
                    aria-hidden="true" title="Search"></i>
                </button>
            </div>
        </div>
        <!--Grades List-->
        <div class="col-12 align-self-center" id="GradesTable">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <table class="col-11 mb-3 mt-3 align-self-center table-body"
                            aria-describedby="Grades Table Header">
                                <tr>
                                    <td>School Year: <?php echo date("Y"); ?>-<?php echo date("Y") + 1; ?></td>
                                    <td>Year Level: <?php echo $student->yearlevel?></td>
                                </tr>
                                <tr>
                                    <td>Course: <?php echo $student->degree?> <?php echo $student->major?></td>
                                    <td>Semester: 
                                        <?php if ($sem != NULL) : ?>
                                            <?php echo $sem?>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-default align-middle table-striped table-borderless table-hover"
                    id="table-body" aria-describedby="Grades Table">
                        <thead>
                            <tr>
			                    <th scope="col" class="py-3">Subject Code</th>
			                    <th scope="col" class="py-3">Subject Name</th>
			                    <th scope="col" class="py-3">Teacher</th>
			                    <th scope="col" class="py-3">Units</th>
                                <th scope="col" class="py-3">Grade</th>
                                <th scope="col" class="py-3">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($grades != NULL) : ?>
                                <?php foreach($grades as $grades) {?>
                                <tr>
                                    <td><?php echo $grades->subjectCode?></td>
                                    <td><?php echo $grades->name?></td>
                                    <td><?php echo $grades->firstname?> <?php echo $grades->lastname?></td>
                                    <td><?php echo $grades->units?></td>
                                    <td><?php echo $grades->equivalent?></td>
                                    <td>
                                        <?php if ($grades->equivalent == 0) : ?>
                                            <strong>Unavailable</strong>
                                        <?php elseif ($grades->equivalent == 5) : ?>
                                            <strong style="color:red;">Failed</strong>
                                        <?php else: ?>
                                            <strong>Passed</strong>
                                        <?php endif ?>
                                    </td>
                                </tr>
                                <?php } ?> 
                            <?php endif ?>
                        </tbody>
                    </table>	
                    <div class="col-12 mb-1 text-end px-5 py-3 fw-bold text-decoration-underline"
                    style="font-size: 1rem;"> GPA: <?php echo $gpa?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2"></div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>