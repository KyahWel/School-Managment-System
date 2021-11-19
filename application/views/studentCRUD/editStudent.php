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
	
	<h1>This is Edit Admin-Student Screen</h1>
	<form method="POST" action="<?php echo site_url('studentController/updateStudent')?>/<?php echo $row->id; ?>">
		Username: <input type="text" name="username" value=<?php echo $row->username?>> <br><br>
		Password: <input type="text" name ="password" value=<?php echo $row->password?>> <br><br>
		Course: <input type="text" name="course" value=<?php echo $row->course?>> <br><br>
		<!-- Add Year Level -->
		<input type="submit" name="submit" value="Update student details">
	</form>
	<br>
	<form action="<?php echo site_url('studentController')?>">
    	<input type="submit" value= "back"/>
	</form>		
</body>
</body>
</html>