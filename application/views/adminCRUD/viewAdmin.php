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
	<h1>This is View Admin Screen</h1>

	<table style="border: 1px solid #dddddd;">
		<tr>
			<th>ID</th>
			<th>Admin Number</th>
			<th>Username</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Password</th>
			<th>Status</th>
			
		</tr>
		<tr>
			<td> <?php echo $row->adminID?> </td>
			<td> <?php echo $row->adminNumber?> </td>
			<td> <?php echo $row->username?> </td>
			<td> <?php echo $row->firstname?> </td>
			<td> <?php echo $row->lastname?> </td>
			<td> <?php echo $row->password?> </td>
			<td> <?php echo $row->status?> </td>
		</tr>
			
	</table>
		<br>
	<form action="<?php echo site_url('admin_main')?>">
    	<input type="submit" value= "Back"/>
	</form>		
</body>
</body>
</html>