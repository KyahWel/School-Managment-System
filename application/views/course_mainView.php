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
	<h1>This is Course Part</h1>

	<form action="<?php echo ('courseController/addCourse') ?>">
    	<input type="submit" value= " + Add Course"/>
	</form>	
	<br>

	<table style="border: 1px solid #dddddd;">
		
		<tr>
			<th>Course ID</th>
			<th>Course Name</th>
			<th>Actions</th>
			
		</tr>
		<?php foreach($course as $courserow) {?>
		<tr>
			<td> <?php echo $courserow->courseID?> </td>
			<td> <?php echo $courserow->degree?> in <?php echo $courserow->major?></td>
			<td>  
				
				<?php if ($courserow->status == 1):  ?>
					<a href="<?php echo site_url('courseController/editcourse')?>/<?php echo $courserow->courseID ?>" class='decor'>Edit </a>
					<a href="<?php echo site_url('courseController/viewcourse')?>/<?php echo $courserow->courseID ?>" class='decor'>| View </a>
					<a href="<?php echo site_url('courseController/deactivateData')?>/<?php echo $courserow->courseID ?>" class='decor'> | Deactivate </a>
				<?php else: ?>
					<a href="<?php echo site_url('courseController/editcourse')?>/<?php echo $courserow->courseID ?>" class='isDisabled decor'>Edit </a>
					<a href="<?php echo site_url('courseController/viewcourse')?>/<?php echo $courserow->courseID ?>" class='isDisabled decor'>| View </a>
					<a href="<?php echo site_url('courseController/reactivateData')?>/<?php echo $courserow->courseID ?>" class='decor'> | Activate </a>	
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
	<form action="<?php echo site_url('teachercontroller')?>">
    	<input type="submit" value= " Teacher Control Center"/>
	</form>	
	<br>
	<form action="<?php echo site_url('studentcontroller')?>">
    	<input type="submit" value= " Student Control Center"/>
	</form>	
	<br>
	<form action="<?php echo site_url('eventscontroller')?>">
    	<input type="submit" value= " Events Control Center"/>
	</form>	

	
</body>
</body>
</html>