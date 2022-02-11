<?php
    $this->load->view('includes/facultySideBar'); 
?>

<head>
	<link href="<?php echo base_url('assets/css/facultyMyStudents.css'); ?>" rel="stylesheet" type="text/css">
	<title>My Students</title>
</head>

<div class="height-100 pt-2 container-fluid">
	<h4 class="fw-bold py-2">My Students</h4>
	<div class="container my-3" id="mainPage">
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
									<button class="btn text-white" style="background-color: #800000;"
										onclick="window.location.href='<?php echo site_url('Faculty/list')?>
										/<?php echo $subject->sectionName;?>/?classCode=<?php echo $subject->class_code;?>
										&subjectID=<?php echo $subject->subjectID;?>
										&sectionID=<?php echo $subject->sectionID;?>'"> 
										<?php echo $subject->sectionName; ?></button>
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


<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

