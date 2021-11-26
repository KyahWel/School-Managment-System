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
	
	<h1>Edit Teacher Information page:</h1>
	<form method="POST" action="<?php echo site_url('teacherController/updateTeacher')?>/<?php echo $row->teacherID; ?>">
		Username: <input type="text" name="username" value=<?php echo $row->username?>> <br><br>
		Password: <input type="text" name ="password" value=<?php echo $row->password?>> <br><br>
		College: <input type="text" name="college" value=<?php echo $row->college?>> <br><br>
		Department: <input type="text" name="department" value=<?php echo $row->department?>> <br><br>
		<!-- Add Year Level -->
		<input type="submit" name="submit" value="Update teacher details">
	</form>
	<br>
	<form action="<?php echo site_url('teacherController')?>">
    	<input type="submit" value= "back"/>
	</form>		
</body>
</body>
</html>