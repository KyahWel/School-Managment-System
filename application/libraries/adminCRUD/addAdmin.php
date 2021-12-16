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
	<h1>This is Create Admin Screen</h1>
	
	<form method="POST">
		Enter Firstname: <input type="text" name="firstname"> <br><br>
		Enter Lastname: <input type="text" name ="lastname"> <br><br>
		Enter Username: <input type="text" name="username"> <br><br>
		Enter Password: <input type="text" name ="password"> <br><br>
		<input type="submit" name="submit" value="Create admin account">
	</form>
	<br>
	<form action="<?php echo site_url('admin_main')?>">
		<input type="submit" value="Back">
	</form>
	
</body>
</body>
</html>