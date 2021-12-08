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
</head>
<body style="font-family:'Century Gothic';">
	<h1>This is Applicant data screen</h1>
	<br>
	<!-- Divs for update status -->
	<h3>Applicant Number: <?php echo $applicant->applicantNumber?> </h3>
	<div id ='static' style="display:block;">
		<b>Application Status:</b>  <?php echo $applicant->applicant_result?>  
		<br>
		<br>
		<input type="button" value="Update applicant status" onclick="updateStatus()"/>
	</div>
	
	<div id ='updating' style="display:none;">
		<form method="POST" action="<?php echo site_url('applicantcontroller/updatestatus')?>/<?php echo $applicant->applicantID ?>">
			<b> Application Status: </b>
			<select name="result">
				<option value="Passed" selected> Passed </option>
				<option value="Failed"> Failed</option>
			</select>
			<br>
			<br>
			<input type="submit" name="submit" value="Update applicant status">
			<input type="button" value="Cancel" onclick="cancel()"/>
		</form>
		
		
	</div>
		
	<!-- --------------------------------------------------------------------------------------- -->
	<br>
	<h1>Personal Info</h1>
	<table>
		<td>
			<b>Name: </b>  <?php echo $applicant->firstname ?> <?php echo $applicant->middlename ?> <?php echo $applicant->lastname ?> <?php echo $applicant->extname ?> <br>
			<b>Gender: </b>  <?php echo $applicant->gender ?> <br>
			<b>Age: </b>	 <?php echo $applicant->age ?><br>
			<b>LRN: </b> <?php echo $applicant->LRN ?><br>
			<b>Birthdate: </b> <?php echo $applicant->birthday ?><br>
			<b>Birthplace: </b> <?php echo $applicant->birthplace ?><br>
			<b>Contact Number: </b> <?php echo $applicant->contactnum ?><br>
			<b>Landline: </b><?php echo $applicant->landline?><br>
			
		</td>
		<td style="width: 50px;">

		</td>
		<td>
			<b>Course Chosen: </b>  <?php echo $applicant->course_chosen ?> <br>
			<b>Email: </b><?php echo $applicant->email?><br>
			<b>Unit: </b>	 <?php echo $applicant->unit ?><br>
			<b>Street: </b> <?php echo $applicant->street ?><br>
			<b>Barangay: </b> <?php echo $applicant->barangay ?><br>
			<b>City: </b> <?php echo $applicant->city ?><br>
			<b>Provice: </b> <?php echo $applicant->province ?><br>
			<b>Zipcode: </b><?php echo $applicant->zipcode?><br>
		</td>
	</table>
	<hr>
	<h1>Educational Attainment</h1>
	<table>
		<td>
			<b>Last School Attended: </b>  <?php echo $applicant->last_school_attended ?> <br>
			<b>Track: </b>	 <?php echo $applicant->track ?><br>
			<b>School Address: </b> <?php echo $applicant->school_address ?><br>
			<b>Year Level: </b> <?php echo $applicant->year_level ?><br>
			<b>Year Graduated: </b> <?php echo $applicant->year_graduated ?><br>
			<b>Category: </b> <?php echo $applicant->category ?><br>
			<b>Gpa: </b><?php echo $applicant->gpa?><br>
			
		</td>
	</table>
	<h1>Requirements Uploaded</h1>
		<h3>Medical Record</h3>
		<img src="../../application/uploads/<?php echo $applicant->medical_record; ?>" height="200"> <br>
		<h3>Form 137</h3>
        <img src="../../application/uploads/<?php echo $applicant->form_137; ?>" height="200"> <br>
		<h3>Good Moral</h3>
        <img src="../../application/uploads/<?php echo $applicant->good_moral; ?>" height="200">	<br>
	
	
	<br>
	<form action="<?php echo site_url('applicantcontroller/viewallapplicant')?>">
    	<input type="submit" value= " Go Back"/>
	</form>

	<script>
		function updateStatus() {
			document.getElementById('static').style.display = "none";
			document.getElementById('updating').style.display = "block";
			document.getElementById('button_update').style.display = "none";
		}

		function cancel() {
			document.getElementById('static').style.display = "block";
			document.getElementById('updating').style.display = "none";
		}
		
		
	</script>
</body>
</html>