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
	<h1>This is Teacher Details Screen</h1>
	
	<br>
	<table style="border: 1px solid #dddddd;">
		<tr>
			<th>Teacher ID</th>
			<th>Teacher Number</th>
			<th>Username</th>
			<th>Password</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>College</th>
			<th>Department</th>
			<th>Account Status</th>
			<th>Creator Number</th>
			
		</tr>
		<tr>
			<td> <?php echo $row->teacherID?> </td>
			<td> <?php echo $row->teacherNumber?> </td>
			<td> <?php echo $row->username?> </td>
			<td> <?php echo $row->password?> </td>
			<td> <?php echo $row->firstname?> </td>
			<td> <?php echo $row->lastname?> </td>
			<td> <?php echo $row->college?> </td>
			<td> <?php echo $row->department?> </td>
			<td> <?php echo $row->status?> </td>
			<td> <?php echo $row->adminNumber?> </td>
		</tr>
			
	</table>
		<br>
	<form action="<?php echo site_url('teacherController')?>">
    	<input type="submit" value= "Back"/>
	</form>		
</body>
</body>
</html>