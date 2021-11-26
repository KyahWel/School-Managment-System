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
	<h1>This is View Course Screen</h1>

	<table style="border: 1px solid #dddddd;">
		<tr>
			<th>Course ID</th>
			<th>Degree</th>
			<th>Major</th>
			<th>Total Units</th>
			<th>Status</th>
			
		</tr>
		<tr>
			<td> <?php echo $row->courseID?> </td>
			<td> <?php echo $row->degree?> </td>
			<td> <?php echo $row->major?> </td>
			<td> <?php echo $row->totalUnits?> </td>
			<td> <?php echo $row->status?> </td>
		</tr>
			
	</table>
		<br>
		<form action="<?php echo site_url('courseController')?>">
    	<input type="submit" value= "Back"/>
	</form>	
</body>
</body>
</html>