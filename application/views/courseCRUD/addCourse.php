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
		Total units: <input type="text" name="totalUnits"> <br><br>
		<input type="submit" name="submit" value="Create course">
	</form>
	<br>
	<form action="<?php echo site_url('courseController')?>">
    	<input type="submit" value= "Back"/>
	</form>	
	
</body>
</body>
</html>