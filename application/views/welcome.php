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
	<h1>This is User Options</h1>
	<form action="<?php echo ('admin_loginpage')?>">
    	<input type="submit" value= "Admin"/>
	</form>
	<br>
	<form action="">
    	<input type="submit" value= "Student"/>
	</form>
	<br>
	<form action="<?php echo site_url('applicantcontroller/personal_info')?>">
    	<input type="submit" value= "Applicants"/>
	</form>
	<br>
	<form action="">
    	<input type="submit" value= "Faculty"/>
	</form>
</body>
</html>