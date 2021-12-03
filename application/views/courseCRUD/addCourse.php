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
	<h1>This is Create Course Screen</h1>
	
	<form method="POST">
		Enter Degree: <input type="text" name="degree"> <br><br>
		Enter Major: <input type="text" name ="major"> <br><br>
		College: 
		<select name="college">
			<option value="" disabled selected hidden>Please Select</option>
			<option value="College of Science">College of Science</option>
			<option value="College of Engineering">College of Engineering</option>
			<option value="College of Industrial Education">College of Industrial Education</option>
			<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
			<option value="College of Liberal Arts">College of Liberal Arts</option>
		</select> <br><br>
		<input type="submit" name="submit" value="Create course">
	</form>
	<br>
	<form action="<?php echo site_url('courseController')?>">
    	<input type="submit" value= "Back"/>
	</form>	
	
</body>
</body>
</html>