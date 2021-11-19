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
	<h1>This is Student Details Screen</h1>
	
	<br>
	<table style="border: 1px solid #dddddd;">
		<tr>
			<th>ID</th>
			<th>Student Number</th>
			<th>First Name </th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Extension Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Birthday</th>
			<th>Birthplace</th>
			<th>Contact Number</th>
			<th>Email</th>
			<th>Address</th>
			<th>Username</th>
			<th>Password</th>
			<th>Student Status</th>
			<th>Account Status</th>
			
		</tr>
		<tr>
			<td> <?php echo $row->id?> </td>
			<td> <?php echo $row->studentNumber?> </td>
			<td> <?php echo $row->firstname?> </td>
			<td> <?php echo $row->middlename?> </td>
			<td> <?php echo $row->lastname?> </td>
			<td> <?php echo $row->extname?> </td>
			<td> <?php echo $row->gender?> </td>
			<td> <?php echo $row->age?> </td>
			<td> <?php echo $row->birthday?> </td>
			<td> <?php echo $row->birthplace?> </td>
			<td> <?php echo $row->contactnum?> </td>
			<td> <?php echo $row->email?> </td>
			<td> <?php echo $row->unit?> <?php echo $row->street?> <?php echo $row->barangay?> <?php echo $row->city?> <?php echo $row->province?> <?php echo $row->zip?></td>
			<td> <?php echo $row->username?> </td>
			<td> <?php echo $row->password?> </td>
			<td> <?php echo $row->type?> </td>
			<td> <?php echo $row->status?> </td>
			
		<!-- Fix studentID displaying same ID -->

		</tr>
			
	</table>
		<br>
	<form action="<?php echo site_url('studentController')?>">
    	<input type="submit" value= "Back"/>
	</form>		
</body>
</body>
</html>