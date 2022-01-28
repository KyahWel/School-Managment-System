<?php
    $this->load->view('includes/facultySideBar'); 
?>

<head>
	<link href="<?php echo base_url('assets/css/facultyMyStudents.css'); ?>" rel="stylesheet" type="text/css">
	<title>My Students</title>
</head>

<div class="height-100 pt-2 container-fluid">
	<div class="container my-3" id="mainPage">

		<!-- Filter and Search -->
		<div class="col-12 align-self-center my-3" id="filterAndSearch">
			<label for="yearLevelFilter">Filter by:</label>
			<select name="Year Level" id="yearLevelFilter">
				<option value="" disabled selected hidden>Year Level</option>
				<option value="yearLevel">First Year</option>
				<option value="yearLevel">Second Year</option>
				<option value="yearLevel">Third Year</option>
				<option value="yearLevel">Fourth Year</option>
			</select>
			<label for="subjectCodeFilter"></label>
			<select name="Subject Code" id="subjectCodeFilter">
				<option value="" disabled selected hidden>Subject Code</option>
				<option value="subjectCode">Math-01</option>
				<option value="subjectCode">Math-02</option>
				<option value="subjectCode">Math-03</option>
				<option value="subjectCode">Math-03</option>
			</select>
			<input type="text" name="sectionSearch" placeholder="Search Section">
			<button type="button" class="btn btn-sm" id="sectionSearch"><i class="fas fa-search"
					data-bs-toggle="tooltip" title="Search"></i></button>
		</div>

		<div class="table-wrapper">

			<!--Table Header-->
			<div class="table-title">
				<div class="row">
					<div class="col">
						<h2>My Students</h2>
					</div>
				</div>
			</div>

			<!-- Table Content -->
			<div class="table-responsive">
				<table class="table table-body align-middle table-striped table-borderless table-hover">
					<thead>
						<tr>
							<th>Subject Code</th>
							<th>Subject Title</th>
							<th>Year Level</th>
							<th>Section</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($subjects as $subject) {?>
						<tr>
							<td><?php echo $subject->subjectCode; ?></td>
							<td><?php echo $subject->name; ?></td>
							<td><?php echo $subject->yearlevel; ?></td>
							<td>
								<div id="sectionName">
									<button class="viewStudents btn text-white" style="background-color: #800000;" data-id='<?php echo $subject->sectionID; ?>'
										data-subjectID='<?php echo $subject->subjectID; ?>'
                                        data-classCode='<?php echo $subject->class_code; ?>'  href="#"
										onclick="sectionPage()"><?php echo $subject->sectionName; ?></button>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

		</div>

	</div>

	<div class="container my-3" id="sectionPage">

		<button class="btn btn-sm" id="back-button" onclick="mainPage()"><i class="fa fa-arrow-left"></i> Back</button>
		<!-- ajax here -->


		<div id="student_section">

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
					<form class="container my-3" action="">
						<div class="row mb-3">
							<div class="col-6">
								<!--Subject Code-->
								<label for="subjectCode" class="form-label mb-0">Subject Code: </label>
								<input type="text" class="form-control" readonly>
							</div>
							<div class="col-6">
								<!--Subject Title-->
								<label for="subjectTitle" class="form-label mb-0">Subject Title: </label>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-6">
								<!--Student Name-->
								<label for="studentName" class="form-label mb-0">Student Name: </label>
								<input type="text" class="form-control" readonly>
							</div>
							<div class="col-6">
								<!--Student ID-->
								<label for="studentID" class="form-label mb-0">Student ID: </label>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-6">
								<!--Section-->
								<label for="section" class="form-label mb-0">Section: </label>
								<input type="text" class="form-control" readonly>
							</div>
							<div class="col-6">
								<!--Schedule-->
								<label for="schedule" class="form-label mb-0">Schedule: </label>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row my-4 align-items-center">
							<div class="col-sm-auto">
								<label for="grade" class="col-form-label">Grade: </label>
							</div>
							<div class="col-auto col-sm-3">
								<input type="grade" class="form-control" aria-describedby="gradeOfStudent">
							</div>
							<div class="col-sm-auto">
								<label for="rating" class="col-form-label">Equivalent Rating: </label>
							</div>
							<div class="col-auto col-sm-3">
								<input type="rating" class="form-control" aria-describedby="equivalentRating" readonly>
							</div>
						</div>
						<div class="inputGradeButton d-flex justify-content-end pt-4">
							<!--Buttons-->
							<button class="btn btn-default" id="saveInput" type="submit" value="save">Save</button>
							<button class="btn btn-default" id="cancelInput" type="button"
								data-bs-dismiss="modal">Cancel</button>
						</div>
					</form>
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
					<form class="container my-3" action="">
						<div class="row mb-3">
							<div class="col-6">
								<!--Subject Code-->
								<label for="subjectCode" class="form-label mb-0">Subject Code: </label>
								<input type="text" class="form-control" readonly>
							</div>
							<div class="col-6">
								<!--Subject Title-->
								<label for="subjectTitle" class="form-label mb-0">Subject Title: </label>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-6">
								<!--Student Name-->
								<label for="studentName" class="form-label mb-0">Student Name: </label>
								<input type="text" class="form-control" readonly>
							</div>
							<div class="col-6">
								<!--Student ID-->
								<label for="studentID" class="form-label mb-0">Student ID: </label>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-6">
								<!--Section-->
								<label for="section" class="form-label mb-0">Section: </label>
								<input type="text" class="form-control" readonly>
							</div>
							<div class="col-6">
								<!--Schedule-->
								<label for="schedule" class="form-label mb-0">Schedule: </label>
								<input type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row my-4 align-items-center">
							<div class="col-sm-auto">
								<label for="grade" class="col-form-label">Old Grade: </label>
							</div>
							<div class="col-auto col-sm-3">
								<input type="grade" class="form-control" aria-describedby="gradeOfStudent">
							</div>
							<div class="col-sm-auto">
								<label for="rating" class="col-form-label">Equivalent Rating: </label>
							</div>
							<div class="col-auto col-sm-3">
								<input type="rating" class="form-control" aria-describedby="equivalentRating" readonly>
							</div>
						</div>
						<div class="row mb-3 align-items-center">
							<div class="col-sm-auto">
								<label for="grade" class="col-form-label">New Grade: </label>
							</div>
							<div class="col-auto col-sm-3">
								<input type="grade" class="form-control" aria-describedby="gradeOfStudent">
							</div>
							<div class="col-sm-auto">
								<label for="rating" class="col-form-label">Equivalent Rating: </label>
							</div>
							<div class="col-auto col-sm-3">
								<input type="rating" class="form-control" aria-describedby="equivalentRating" readonly>
							</div>
						</div>
						<div class="editGradeButton d-flex justify-content-end pt-4">
							<!--Buttons-->
							<button class="btn btn-default" id="save" type="submit" value="save">Confirm</button>
							<button class="btn btn-default" id="cancel" type="button"
								data-bs-dismiss="modal">Cancel</button>
						</div>
					</form>
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
		$('.viewStudents').click(function () {
			var sectionID = $(this).data('id');
			var classCode = $(this).attr('data-classCode');
            var subjectID = $(this).attr('data-subjectID');
            console.log(sectionID);
            console.log(classCode);
            console.log(subjectID);
			$.ajax({
				url: "<?php echo site_url('FacultyControllerFunctions/viewStudents');?>",
				method: "POST",
				data: {
					sectionID: sectionID,
                    subjectID: subjectID,
					classCode: classCode
				},
				success: function (data) {
					$('#student_section').html(data);
				}
			});
		});
	});

</script>
