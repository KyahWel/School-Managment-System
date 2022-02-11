<?php
    $this->load->view('includes/facultySideBar'); 
?>

<head>
	<link href="<?php echo base_url('assets/css/facultyMyStudents.css'); ?>" rel="stylesheet" type="text/css">
	<title>My Students</title>
</head>

<div class="height-100 pt-2 container-fluid">
	<div class="container my-3">

		<button class="btn btn-sm" id="back-button" onclick="location.href='<?php echo site_url('Faculty/students')?>'"><i class="fa fa-arrow-left"></i> Back</button>
		<!-- ajax here -->

		<div class="table-responsive">
			<table id="sectionInformation">
				<tr>
					<td>
						<p><b>Course:</b></p>
						<p><b>Subject Code:</b></p>
						<p><b>Subject Title:</b></p>
						<p class="mb-0"><b>Schedule:</b></p>
					</td>
					<td class="text-uppercase">
						<p><?php echo $section->degree?> <?php echo $section->major?></p>
						<p><?php echo $section->subjectCode?></p>
						<p><?php echo $section->name?></p>
						<p class="mb-0">
							<?php echo date('h:i:sa', strtotime($section->start_time))?>
							to 
							<?php echo date('h:i:sa', strtotime($section->end_time))?>
						</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- Search -->
		<div class="col-12 align-self-center mb-3" id="searchPanel">
			<input type="text" name="search" placeholder="Search Student ID">
			<button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
		</div>

		<div class="table-wrapper">
			
			<!--Table Header-->
			<div class="table-title">
				<div class="row">
					<div class="col">
						<h2><?php echo $sectionName?></h2>
					</div>
				</div>
			</div>

			<!-- Table Content -->
			<div class="table-responsive">  
				<table class="table table-body align-middle table-striped table-borderless table-hover">
					<thead>
					<tr>
							<th>Student Number</th>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Grade</th>
							<th>Equivalent</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>  
						<?php foreach($student as $student) {?>
							<?php if ($section->subjectID == $student->subjectID):?>
								<tr>
									<td> <?php echo $student->studentNumber?> </td> 
									<td> <?php echo $student->lastname?>  </td>
									<td> <?php echo $student->firstname?> </td>
									<td> <?php echo $student->grade?> </td>
									<td> <?php echo $student->equivalent?> </td>
									<td>
										<?php if($student->grade>0):?>
											<button type="button" id="input" disabled class="btn btn-default btn-sm addGrade" 
											data-id="<?php echo $student->studentID?>" 
											data-subject="<?php echo $student->subjectID?>" 
											data-class="<?php echo $student->class_code?>" 
											data-teacher="<?= $this->session->userdata('auth_user')['teacherID']?>"  
											data-bs-toggle="modal" 
											data-bs-target="#inputGrade"
											style="background-color: gray;">
												<i class="fas fa-plus"></i> Input Grade
											</button>
										<?php else:?>
											<button type="button" id="input"  class="btn btn-default btn-sm addGrade" 
											data-id="<?php echo $student->studentID?>" 
											data-subject="<?php echo $student->subjectID?>" 
											data-class="<?php echo $student->class_code?>" 
											data-teacher="<?= $this->session->userdata('auth_user')['teacherID']?>"  
											data-bs-toggle="modal" 
											data-bs-target="#inputGrade">
												<i class="fas fa-plus"></i> Input Grade
											</button>
										<?php endif?>			

										<button type="button" id="edit"  class="btn btn-default btn-sm editGrade" 
										data-id="<?php echo $student->studentID?>"
										data-subject="<?php echo $student->subjectID?>" 
										data-class="<?php echo $student->class_code?>" 
										data-teacher="<?= $this->session->userdata('auth_user')['teacherID']?>"  
										data-bs-toggle="modal" 
										data-bs-target="#editGrade">
											<i class="fas fa-pen"></i> Edit Grade
										</button>
									</td>
								</tr>
							<?php endif?> 
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>

	<!-- Input Grade -->
	<div class="inputGrade modal fade" id="inputGrade" tabindex="-1" aria-modal="true"
		aria-labelledby="inputGradeHeader" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="inputGradeHeader">Input Grade</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
						aria-label="Close"></button>
				</div>
				<div class="modal-body">
						<div id="addgrade">

						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Grade -->
	<div class="editGrade modal fade" id="editGrade" tabindex="-1" aria-modal="true" aria-labelledby="editGradeHeader"
		aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="editGradeHeader">Edit Grade</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
						aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<div id="edit_grade">
						
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url('assets/js/facultyMyStudents.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- jQuery DataTables JS CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
	$(document).ready(function () {
		$('#dataTable').DataTable();
		$('.addGrade').click(function () {
			var studentID = $(this).data('id');
			var teacherID = $(this).data('teacher');
			var class_code= $(this).data('class');
			var subjectID = $(this).data('subject');
			console.log(studentID)
			console.log(teacherID)
			console.log(class_code)
			console.log(subjectID)
			$.ajax({
				url: "<?php echo site_url('FacultyControllerFunctions/addGrade');?>",
				method: "POST",
				data: {
					studentID: studentID,
                    teacherID: teacherID,
					class_code: class_code,
					subjectID: subjectID
				},
				success: function (data) {
					$('#addgrade').html(data);
				}
			});
		});
		$('.editGrade').click(function () {
			var studentID = $(this).data('id');
			var teacherID = $(this).data('teacher');
			var class_code= $(this).data('class');
			var subjectID = $(this).data('subject')
			console.log(studentID)
			console.log(teacherID)
			console.log(class_code)
			console.log(subjectID)
			$.ajax({
				url: "<?php echo site_url('FacultyControllerFunctions/editGrade');?>",
				method: "POST",
				data: {
					studentID: studentID,
                    teacherID: teacherID,
					class_code: class_code,
					subjectID: subjectID
				},
				success: function (data) {
					$('#edit_grade').html(data);
				}
			});
		});
	});

</script>
