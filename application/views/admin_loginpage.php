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
	<h1>This is Admin Login Screen</h1>
	<p>
		<b>Username </b>
		<input type="text" id="fname" placeholder="Enter Username">
	</p>
	<p>
		<b>Password </b>
		<input type="password" id="fname" placeholder="Enter Password">
	</p>
	<form action="<?php echo ('admin_main') ?>">
    	<input type="submit" value= "Login"/>
	</form>	
	<br>
	<form action="<?php echo ('welcome') ?>">
    	<input type="submit" value= "Back to welcome screen"/>
	</form>	
</body>
</body>
</html>