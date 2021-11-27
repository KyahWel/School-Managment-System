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
		Enter ApplicantID: <input type="text" name ="applicantID"> <br><br>
		Enter Student Status: <input type="text" name ="type"> <br><br>
		Enter Creator ID: <input type="text" name ="creatorID"> <br><br>
		<input type="submit" name="submit" value="Create student account">
		
	</form>
	<br>
	<form action="<?php echo site_url('studentController')?>">
		<input type="submit" value="Back">
	</form>
	
</body>
</body>
</html>