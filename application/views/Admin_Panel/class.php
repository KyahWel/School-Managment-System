<?php
$this->load->view('includes/adminSideBar'); 
?>

<head>
    <link href="<?php echo base_url('assets/css/class.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Class</title>
</head>

<div class="height-100 pt-2 container-fluid">
    
    <div class="container my-3">
    
        <!-- Class Tab -->
        <div class="ClassTab my-3">
            <h3><i>Welcome to Class Tab</i></h3>
        </div>

        <!-- Add Class -->
        <div class="col-12 align-self-center my-3" id="createClass">
            <div class="accordion accordion-flush" id="accordion-addClass">
                <div class="accordion-item">

                <h2 class="accordion-header" id="addClassHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addClass" aria-expanded="false" aria-controls="addClass">
                    Add Class
                    </button>
                </h2>

                <div id="addClass" class="accordion-collapse collapse" aria-labelledby="addClassHeader" data-bs-parent="#accordion-addClass">
                    <div class="accordion-body">
                        <form  method="POST" action="<?php echo site_url('classController/addClass')?>">
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-6 col-lg-6"> <!--Year Level-->
                                    <label class="form-label">Class Code</label>
                                    <input type="text" class="form-control" name="classcode" required placeholder="Enter class code"> 
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6"> <!--Year Level-->
                                    <label class="form-label">Year Level</label>
                                    <select name="yearlevel" id="yearlevel" required class="form-select">
                                        <option value="" disabled selected  hidden>Please Select</option>
                                        <option value="1">First Year</option>
                                        <option value="2">Second Year</option>
                                        <option value="3">Third Year</option>
                                        <option value="4">Fourth Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-md-6 col-lg-6"> <!--Course-->
                                <label class="form-label">Course</label>
                                <select name="courseID" id="courseID" required class="form-select">
                                    <option value="" disabled selected  hidden >Please select</option>
                                    <?php foreach($course as $courserow) {?>
			                                <option value="<?php echo $courserow->courseID?>"><?php echo $courserow->degree?> in <?php echo $courserow->major?></option>
                                    <?php }?>
                                </select>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4"> <!--Semester-->
                                    <label class="form-label">Semester</label>
                                    <select name="semester" id="semester" required class="form-select">
                                        <option value="" disabled selected hidden >Please select</option>
                                        <option value="1">First Semester</option>
                                        <option value="2">Second Semester</option>
                                    </select>
                                </div>
                                <div class="loadSubject-button col-sm-2 col-md-2 col-lg-2"> <!-- Load Subects Button -->
                                    <button type="button" id="load" class="btn loadSubjects">Load Subjects</button>   
                                </div>
                            </div>
                            
                            <div id="listSubjects">

                            </div>  
                        
                            <div class="addClassButton d-flex justify-content-end mt-3"> <!--Buttons-->
                                <button type="submit" class="btn btn-default" id="save" value="save">Save</button>
                                <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>

        <!-- Filter and Search -->
        <div class="col-12 align-self-center pt-2 my-3" id="filterAndSearch">
            <label for="yearLevel-filter">Filter by:</label>
            <select id="yearLevel-filter">
                <option value="" disabled selected hidden>Year Level</option>
                <option value="yearLevel">First Year</option>
                <option value="yearLevel">Second Year</option>
                <option value="yearLevel">Third Year</option>
                <option value="yearLevel">Fourth Year</option>
            </select>
            <label for="course-filter"></label>
            <select id="course-filter">
                <option value="" disabled selected hidden>Course</option>
                <option value="course">Course 1</option>
                <option value="course">Course 2</option>
                <option value="course">Course 3</option>
            </select>
            <label for="semester-filter"></label>
            <select id="semester-filter">
                <option value="" disabled selected hidden>Semester</option>
                <option value="semester">First Semester</option>
                <option value="semester">Second Semester</option>
            </select>
            <input type="text" name="search" placeholder="Search">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div>  

        <!-- Class Table -->
        <div class="col-12 align-self-center my-3" id="classList">
            <div class="table-wrapper">
            
                <!--Table Header-->
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Class List</h2>
                        </div>
                    </div>
                </div>

                <!--Table Body-->
                <div class="table-responsive py-2">  
                    <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                        <thead>
                            <tr>
                                <th class="pb-3">Class Code</th>
                                <th class="pb-3">Course</th>
                                <th class="pb-3">Year Level</th>
                                <th class="pb-3">Semester</th>
                                <th class="pb-3">Status</th>
                                <th class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>     
                            <?php foreach($class as $class) {?>
                                <tr>
                                    <td><?php echo $class->class_code;?></td>
                                    <td><?php echo $class->degree;?> in <?php echo $class->major;?></td>
                                    <td><?php echo $class->yearlevel; ?></td>
                                    <td><?php echo $class->semester; ?></td>
                                    <td>
                                    <?php if ($class->isTaken == 0): ?>
                                        Free
                                    <?php else: ?>
                                        Taken
                                    <?php endif ?>   
                                    </td>
                                    <td>
                                    <div class="action-buttons">
                                    <ul>
                                        <?php if ($class->status == 1): ?>
                                            <li><button type="button" id="view" data-id='<?php echo $class->class_code;?>' class="btn view_data" data-bs-toggle="modal" data-bs-target="#viewClass"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                            <li><button type="button" id="edit" data-id='<?php echo $class->class_code;?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editClass"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                            <li>
                                            <li><button type="button" class="btn"  onclick="location.href='<?php if($class->status == 1){echo site_url('classController/deactivate');} else {echo site_url('classController/activate');}?>/<?php echo $class->class_code; ?>'">
                                                Deactivate
                                            </button>
                                            </li>
                                        <?php else: ?>
                                                <li><button type="button" id="view" data-id='<?php echo $class->class_code;?>' class="btn" disabled style="background-color: gray;"> <i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                                <li><button type="button" id="edit" data-id='<?php echo $class->class_code;?>' class="btn" disabled style="background-color: gray;"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                                <li>
                                                <li><button type="button" id="status" class="btn" onclick="location.href='<?php if($class->status == 1){echo site_url('classController/deactivate');} else {echo site_url('classController/activate');}?>/<?php echo $class->class_code; ?>'">
                                                Activate
                                                </button>
                                                </li>	
                                        <?php endif ?>
                                    </ul>
                                    </div>
                                    </td> 
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <!-- View Class -->
        <div class="modal fade" id="viewClass" tabindex="-1" aria-modal="true" aria-labelledby="viewClassHeader" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="viewClassHeader">View Class</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div id="view_class">

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Edit Class -->
        <div class="modal fade" id="editClass" tabindex="-1" aria-labelledby="editClassHeader" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="editClassHeader">Update Class</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div id="edit_class">

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="py-2"> &nbsp;</div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
 <!-- jQuery DataTables JS CDN -->
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <!-- Ajax fetching data -->
<script type="text/javascript">
        $(document).ready(function(){
            $('#dataTable').DataTable();
            $(".loadSubjects").click(function(){
                var courseID=$('#courseID').val();
                var semester=$('#semester').val() 
                var yearlevel=$('#yearlevel').val() 
                $.ajax({ 
                    url: "<?php echo site_url('classController/viewCourseSubjects');?>",
                    method: "POST",
                    data: {courseID:courseID, semester:semester, yearlevel:yearlevel},
                    success: function(data){
                        $('#listSubjects').html(data);
                    }
                    });  
            });

            $(".view_data").click(function(){
                var classcode = $(this).data('id');
                $.ajax({ 
                    url: "<?php echo site_url('classController/viewClass');?>",
                    method: "POST",
                    data: {classcode:classcode},
                    success: function(data){
                        $('#view_class').html(data);
                    }
                });  
            });

            $(".edit_data").click(function(){
                var classcode = $(this).data('id');
                $.ajax({ 
                    url: "<?php echo site_url('classController/editClass');?>",
                    method: "POST",
                    data: {classcode:classcode},
                    success: function(data){
                        $('#edit_class').html(data);
                    }
                });  
            });
        });
</script>
