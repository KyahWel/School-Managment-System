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
	<h1>This is Admin add Student Screen</h1>

	<form method="POST">
		Enter Username: <input type="text" name="username"> <br><br>
		Enter Password: <input type="text" name ="password"> <br><br>
		Enter First Name: <input type="text" name ="firstname"> <br><br>
		Enter Lastname: <input type="text" name ="lastname"> <br><br>
		Enter College: <input type="text" name ="college"> <br><br>
		Enter Deparment: <input type="text" name ="department"> <br><br>
		Enter Creator ID: <input type="text" name ="creatorID"> <br><br>
		<input type="submit" name="submit" value="Create teacher account">
		
	</form>
	<br>
	<form action="<?php echo site_url('teacherController')?>">
		<input type="submit" value="Back">
	</form>
	
</body>
</body>
</html>