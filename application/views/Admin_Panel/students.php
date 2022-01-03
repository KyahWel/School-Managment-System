<?php
include __DIR__.'/../includes/adminSideBar.php'
?>
<head>
    <link href="<?php echo base_url('assets/css/student.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Students</title>
</head>
<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainStudent" style="display: block;">    
        <div class="StudentTab my-3">
            <h3>Students</h3>
        </div>

    <!--Search -->
    <div class="col-12 align-self-center my-3" id="filter">
        <label>Filter by:</label>
        <select required>
                <option value="" disabled selected hidden>College</option>
                <option value="College of Science">College of Science</option>
			    <option value="College of Engineering">College of Engineering</option>
			    <option value="College of Industrial Education">College of Industrial Education</option>
			    <option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
			    <option value="College of Liberal Arts">College of Liberal Arts</option>
        </select>
        <select required>
            <option value="" disabled selected hidden>Course</option>
            <option value="CS">BSCS</option>
			<option value="IT">BSIT</option>
			<option value="IS">BSIS</option>
			<option value="CSNS">BSCS-NS</option>
			<option value="ITNS">BSIT-NS</option>
            <option value="ISNS">BSIS-NS</option>
        </select>
        <select required>
            <option value="" disabled selected hidden>Section</option>
            <option value="1a">1A</option>
            <option value="1b">1B</option>
            <option value="1c">1C</option>
            <option value="1d">1D</option>
            <option value="2a">2A</option>
            <option value="2b">2B</option>
            <option value="2c">2C</option>
            <option value="2d">2D</option>
            <option value="3a">3A</option>
            <option value="3b">3B</option>
            <option value="3c">3C</option>
            <option value="3d">3D</option>
            <option value="4a">4A</option>
            <option value="4b">4B</option>
            <option value="4c">4C</option>
            <option value="4d">4D</option>
        </select>
            <input type="text" id="searchStudentID" name="searchStudentID" placeholder="Search Student ID">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
    </div> 

    <!--Student List-->
    <div class="col-12 align-self-center" id="studentInformation">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Student Information</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">  
                    <table class="table table-fixed align-middle table-striped table-borderless table-hover" style="height: 400px;" id="table-body">
                        <thead class ="thead">
                            <tr>
			                    <th>Student ID</th>
			                    <th>First Name </th>
			                    <th>Last Name</th>
			                    <th>Course</th>
                                <th>Section</th>
                                <th>Status</th>
                                <th>Action</th>
		                    </tr>
                        </thead>
                        <tbody class="tbody">
                            <?php foreach($student as $studentrow) {?>
                                <tr>
                                    <td><?php echo $studentrow->studentNumber?></td> 
                                    <td><?php echo $studentrow->firstname;?></td>
                                    <td><?php echo $studentrow->lastname?></td>
                                    <td><?php echo $studentrow->course_chosen;?></td>
                                    <td> </td>
                                    <td><?php echo $studentrow->status;?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <?php if ($studentrow->status == 1): ?>
                                                <li><button type="button" id="view" data-id='<?php echo $studentrow->studentID;?>' class="btn view_data" onclick="viewStudent()"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                <li><button type="button" id="edit" data-id='<?php echo $studentrow->studentID;?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editProfessor"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                <li>
                                                <li><button type="button"  class="btn" id="status" onclick="location.href='<?php if($studentrow->status == 1){echo site_url('studentCRUDController/deactivate');} else {echo site_url('studentCRUDController/activate');}?>/<?php echo $studentrow->studentID; ?>'">
                                                Deactivate
                                                </button>
                                                </li>
                                            <?php else: ?>
                                                <li><button type="button" id="view" data-id='<?php echo $studentrow->studentID;?>' class="btn" disabled style="background-color: gray;"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                <li><button type="button" id="edit" data-id='<?php echo $studentrow->studentID;?>' class="btn" disabled style="background-color: gray;"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                <li>
                                                <li><button type="button"  class="btn"  id="status" onclick="location.href='<?php if($studentrow->status == 1){echo site_url('studentCRUDController/deactivate');} else {echo site_url('studentCRUDController/activate');}?>/<?php echo $studentrow->studentID; ?>'">
                                                Activate
                                                </button>
                                                </li>	
                                            <?php endif ?>
                                        </div>
                                    </td>
                                </tr>    
                             <?php } ?>
                        </tbody>
                    </table>	
                </div>
            </div>
        </div>
    </div>

    <!--Edit Student-->
    <div class="modal fade" id="editStudent" tabindex="-1" aria-labelledby="editStudentHeader" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editStudentHeader">Edit Student</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="" id="editStudentForm">
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label">Username:</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Password:</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label">Course:</label>
                                <input type="text" class="form-control" name="course">
                            </div>
                            <div class="col-6"> 
                                <label class="form-label">Year Level:</label>
                                <select required class="form-control" name="year" id="studentSelect">
                                    <option value="" disabled selected hidden>Select Yr. Lvl</option>
			                        <option value="first">1st Year</option>
			                        <option value="second">2nd Year</option>
			                        <option value="third">3rd Year</option>
			                        <option value="fourth">4th Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="editStudentButton d-flex justify-content-end">
                            <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                            <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>

                                    
    <!--View Student-->
    <div class="container my-3" id='viewStudent' style="display: none;">     
        <div class="viewStudentTitle">
            <button class="btn btn-default btn-sm" id="back-button" onclick="mainStudent()"><i class="fas fa-angle-left"></i> Back</button><br>
            <h3><i>Student Profile</i></h3><br>
        </div>

        <!-- View Student Info -->
        <div class="viewStudentContent d-flex align-items-center">
            <div id="viewStudentAvatar">
                <button class="btn"><i class="fas fa-user"></i></button>
            </div>
            <div class="table-responsive">
                <table id="viewStudentInformation">
                    <tr>    
                        <td>
                            <b>Email:</b> jina.sanpedro@tup.edu.ph<br>
                            <b>Username:</b> jinasanpedro01<br>
                            <b>Student ID:</b> Stud001-2001<br>
                            <b>Course:</b> BSCS-NS<br>
                            <b>Section:</b> 3A<br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--Tabs-->
        <div class="col-12 align-self-center my-3" id="viewStudentTable">
            <ul class="nav nav-tabs d-flex flex-row justify-content-start" id="viewStudentTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="viewStudentInfoTab" data-bs-toggle="tab" data-bs-target="#StudentInfo" type="button" role="tab" aria-controls="StudentInfo" aria-selected="true">Personal Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewStudentSchedTab" data-bs-toggle="tab" data-bs-target="#StudentSched" type="button" role="tab" aria-controls="StudentSched" aria-selected="false">Schedule</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewStudentEducTab" data-bs-toggle="tab" data-bs-target="#StudentEduc" type="button" role="tab" aria-controls="StudentEduc" aria-selected="false">Educational Attainment</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="viewStudentReqTab" data-bs-toggle="tab" data-bs-target="#StudentReq" type="button" role="tab" aria-controls="StudentReq" aria-selected="false">Requirements</button>
                </li>
            </ul>
            <div class="tab-content p-3" id="viewStudentTabContent">
                <!--Personal Information Tab-->
                <div class="tab-pane show active my-3" id="StudentInfo" role="tabpanel" aria-labelledby="viewStudentInfoTab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-1"> <!--First Name-->
                            <input type="text" name='firstname' class="form-control" readonly>
                            <label class="form-label pt-2">First Name</label>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-1"> <!--Middle Name-->
                            <input type="text" name='middlename' class="form-control" readonly>
                            <label class="form-label pt-2">Middle Name</label>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-1"> <!--Last Name-->
                            <input type="text" name='lastname' class="form-control" readonly>
                            <label class="form-label pt-2">Last Name</label>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-1"> <!--Suffix-->
                            <input type="text" name='suffix' class="form-control" readonly>
                            <label class="form-label pt-2">Suffix</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-1"> <!--LRN-->
                            <input type="text" name='lrn' class="form-control" readonly>
                            <label class="form-label pt-2">LRN Number</label>
                        </div>
                        
                        <label class="form-label col-lg-2 col-md-12 pt-1">Gender:</label><!--Gender-->
                        <div class="col-lg-3 col-md-12 pt-1">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Male" readonly>
                                <label class="form-check-label" for="gender"> Male </label>
                            </div>
                            <div class="form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="gender" value="Female" readonly>
                                <label class="form-check-label" for="gender"> Female </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-1"> <!--Birthdate-->
                            <input type="date" name='birthday' class="form-control" readonly>
                            <label class="form-label pt-2">Birth Date</label>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-1"> <!--Age-->
                            <input type="text" name='age' class="form-control" readonly>
                            <label class="form-label pt-2">Age</label>
                        </div>
                        <div class="col-lg-5 col-md-6 mb-1"> <!--Birthplace-->
                            <input type="text" name='birthplace' class="form-control" readonly>
                            <label class="form-label pt-2">Birth Place</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-1"> <!--Contact Number-->
                            <input type="tel" name='contact' class="form-control" readonly>
                            <label class="form-label pt-2">Contact Number</label>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-1"> <!--Landline-->
                            <input type="tel" name='landline' class="form-control" readonly>
                            <label class="form-label pt-2">Landline Number</label>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-1"> <!--Email-->
                            <input type="text" name='email' class="form-control" readonly>
                            <label class="form-label pt-2">Email Address</label>
                        </div>
                    </div>
                </div>

                <!-- Schedule Tab-->
                <div class="tab-pane" id="StudentSched" role="tabpanel" aria-labelledby="viewStudentSchedTab"> 
                    <div class="table-responsive">  
                        <table class="table align-middle table-striped table-borderless table-hover" id="table-body"> <!--Table Body-->
                            <thead>
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Subject Name</th>
                                    <th>Teacher</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>     
                                <tr>
                                    <td>DM001</td> 
                                    <td>Discrete Mathematics</td>
                                    <td>Salvador John</td>
                                    <td>Mon</td>
                                    <td>10:00-13:00</td>
                                </tr>
                                <tr>
                                    <td>CSB001</td> 
                                    <td>CS Basics</td>
                                    <td>Castro Dexter</td>
                                    <td>Fri</td>
                                    <td>7:00-10:00</td>
                                </tr>
                                <tr>
                                    <td>DS001</td> 
                                    <td>Data Structures</td>
                                    <td>Reyes Mary</td>
                                    <td>Tue</td>
                                    <td>11:00-14:00</td>
                                </tr>
                                <tr>
                                    <td>SP001</td> 
                                    <td>System Programming</td>
                                    <td>Salvador Jeff</td>
                                    <td>Fri</td>
                                    <td>10:00-13:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Educational Attainment Tab-->
                <div class="tab-pane" id="StudentEduc" role="tabpanel" aria-labelledby="viewStudentEducTab">
                    <p class="fw-bold">SCHOOL LAST ATTENDED</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-1"> <!--Name of School-->
                            <input type="text" name='schoolname' class="form-control" readonly>
                            <label class="form-label pt-2">Name of School</label>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-1"> <!--Track-->
                            <input type="text" name='track' class="form-control" readonly>
                            <label class="form-label pt-2">Program/Track</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-1"> <!--School Address-->
                        <input type="text" name='schooladdress' class="form-control" readonly>
                        <label class="form-label pt-2">School Address</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-1"> <!--Year Level-->
                            <input type="text" name='yrlevel' class="form-control" readonly>
                            <label class="form-label pt-2">Year Level</label>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-1"> <!--Year Graduated-->
                            <input type="date" name='yrgrad' class="form-control" readonly>
                            <label class="form-label pt-2">Year Graduated</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-lg-2 col-md-12 pt-1">Category:</label><!--Category-->
                        <div class="col-lg-4 col-md-12 pt-1">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="category" value="nc" readonly>
                                <label class="form-check-label" for="category"> K-12 </label>
                            </div>
                            <div class="form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="category" value="oc" readonly>
                                <label class="form-check-label" for="category"> Old Curriculum </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-1"> <!--GPA-->
                            <input type="text" name='gpa' class="form-control" readonly>
                            <label class="form-label pt-2">GPA</label>
                        </div>
                    </div>
                </div>

                <!--Requirements Tab-->
                <div class="tab-pane" id="StudentReq" role="tabpanel" aria-labelledby="viewStudentReqTab"><br>   
                    <div class="row">
                        <label class="form-label col-lg-2 col-md-12 pt-1">Medical Record:</label>
                        <div class="col-lg-7 mb-3">
                            <input name="medical_record" class="form-control form-control-sm" type="file" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-lg-2 col-md-12 pt-1">Form 137:</label>
                        <div class="col-lg-7 mb-3">
                            <input name="form_137" class="form-control form-control-sm" type="file" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-lg-2 col-md-12 pt-1">Good Moral:</label>
                        <div class="col-lg-7 mb-3">
                            <input name="good_moral" class="form-control form-control-sm" type="file" readonly>
                        </div>
                    </div>
                </div>
            </div>  
        </div>  
    </div>


    </div>
</div>
<script src="<?php echo base_url('assets/js/student.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>