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
	<h1>This is Edit Course Screen</h1>
	<form method="POST" action="<?php echo site_url('admin_main/updateAdmin')?>/<?php echo $row->courseID; ?>">
		Degree: <input type="text" name="degree" value="<?php echo $row->degree?>"> <br><br>
		Major: <input type="text" name ="major" value=<?php echo $row->major?>> <br><br>
		<select name="college">
			<option value="" disabled selected hidden>Please Select</option>
			<option value="College of Science">College of Science</option>
			<option value="College of Engineering">College of Engineering</option>
			<option value="College of Industrial Education">College of Industrial Education</option>
			<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
			<option value="College of Liberal Arts">College of Liberal Arts</option>
		</select> <br><br>
		<input type="submit" name="submit" value="Edit course details">
	</form>
	<br>
	<form action="<?php echo site_url('courseController')?>">
    	<input type="submit" value= "Back"/>
	</form>		
</body>
</body>
</html>