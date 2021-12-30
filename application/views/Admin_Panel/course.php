<?php
include __DIR__.'/../includes/adminSideBar.php'
?>
<head>
    <link href="<?php echo base_url('assets/css/course.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Course</title>
</head>
<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainCourse" style="display: block;">    
        <div class="CourseTab my-3">
            <h3>Course</h3>
        </div>
        <!--Add Course-->
        <div class="col-12 align-self-center my-3" id="createCourse">
            <div class="accordion accordion-flush" id="accordion-addCourse">
            <div class="accordion-item">
                <h2 class="accordion-header" id="addCourseHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addCourse" aria-expanded="false" aria-controls="addCourse">
                        Add Course
                    </button>
                </h2>
                <div id="addCourse" class="accordion-collapse collapse" aria-labelledby="addCourseHeader" data-bs-parent="#accordion-addCourse">
                    <div class="accordion-body">
                        <form method="POST" action="<?php echo site_url('courseController/addcourse') ?>" id="addCourseForm">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Enter Degree: </label>
                                    <input type="text" name="degree" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Enter Major: </label>
                                    <input type="text" name ="major" class="form-control">
                                </div>        
                            </div> 
                            <div class="row mb-3">
                                <div class="col-12 align-self-center my-3">
                                    <label class="form-label">College: </label>
                                    <select name="college" required id="collegeSelect">
			                            <option value="" disabled selected hidden>Please Select</option>
			                            <option value="College of Science">College of Science</option>
			                            <option value="College of Engineering">College of Engineering</option>
			                            <option value="College of Industrial Education">College of Industrial Education</option>
			                            <option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
			                            <option value="College of Liberal Arts">College of Liberal Arts</option>
		                            </select>
                                </div>
                            </div>
                            <div class="addCourseButton d-flex justify-content-end">
                                <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                            </div>
	                    </form>
                    </div>
                </div>
            </div>
            </div>
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
                <option value="" disabled selected hidden>Major</option>
                <option value="CS">Computer Science</option>
                <option value="IT">Information Technology</option>
                <option value="IS">Information System</option>
            </select>
            <input type="text" id="searchCourseID" name="searchCourseID" placeholder="Search Course ID">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div>  

        <!--Course List-->
        <div class="col-12 align-self-center" id="CourseTable">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>List of Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">  
                    <table class="table table-default align-middle table-striped table-borderless table-hover" id="table-body">
                        <thead>
                            <tr>
			                    <th>Degree</th>
			                    <th>Major</th>
			                    <th>College</th>
			                    <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($course as $courserow) {?>
                            <tr>
                                <td><?php echo $courserow->degree?></td>
                                <td><?php echo $courserow->major?></td>
                                <td><?php echo $courserow->college?></td> 
                                <td><?php echo $courserow->status?></td>
                                <td>
                                <div class="action-buttons">
                                    <?php if ($courserow->status == 1): ?>
                                    <li><button type="button" id="view" data-id='<?php echo $courserow->courseID;?>' class="btn view_data" data-bs-toggle="modal" data-bs-target="#viewCourse"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                    <li><button type="button" id="edit" data-id='<?php echo $courserow->courseID;?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editCourse"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                    <li>
                                    <li><button type="button" class="btn" id="status" onclick="location.href='<?php if($courserow->status == 1){echo site_url('courseController/deactivate');} else {echo site_url('courseController/activate');}?>/<?php echo $courserow->courseID; ?>'">
                                        Deactivate
                                    </button>
                                    </li>
                                    <?php else: ?>
                                        <li><button type="button" id="view" data-id='<?php echo $courserow->courseID;?>' class="btn" disabled style="background-color: gray;"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                        <li><button type="button" id="edit" data-id='<?php echo $courserow->courseID;?>' class="btn" disabled style="background-color: gray;"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                        <li>
                                        <li><button type="button" id="status" class="btn" onclick="location.href='<?php if($courserow->status == 1){echo site_url('courseController/deactivate');} else {echo site_url('courseController/activate');}?>/<?php echo $courserow->courseID; ?>'">
                                        Activate
                                        </button>
                                        </li>	
                                    <?php endif ?>
                                </div>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                       
                    </table>	
                </div>
            </div>
        </div>

        <!--Course View-->
        <div class="modal fade" id="viewCourse" tabindex="-1" aria-labelledby="viewCourseHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewCourseHeader">View Course</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> 
                    <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Course ID:</label>
                                    <label>Course1</label>
                                </div>
                                <div class="col-6"> 
                                    <label class="form-label">Degree:</label>
                                    <label>Bachelor of Science</label>
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Major:</label>
                                    <label>Computer Science</label>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">College:</label>
                                    <label>College of Science</label>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Status:</label>
                                    <label>1</label>
                                </div>   
                            </div>

                            <!--List of Subjects-->
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col">
                                            <h2>List of Subjects</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">  
                                    <table class="table table-default align-middle table-default table-borderless" id="table-body">
                                        <thead>
                                            <tr>
                                                <th>Subject Code</th>
			                                    <th>Subject Name</th>
			                                    <th>Units</th>
			                                    <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Subj1</td>
                                                <td>Web Development</td>
                                                <td>1</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj2</td>
                                                <td>Information Assurance and Security</td>
                                                <td>3</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj3</td>
                                                <td>Software Engineering</td>
                                                <td>2</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj4</td>
                                                <td>Data Analytics</td>
                                                <td>3</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj5</td>
                                                <td>Parallel and Distributed Computing</td>
                                                <td>3</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj6</td>
                                                <td>CS Professional Elective 1</td>
                                                <td>3</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj7</td>
                                                <td>CS Professional Elective 2</td>
                                                <td>3</td>
                                                <td>1</td> 
                                            </tr>
                                            <tr>
                                                <td>Subj8</td>
                                                <td>Readings in Philippine History</td>
                                                <td>3</td>
                                                <td>1</td> 
                                            </tr>
                                        </tbody>
                                    </table>	
                                </div>
                            </div>
                        <br>    
                        <div class="editCourseButton d-flex justify-content-end">
                            <button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Exit</button>
                        </div>                                                                         
                    </div>
                </div>
            </div>
        </div>

        <!--Edit Course-->
        <div class="modal fade" id="editCourse" tabindex="-1" aria-labelledby="editCourseHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCourseHeader">Edit Course</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="edit_course">
                        <form method="POST" action="" id="editCourseForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">Degree:</label>
                                    <input type="text" class="form-control" name="degree">
                                </div>
                                <div class="col-sm-12"> 
                                    <label class="form-label">Major:</label>
                                    <input type="text" class="form-control" name="major">
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">College:</label>
                                    <select name="college" class="form-control" required id="collegeSelect">
			                            <option value="" disabled selected hidden>Please Select</option>
			                            <option value="College of Science">College of Science</option>
			                            <option value="College of Engineering">College of Engineering</option>
			                            <option value="College of Industrial Education">College of Industrial Education</option>
			                            <option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
			                            <option value="College of Liberal Arts">College of Liberal Arts</option>
		                            </select>
                                </div>
                            </div><br>

                            <!--Add/Edit Subjects-->
                            <div class="addSubject">
                                <div class="col align-self-center" id="filter">
                                    <select name="year">
			                            <option value="" disabled selected hidden>Select Year Level</option>
			                            <option value="first">1st Year</option>
			                            <option value="second">2nd Year</option>
			                            <option value="third">3rd Year</option>
			                            <option value="fourth">4th Year</option>
		                            </select>
                                </div><br>
                                <!--
                                <div class="table-wrapper-2">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col">
                                                <h2>List of Subjects</h2>
                                            </div>
                                        </div>
                                </div>
                                <div class="table-responsive">  
                                    <table class="table table-default align-middle table-striped table-borderless table-hover" id="table-body">
                                        <thead>
                                            <tr>
                                                <th>Subject Code</th>
			                                    <th>Subject Name</th>
			                                    <th>Units</th>
			                                    <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Subj1</td>
                                                <td>Software Engineering</td>
                                                <td>2</td>
                                                <td>1</td> 
                                            </tr>
                                        </tbody>
                                    </table>	
                                </div>
                            </div>
                            <br>-->
                            <div class="editCourseButton d-flex justify-content-end">
                                <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                                <button class="btn btn-default" id="cancel" type="submit" value="cancel">Cancel</button>
                            </div>  
                        </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/course.js'); ?>"></script>
!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
 <!-- jQuery DataTables JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <!-- Ajax fetching data -->
 <script type="text/javascript">
    $(document).ready(function(){
      $('#dataTable').DataTable();
      $('.view_data').click(function(){
        var id = $(this).data('id');
        $.ajax({
          url: "<?php echo site_url('courseController/viewCourse');?>",
          method: "POST",
          data: {id:id},
          success: function(data){
            $('#view_course').html(data);
          }
        });
      });
      $('.edit_data').click(function(){
        var id = $(this).data('id');
        $.ajax({
          url: "<?php echo site_url('courseController/editCourse');?>",
          method: "POST",
          data: {id:id},
          success: function(data){
            $('#edit_course').html(data);
          }
        });
      });
    });
</script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>