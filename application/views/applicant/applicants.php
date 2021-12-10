<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Applicants</title>
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		}
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		
		}
	</style>
</head>
<body>
	<h1>This is Applicants List Screen</h1>
	<br>

	<table style="border: 1px solid #dddddd;">
		
		<tr>
			<th>Applicant ID</th>
			<th>Applicant Number</th>
			<th>Applicant Name</th>
			<th>Course Chosen</th>
			<th>Applicant Status</th>
			<th>Actions</th>

		</tr>
		<?php foreach($applicant as $applicant) {?>
		<tr>
			<td> <?php echo $applicant->applicantID?> </td>
			<td> <?php echo $applicant->applicantNumber?> </td>
			<td> <?php echo $applicant->firstname ?> <?php echo $applicant->middlename ?> <?php echo $applicant->lastname ?> <?php echo $applicant->extname ?></td>
			<td> <?php echo $applicant->course_chosen?> </td>
			<td> <?php echo $applicant->applicant_result?> </td>
			<td>  <a href="<?php echo site_url('applicantcontroller/viewApplicant')?>/<?php echo $applicant->applicantID ?>" style="text-decoration: none;">View </a></td>
		</tr>
			<?php }?>
	</table>
	<br>
	<br>
	<form action="<?php echo site_url('homepage')?>">
    	<input type="submit" value= "Logout"/>
	</form>	
	<br>
	<form action="<?php echo site_url('studentController')?>">
    	<input type="submit" value= "Student Tab"/>
	</form>		
	<br>			
	<form action="<?php echo site_url('teacherController')?>">
    	<input type="submit" value= "Faculty Tab"/>
	</form>		
	<br>
	<form action="<?php echo site_url('courseController')?>">
    	<input type="submit" value= "Course Tab"/>
	</form>	
	<br>
	<form action="<?php echo site_url('eventscontroller')?>">
    	<input type="submit" value= " Events Tab"/>
	</form>
	<br>
	<form action="<?php echo site_url('applicantcontroller/viewallapplicant')?>">
    	<input type="submit" value= " Admission Tab"/>
	</form>
	<br>
    <form action="<?php echo site_url('examcontroller')?>">
        <input type="submit" value= " Exam Schedules Tab"/>
    </form>

	
</body>
</body>
</html>