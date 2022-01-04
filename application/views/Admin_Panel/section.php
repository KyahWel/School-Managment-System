<?php
include __DIR__.'/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/section.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Section</title>
</head>

<div class="height-100 pt-2 container-fluid">

    <div class="container my-3">
        
        <!-- Section Tab -->
        <div class="SectionTab my-3">
            <h3><i>Welcome to Section Tab</i></h3>
        </div>

        <div class="col-12 align-self-center my-3">
            <div class="table-wrapper">
            
                <!--Table Header-->
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Add Section</h2>
                        </div>
                    </div>
                </div>

                <div class="container my-3">   
                    <form class="container" action="" class>
                        <div class="row mb-3">
                            <div class="col-lg-3"> <!--Year Level-->
                                <label class="form-label">Year Level</label>
                                <select name="yearLevel" class="form-control">
                                    <option value="" disabled selected hidden></option>
                                    <option value="yearLevel">First Year</option>
                                    <option value="yearLevel">Second Year</option>
                                    <option value="yearLevel">Third Year</option>
                                    <option value="yearLevel">Fourth Year</option>
                                </select>
                            </div>
                            <div class="col-lg-3"> <!--Course-->
                                <label class="form-label">Course</label>
                                <select name="course" class="form-control">
                                    <option value="" disabled selected hidden></option>
                                    <option value="course">Course 1</option>
                                    <option value="course">Course 2</option>
                                    <option value="course">Course 3</option>
                                    <option value="course">Course 4</option>
                                </select>
                            </div>
                            <div class="col-lg-4"> <!--Section-->
                                <label class="form-label">Section</label>
                                <select name="section" class="form-control">
                                    <option value="" disabled selected hidden></option>
                                    <option value="section">Section 1</option>
                                    <option value="section">Section 2</option>
                                    <option value="section">Section 3</option>
                                    <option value="section">Section 4</option>
                                </select>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-evenly" id="addSectionButton">
                                <button type="button" class="btn btn-sm" id="add" data-bs-toggle="modal" data-bs-target="#addSection"><i class="fas fa-plus" data-bs-toggle="tooltip" title="Add Section"></i></button>
                                <button type="button" class="btn btn-sm" id="edit" data-bs-toggle="modal" data-bs-target="#editSection"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit Section"></i></button>
                                <button type="button" class="btn btn-sm" id="delete" data-bs-toggle="modal" data-bs-target="#deleteSection"><i class="fas fa-eraser" data-bs-toggle="tooltip" title="Delete Section"></i></button>
                            </div>
                        </div>
                    </form>

                    <!-- Filter -->
                    <div class="container col-12 align-self-center my-3" id="filterAndSearch">
                        <label>Filter by:</label>
                        <select required>
                            <option value="" disabled selected hidden>Year Level</option>
                            <option value="yearLevel">First Year</option>
                            <option value="yearLevel">Second Year</option>
                            <option value="yearLevel">Third Year</option>
                            <option value="yearLevel">Fourth Year</option>
                        </select>
                        <select required>
                            <option value="" disabled selected hidden>Course</option>
                            <option value="course">Course 1</option>
                            <option value="course">Course 2</option>
                            <option value="course">Course 3</option>
                            <option value="course">Course 4</option>
                        </select>
                    </div>
                </div>

                <!--Table Body-->
                <div class="table-responsive">  
                    <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Year Level</th>
                                <th>Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stud001-2001</td>
                                <td>Lida Cruz</td>
                                <td>First Year</td>
                                <td>Course 1</td>
                            </tr>
                            <tr>
                                <td>Stud001-2002</td>
                                <td>Jina San Pedro</td>
                                <td>First Year</td>
                                <td>Course 1</td>
                            </tr>
                            <tr>
                                <td>Stud001-2003</td>
                                <td>Sarah Jimenez</td>
                                <td>First Year</td>
                                <td>Course 1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Add Section -->
                <div class="modal fade" id="addSection" tabindex="-1" aria-labelledby="addSectionHeader" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form class="container" action="">
                                    <div class="row mb-3">
                                        <div class="col-lg-6"> <!--Year Level-->
                                            <label class="form-label">Year Level</label>
                                            <select name="yearLevel" class="form-control">
                                                <option value="" disabled selected hidden></option>
                                                <option value="yearLevel">First Year</option>
                                                <option value="yearLevel">Second Year</option>
                                                <option value="yearLevel">Third Year</option>
                                                <option value="yearLevel">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6"> <!--Course-->
                                            <label class="form-label">Course</label>
                                            <select name="course" class="form-control">
                                                <option value="" disabled selected hidden></option>
                                                <option value="course">Course 1</option>
                                                <option value="course">Course 2</option>
                                                <option value="course">Course 3</option>
                                                <option value="course">Course 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6"> <!--Section-->
                                            <label class="form-label">Section</label>
                                            <input type="text" class="form-control" name="section">
                                        </div>
                                        <div class="col-lg-6"> <!--Capacity-->
                                            <label class="form-label">Capacity</label>
                                            <select name="capacity" class="form-control">
                                                <option value="" disabled selected hidden></option>
                                                <option value="capacity">25</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="addSectionButton d-flex justify-content-end"> <!--Buttons-->
                                        <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                        <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Edit Section -->
                <div class="modal fade" id="editSection" tabindex="-1" aria-labelledby="editSectionHeader" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="editSectionHeader">Edit Section</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form class="container" action="">
                                    <div class="row mb-3">
                                        <div class="col-lg-4"> <!--Year Level-->
                                            <label class="form-label">Year Level</label>
                                            <select name="yearLevel" class="form-control">
                                                <option value="" disabled selected hidden></option>
                                                <option value="yearLevel">First Year</option>
                                                <option value="yearLevel">Second Year</option>
                                                <option value="yearLevel">Third Year</option>
                                                <option value="yearLevel">Fourth Year</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4"> <!--Course-->
                                            <label class="form-label">Course</label>
                                            <select name="course" class="form-control">
                                                <option value="" disabled selected hidden></option>
                                                <option value="course">Course 1</option>
                                                <option value="course">Course 2</option>
                                                <option value="course">Course 3</option>
                                                <option value="course">Course 4</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4"> <!--Section-->
                                            <label class="form-label">Section</label>
                                            <select name="section" class="form-control">
                                                <option value="" disabled selected hidden></option>
                                                <option value="section">Section 1</option>
                                                <option value="section">Section 2</option>
                                                <option value="section">Section 3</option>
                                                <option value="section">Section 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">  
                                    <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px"></th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Year Level</th>
                                                <th>Course</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><input class="mx-3" type="checkbox" onclick="toggle(this);">Select 25 Students</tr>   
                                            <tr>
                                                <td style="text-align: justify"><input type="checkbox" class="mx-2">1</td>
                                                <td>Stud001-2001</td>
                                                <td>Lida Cruz</td>
                                                <td>First Year</td>
                                                <td>Course 1</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: justify"><input type="checkbox" class="mx-2">2</td>
                                                <td>Stud001-2002</td>
                                                <td>Jina San Pedro</td>
                                                <td>First Year</td>
                                                <td>Course 1</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: justify"><input type="checkbox" class="mx-2">3</td>
                                                <td>Stud001-2003</td>
                                                <td>Sarah Jimenez</td>
                                                <td>First Year</td>
                                                <td>Course 1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="editSectionButton d-flex justify-content-end"> <!--Buttons-->
                                    <button class="btn btn-default" id="save" type="submit" value="save">Add Students</button>
                                    <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>

</div>

<script src="<?php echo base_url('assets/js/section.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>