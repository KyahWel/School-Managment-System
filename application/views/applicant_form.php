<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome page</title>
</head>

<body>
	<form action="<?php echo site_url('welcome')?>">
		<input type="submit" value=" Back" />
	</form>
	<br>
	<!-- Yung tatlong div under sya ng form tag na may method ng POST para makuha yung input fields -->
	<form method='POST' enctype="multipart/form-data">
	<!-- ------------------------------------------------------------------------------------------------------- -->
	<!-- 1st Div -->

		<div id='personalInfo' style="display: block;">
			<h1> Step 1: Personal Information </h1>

			<!-- Course Dropdown, next change: use AJAX and JQUERY to retrieve data from database-->
			<label for="courses"> Course: </label>
			<select id ="courses" name = "course_chosen">
				<option value="" selected>--Please Select--</option>
				<?php foreach($course as $course) {?>
					<option value='<?php echo $course->degree?> in <?php echo $course->major?>'><?php echo $course->degree?> in <?php echo $course->major?></option>
				<?php }?>
			</select>
			<hr>

			<!-- Name Input -->
			<table>
				<tr>
					<td> Name: <input type="text" name="firstname" placeholder="First Name"> </td>
					<td> <input type="text" placeholder="Middle Name" name='middlename'> </td>
					<td> <input type="text" placeholder="Surname" name="lastname"> </td>
					<td> <input type="text" placeholder="Extension Name" name='extname'> </td>
				</tr>
			</table>
			<br>

			<!-- LRN and Gender -->
			<table>
				<tr>
					<td> LRN Number: <input type="text" name="LRN"> </td>
					<td> Gender:
						<input type="radio" name="gender" value="Male"> Male
						<input type="radio" name="gender" value="Female"> Female
					</td>
				</tr>
			</table>
			<br>

			<!-- Birthdate and Age -->
			<table>
				<tr>
					<td> Birthdate: <input type="date" name='birthday'> </td>
					<td> Age: <input type="text" name='age'> </td>
				</tr>
			</table>
			<br>

			<!-- Birthplace -->
			<table>
				<tr>
					<td> Birthplace: <input text="text" name='birthplace'> </td>
				</tr>
			</table>
			<br>

			<!-- Contact Number & Landline -->
			<table>
				<tr>
					<td> Contact Address: <input type="text" name='contactnum'> </td>
					<td> Landline Number: <input type="text" name="landline"> </td>
				</tr>
			</table>
			<br>

			<!-- Email Address -->
			<table>
				<tr>
					<td> Email Address: <input type="text" name='email'> </td>
				</tr>
			</table>
			<br>

			<hr>

			<!-- Permanent Address -->
			<h2> Permanent Address</h2>

			<!-- Unit and Street -->
			<table>
				<tr>
					<td> Unit #: <input type="text" name='unit'> </td>
					<td> Street: <input type="text" name='street'> </td>
				</tr>
			</table>

			<!-- Barangay and City -->
			<table>
				<tr>
					<td> Barangay: <input type="text" name='barangay'> </td>
					<td> City: <input type="text" name='city'> </td>
				</tr>
			</table>

			<!-- Zip and Province -->
			<table>
				<tr>
					<td> Zip Code: <input type="text" name='zipcode'> </td>
					<td> Province: <input type="text" name='province'> </td>
				</tr>
			</table>
			<br>
			<input type="button" value="Next Step: EDUCATIONAL ATTAINMENT" onclick="educationalAttainment()" />
		</div>


	<!-- ------------------------------------------------------------------------------------------------------- -->
	<!-- 2nd Div -->


		<div id='educationalattainment' style="display:none;">
			<h1> Step 2: Educational Attainment</h1>
			<h3> School Last Attended</h3>

			<!-- School and Track -->
			<table>
				<tr>
					<td> Name of School: <input type="text" name='school'> </td>
					<td> Program/Track: <input type="text" name="track"> </td>
				</tr>
			</table>


			<!-- School Address -->
			<table>
				<tr>
					<td> School Address: <input type="text" name="school_address"> </td>
				</tr>
			</table>

			<!-- Year Level and Graduated -->
			<table>
				<tr>
					<td> Year Level: <input type="text" name="year_level"> </td>
					<td> Year Graduated: <input type="text" name="year_graduated"> </td>
				</tr>
			</table>

			<!-- Category -->
			<table>
				<tr>
					<td> Category: <input type="radio" value="K-12" name="category"> K-12 </td>
					<td> <input type="radio" value="Old Curriculum" name="category"> Old Curriculum </td>
				</tr>
			</table>

			<!-- GPA -->
			<table>
				<tr>
					<td> GPA: <input type="text" name="gpa" placeholder="input gpa"> </td>
				</tr>
			</table>
			<br>

			<!-- Previous and Next Buttons -->
			<table>
				<tr>
					<td>
						<input type="button" value="Previous Step: PERSONAL INFORMATION" onclick="personalInfo()" />
					</td>
					<td>
						<input type="button" value="Next Step: REQUIREMENTS" onclick="requirement()" />
					</td>
				</tr>
			</table>
		</div>

		<!-- ------------------------------------------------------------------------------------------------------- -->

		<!-- 3rd Div file system -->


		<div id='requirements' style="display:none;">
			<h1> Step 3: Requirements</h1>
				<label>Medical Record</label>
				<input type="file" name="medical_record">
				<br><br>
				<label>Form 137</label>
				<input type="file" name="form_137">
				<br><br>
				<label>Good Moral</label>
				<input type="file" name="good_moral">
				<br><br>
			<br>
			<input type="button" value="Previous Step: REQUIREMENTS" onclick="educationalAttainment()" /> 
			<input type="button" value="Next Step: Final Step" onclick="final_step()" />
		</div>
	<!-- ------------------------------------------------------------------------------------------------------- -->
	<!-- 4th Div Final -->
		<div id='Final' style="display:none;">
			<h1> Step 4: Final Procedure</h1>
			<h2> Applicant ID: </h2>

			<p> Take the TUPSTAT on scheduled date, time, and specific venue. Bring with you the following: </p>
			<p> a.) Test Permit </p>
			<p> b.) 2 Sharpened pencil with eraser</p>

			<button type="button"> Download Test Permit</button>
			<p style="color: red"> Note: Please come one hour before the time. </p>
			<input type="submit" value="Submit"/>
		</div>
	</form>
	<script>
		function personalInfo() {
			document.getElementById('personalInfo').style.display = "block";
			document.getElementById('educationalattainment').style.display = "none";
			document.getElementById('requirements').style.display = "none";
			document.getElementById('Final').style.display = "none";
		}

		function educationalAttainment() {
			document.getElementById('personalInfo').style.display = "none";
			document.getElementById('educationalattainment').style.display = "block";
			document.getElementById('requirements').style.display = "none";
			document.getElementById('Final').style.display = "none";
		}

		function requirement() {
			document.getElementById('personalInfo').style.display = "none";
			document.getElementById('educationalattainment').style.display = "none";
			document.getElementById('requirements').style.display = "block";
			document.getElementById('Final').style.display = "none";
		}
		function final_step() {
			document.getElementById('personalInfo').style.display = "none";
			document.getElementById('educationalattainment').style.display = "none";
			document.getElementById('requirements').style.display = "none";
			document.getElementById('Final').style.display = "block";
		}
		
	</script>
	
</body>
</body>

</html>
