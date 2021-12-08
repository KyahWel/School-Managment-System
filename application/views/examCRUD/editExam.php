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
	<h1>This is Edit Exam Schedule Screen</h1>
	<form method="POST" action="<?php echo site_url('examcontroller/updateExam')?>/<?php echo $row->schedID; ?>">
            <label>Date: </label>
            <input type="date" name="date" value="<?php echo $row->date;?>">
		<br><br>
            <label>Time: </label>
            <input type="time" name="time" value="<?php echo $row->time; ?>">
		<br><br>
			<label>Building: </label>
            <select name="building">
				<option value="<?php echo $row->building; ?>" disabled selected hidden><?php echo $row->building; ?></option>
				<option value="College of Science">College of Science</option>
				<option value="College of Engineering">College of Engineering</option>
				<option value="College of Industrial Education">College of Industrial Education</option>
				<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
				<option value="College of Liberal Arts">College of Liberal Arts</option>
			</select>
		<br><br>
			<label>Room Number: </label>
            <input type="text" name="room_no" value="<?php echo $row->room_no; ?>">
		<br><br>
			<label>Floor Number: </label>
            <input type="text" name="floor_no" value="<?php echo $row->floor_no; ?>">	
		<br><br>
		<input type="submit" name="submit" value="Edit Exam Schedule">
	</form>
	<br>
	<form action="<?php echo site_url('examcontroller')?>">
    	<input type="submit" value= "Back"/>
	</form>		
</body>
</body>
</html>