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

		.isDisabled {
  		color: currentColor;
  		cursor: not-allowed;
		pointer-events: none;
  		opacity: 0.5;
		}

		.decor{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1>This is Admin Main Screen</h1>

	<form action="<?php echo ('admin_main/addAdmin') ?>">
    	<input type="submit" value= " + Add another new admin"/>
	</form>	
	<br>

	<table style="border: 1px solid #dddddd;">
		
		<tr>
			<th>Admin Number</th>
			<th>Username</th>
			<th>Admin Name</th>
			<th>Actions</th>
			
		</tr>
		<?php foreach($result as $row) {?>
		<tr>
			<td> <?php echo $row->adminNumber?> </td>
			<td> <?php echo $row->username?> </td>
			<td> <?php echo $row->firstname ?> <?php echo $row->lastname ?></td>
			<td>  
				
				<?php if ($row->status == 1):  ?>
					<a href="<?php echo site_url('admin_main/editAdmin')?>/<?php echo $row->id ?>" class='decor'>Edit </a>
					<a href="<?php echo site_url('admin_main/viewAdmin')?>/<?php echo $row->id ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('admin_main/deactivateData')?>/<?php echo $row->id ?>" class='decor'> | Deactivate </a>
				<?php else: ?>
					<a href="<?php echo site_url('admin_main/editAdmin')?>/<?php echo $row->id ?>" class='isDisabled decor'>Edit </a>
					<a href="<?php echo site_url('admin_main/viewAdmin')?>/<?php echo $row->id ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('admin_main/reactivateData')?>/<?php echo $row->id ?>" class='decor'> | Activate </a>	
				<?php endif ?>					
			</td>
		</tr>
			<?php }?>
	</table>
	<br>
	<form action="<?php echo site_url('admin_loginpage')?>">
    	<input type="submit" value= "Logout"/>
	</form>	
	<br>
	<form action="<?php echo site_url('studentcontroller')?>">
    	<input type="submit" value= " Student Control Center"/>
	</form>	
	<br>
	

	
</body>
</body>
</html>