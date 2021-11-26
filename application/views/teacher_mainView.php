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
	<h1>This is Admin-Teacher   Part</h1>

	<form action="<?php echo ('teacherController/addteacher') ?>">
    	<input type="submit" value= " + Add teacher"/>
	</form>	
	<br>

	<table style="border: 1px solid #dddddd;">
		
		<tr>
			<th>ID</th>
			<th>Teacher Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>College</th>
			<th>Department</th>
			<th>Actions</th>
			
		</tr>
		<?php foreach($teacher as $teacherrow) {?>
		<tr>
			<td> <?php echo $teacherrow->teacherID?> </td>
			<td> <?php echo $teacherrow->teacherNumber?> </td>
			<td> <?php echo $teacherrow->firstname?> </td>
			<td> <?php echo $teacherrow->lastname?> </td>
			<td> <?php echo $teacherrow->college?> </td>
			<td> <?php echo $teacherrow->department?> </td>
			<td>  
				
				<?php if ($teacherrow->status == 1):  ?>
					<a href="<?php echo site_url('teacherController/editteacher')?>/<?php echo $teacherrow->teacherID ?>" class='decor'>Edit </a>
					<a href="<?php echo site_url('teacherController/viewteacher')?>/<?php echo $teacherrow->teacherID ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('teacherController/deactivateData')?>/<?php echo $teacherrow->teacherID ?>" class='decor'> | Deactivate </a>
				<?php else: ?>
					<a href="<?php echo site_url('teacherController/editteacher')?>/<?php echo $teacherrow->teacherID ?>" class='isDisabled decor'>Edit </a>
					<a href="<?php echo site_url('teacherController/viewteacher')?>/<?php echo $teacherrow->teacherID ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('teacherController/reactivateData')?>/<?php echo $teacherrow->teacherID ?>" class='decor'> | Activate </a>	
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
	<form action="<?php echo site_url('admin_main')?>">
	<input type="submit" value= " Admin Control Center"/>
	</form>	
	<br>	
	<form action="<?php echo site_url('studentcontroller')?>">
    	<input type="submit" value= " Student Control Center"/>
	</form>	
	<br>	
	<form action="<?php echo site_url('coursecontroller')?>">
    	<input type="submit" value= " Course Control Center"/>
	</form>	
	
</body>
</body>
</html>