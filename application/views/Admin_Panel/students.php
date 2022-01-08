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
                                                <li><button type="button"  class="btn" id="status" onclick="location.href='<?php if($studentrow->status == 1){echo site_url('studentControllerFunctions/deactivate');} else {echo site_url('studentControllerFunctions/activate');}?>/<?php echo $studentrow->studentID; ?>'">
                                                Deactivate
                                                </button>
                                                </li>
                                            <?php else: ?>
                                                <li><button type="button" id="view" data-id='<?php echo $studentrow->studentID;?>' class="btn" disabled style="background-color: gray;"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                <li><button type="button" id="edit" data-id='<?php echo $studentrow->studentID;?>' class="btn" disabled style="background-color: gray;"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                <li>
                                                <li><button type="button"  class="btn"  id="status" onclick="location.href='<?php if($studentrow->status == 1){echo site_url('studentControllerFunctions/deactivate');} else {echo site_url('studentControllerFunctions/activate');}?>/<?php echo $studentrow->studentID; ?>'">
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
  
        <div id="view_student">       
        </div>
    </div>


    </div>
</div>
<script src="<?php echo base_url('assets/js/student.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- jQuery JS CDN -->
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
          url: "<?php echo site_url('studentControllerFunctions/view');?>",
          method: "POST",
          data: {id:id},
          success: function(data){
            $('#view_student').html(data);
         }
        });
       });
       // No student edit data yet
    //   $('.edit_data').click(function(){
    //     var id = $(this).data('id');
    //     $.ajax({
    //       url: "<?php echo site_url('FacultyController/editFaculty');?>",
    //       method: "POST",
    //       data: {id:id},
    //       success: function(data){
    //         $('#edit_faculty').html(data);
    //       }
    //     });
    //   });
    });
</script>
</body>

</html>