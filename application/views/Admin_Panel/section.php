<?php
$this->load->view('includes/adminSideBar');
?>

<head>
	<link href="<?php echo base_url('assets/css/section.css'); ?>" rel="stylesheet" type="text/css">
	<title>Admin | Section</title>
</head>

<div class="height-100 pt-2 container-fluid">

	<div class="my-3">

		<!-- Section Tab -->
		<div class="SectionTab my-3">
			<h3>Section</h3>
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
					<div class="row mb-3">
						<div class="col-lg-3">
							<!--Year Level-->
							<label for="yearlevel" class="form-label">Year Level</label>
							<select name="yearLevel" id="yearlevel" class="form-select">
								<option value="" disabled selected hidden></option>
								<option value="1">First Year</option>
								<option value="2">Second Year</option>
								<option value="3">Third Year</option>
								<option value="4">Fourth Year</option>
							</select>
						</div>
						<div class="col-lg-3">
							<!--Course-->
							<label for="course" class="form-label">Course</label>
							<select name="course" id="course" class="form-select">
								<option value="" disabled selected hidden></option>
								<?php foreach ($course as $courserow) { ?>
									<option value="<?php echo $courserow->courseID ?>"><?php echo $courserow->degree ?> in
										<?php echo $courserow->major ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-lg-4">
							<!--Section-->
							<label for="section" class="form-label">Section</label>
							<select name="section" id="section" class="form-select">
								<option value="" disabled selected hidden></option>
							</select>
							<div id="section">

							</div>
						</div>
						<div class="col-lg-2 d-flex justify-content-evenly" id="addSectionButton">
							<button type="button" class="btn btn-sm" id="add" data-bs-toggle="modal" data-bs-target="#addSection"><em class="fas fa-plus" data-bs-toggle="tooltip" title="Add Section"></em></button>
							<button type="button" class="btn btn-sm" id="edit" data-bs-toggle="modal" data-bs-target="#editSection"><em class="fas fa-pen" data-bs-toggle="tooltip" title="Edit Section"></em></button>
							<button type="button" class="btn btn-sm" id="delete" data-bs-toggle="modal" data-bs-target="#deleteSection"><em class="fas fa-eraser" data-bs-toggle="tooltip" title="Delete Section"></em></button>
						</div>
					</div>
				</div>

				<!--Table Body-->
				<div class="table-responsive">
					<table class="table table-body align-middle table-striped table-borderless table-hover" aria-label="sectionList" id="sectionTable">
						<thead>
							<tr>
								<th scope="col">Section</th>
								<th scope="col">Course</th>
								<th scope="col">Yearlevel</th>
								<th scope="col">Capacity</th>
								<th scope="col">Class Code</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($section as $section) { ?>
								<tr>
									<td><?php echo $section->sectionName ?></td>
									<td><?php echo $section->degree; ?> <?php echo $section->major; ?></td>
									<td><?php echo $section->yearlevel ?></td>
									<td><?php echo $section->studCount ?>/<?php echo $section->capacity ?></td>
									<td><?php echo $section->class_code ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>

				<!-- Add Section -->
				<div class="modal fade" id="addSection" tabindex="-1" aria-modal="true" aria-labelledby="addSectionHeader" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addectionHeader">Add Section</h5>
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form class="container" method="POST" action="<?php echo site_url('sectionController/addSection') ?>">
									<div class="row mb-3">
										<div class="col-lg-6">
											<!--Year Level-->
											<label class="form-label">Year Level</label>
											<select name="yearlevel" id="AddYearlevel" class="form-select" required>
												<option value="" disabled selected hidden></option>
												<option value="1">First Year</option>
												<option value="2">Second Year</option>
												<option value="3">Third Year</option>
												<option value="4">Fourth Year</option>
											</select>
										</div>
										<div class="col-lg-6">
											<!--Course-->
											<label class="form-label">Course</label>
											<select name="courseID" id="AddCourse" class="form-select" required>
												<option value="" disabled selected hidden></option>
												<?php foreach ($course as $courserow) { ?>
													<option value="<?php echo $courserow->courseID ?>">
														<?php echo $courserow->degree ?>
														<?php echo $courserow->major ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-lg-6">
											<!--Section-->
											<label class="form-label">Section Name</label>
											<input type="text" class="form-control" name="sectionName" required>
										</div>
										<div class="col-lg-6">
											<!--Capacity-->
											<label class="form-label">Capacity</label>
											<input type="number" id="capacity" min="0" max="25" class="form-control" name="capacity" title="Max capacity is 25" required>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col-lg-6">
											<!--Class-->
											<label class="form-label">Class</label>
											<select name="classID" class="form-select" id="AddClass" required>
												<option value="" disabled selected hidden></option>
											</select>

										</div>
										<div class="col-lg-6">
											<!--schoolyear-->
											<label class="form-label">School Year</label>
											<input type="text" readonly value="<?php echo date("Y"); ?>-<?php echo date("Y") + 1; ?>" class="form-control" name="schoolyear" >
										</div>
									</div>
									<div class="table-title">
										<div class="row">
											<div class="col">
												<h2>List of Students without sections</h2>
											</div>
										</div>
									</div>
									<br>
									<div id="filteredStudent">

									</div>

									<br>
									<div class="addSectionButton d-flex justify-content-end">
										<!--Buttons-->
										<button class="btn btn-default" id="addSectionSave" type="submit" value="save">Save</button>
										<button class="btn btn-default" id="addSectionCancel" type="button" data-bs-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>

				<!-- Edit Section -->
				<div class="modal fade" id="editSection" tabindex="-1" aria-modal="true" aria-labelledby="editSectionHeader" aria-hidden="true">
					<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
						<div class="modal-content">

							<div class="modal-header">
								<h5 class="modal-title" id="editSectionHeader">View Section</h5>
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>

							<div class="modal-body">
								<div id="edit_section">

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>
<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script src="<?php echo base_url('assets/js/section.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- jQuery DataTables JS CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTable').DataTable();
		var courseID = $('#course').val();
		var yearlevel = $("#yearlevel").val();
		$.ajax({
			url: "<?php echo site_url('sectionController/filteredStudentList'); ?>",
			method: "POST",
			data: {
				courseID: courseID,
				yearlevel: courseID
			},
			success: function(data) {
				$('#filteredStudent').html(data);

			}
		});
		$("#course").change(function() {
			var courseID = $(this).val();
			var yearlevel = $("#yearlevel").val();
			$.ajax({
				url: "<?php echo site_url('sectionController/viewSectionList'); ?>",
				method: "POST",
				data: {
					courseID: courseID,
					yearlevel: yearlevel
				},
				success: function(data) {
					$('#section').html(data);
				}
			});
		});
		$("#yearlevel").change(function() {
			var courseID = $("#course").val();
			var yearlevel = $(this).val();
			$.ajax({
				url: "<?php echo site_url('sectionController/viewSectionList'); ?>",
				method: "POST",
				data: {
					courseID: courseID,
					yearlevel: yearlevel
				},
				success: function(data) {
					$('#section').html(data);
				}
			});
		});

		$("#AddYearlevel").change(function() {
			var yearlevel = $(this).val();
			var courseID = $("#AddCourse").val();
			$.ajax({
					url: "<?php echo site_url('sectionController/viewClassList'); ?>",
					method: "POST",
					data: {
						courseID: courseID,
						yearlevel: yearlevel
					},
					success: function(data) {
						$('#AddClass').html(data);
					}
				}),
				$.ajax({
					url: "<?php echo site_url('sectionController/filteredStudentList'); ?>",
					method: "POST",
					data: {
						courseID: courseID,
						yearlevel: yearlevel
					},
					success: function(data) {
						$('#filteredStudent').html(data);
					}
				});

		});


		$("#AddCourse").change(function() {
			var courseID = $(this).val();
			var yearlevel = $("#AddYearlevel").val();
			console.log(yearlevel);
			console.log(courseID);

			$.ajax({
					url: "<?php echo site_url('sectionController/viewClassList'); ?>",
					method: "POST",
					data: {
						courseID: courseID,
						yearlevel: yearlevel
					},
					success: function(data) {
						$('#AddClass').html(data);
					}
				}),
				$.ajax({
					url: "<?php echo site_url('sectionController/filteredStudentList'); ?>",
					method: "POST",
					data: {
						courseID: courseID,
						yearlevel: yearlevel
					},
					success: function(data) {
						$('#filteredStudent').html(data);
					}
				});

		});

		$("#edit").click(function() {
			var sectionID = $("#section").val();
			console.log(sectionID);
			$.ajax({
				url: "<?php echo site_url('sectionController/editSection'); ?>",
				method: "POST",
				data: {
					sectionID: sectionID
				},
				success: function(data) {
					$('#edit_section').html(data);
				}
			});
		});
		$('#sectionTable').DataTable({
			"lengthMenu": [
				[15, 25, 50, -1],
				[15, 25, 50, "All"]
			]
		});
		jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
	});
</script>