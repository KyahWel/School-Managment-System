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
	<h1>This is Admin-Student Part</h1>

	<form action="<?php echo ('studentController/addStudent') ?>">
    	<input type="submit" value= " + Add student"/>
	</form>	
	<br>

	<table style="border: 1px solid #dddddd;">
		
		<tr>
			<th>ID</th>
			<th>Student Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Actions</th>
			
		</tr>
		<?php foreach($student as $studentrow) {?>
		<tr>
			<td> <?php echo $studentrow->id?> </td>
			<td> <?php echo $studentrow->studentNumber?> </td>
			<td> <?php echo $studentrow->firstname?> </td>
			<td> <?php echo $studentrow->lastname?> </td>
			<td>  
				
				<?php if ($studentrow->status == 1):  ?>
					<a href="<?php echo site_url('studentController/editStudent')?>/<?php echo $studentrow->id ?>" class='decor'>Edit </a>
					<a href="<?php echo site_url('studentController/viewStudent')?>/<?php echo $studentrow->id ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('studentController/deactivateData')?>/<?php echo $studentrow->id ?>" class='decor'> | Deactivate </a>
				<?php else: ?>
					<a href="<?php echo site_url('studentController/editStudent')?>/<?php echo $studentrow->id ?>" class='isDisabled decor'>Edit </a>
					<a href="<?php echo site_url('studentController/viewStudent')?>/<?php echo $studentrow->id ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('studentController/reactivateData')?>/<?php echo $studentrow->id ?>" class='decor'> | Activate </a>	
				<?php endif ?>					
			</td>
		</tr>
			<?php }?>
	</table>
	<br>
	
	<form action="<?php echo site_url('admin_main')?>">
    	<input type="submit" value= "Back"/>
	</form>		
	
</body>
</body>
</html>