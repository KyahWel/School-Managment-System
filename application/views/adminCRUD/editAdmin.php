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
	<h1>This is Edit Admin Screen</h1>
	<form method="POST" action="<?php echo site_url('admin_main/updateAdmin')?>/<?php echo $row->adminID; ?>">
		Firstname: <input type="text" name="firstname" value="<?php echo $row->firstname?>"> <br><br>
		Lastname: <input type="text" name ="lastname" value=<?php echo $row->lastname?>> <br><br>
		Username: <input type="text" name="username" value="<?php echo $row->username?>"> <br><br>
		Password: <input type="text" name ="password" value=<?php echo $row->password?>> <br><br>
		<input type="submit" name="submit" value="Edit admin details">
	</form>
	<br>
	<form action="<?php echo site_url('admin_main')?>">
    	<input type="submit" value= "back"/>
	</form>		
</body>
</body>
</html>