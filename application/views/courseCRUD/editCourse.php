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
	<h1>This is Edit Course Screen</h1>
	<form method="POST" action="<?php echo site_url('admin_main/updateAdmin')?>/<?php echo $row->courseID; ?>">
		Degree: <input type="text" name="degree" value="<?php echo $row->degree?>"> <br><br>
		Major: <input type="text" name ="major" value=<?php echo $row->major?>> <br><br>
		Total Units: <input type="text" name="totalUnits" value="<?php echo $row->totalUnits?>"> <br><br>
		<input type="submit" name="submit" value="Edit course details">
	</form>
	<br>
	<form action="<?php echo site_url('courseController')?>">
    	<input type="submit" value= "Back"/>
	</form>		
</body>
</body>
</html>