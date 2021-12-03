<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Applicants</title>
</head>
<body>
    <h1>This is applicant login</h1>
    <div class="container">
		<b>Enter Applicant Number </b>
		<input type="text" id="testing" placeholder="Applicant Number">
    </div>
    <br>
    <form action="">
    	<input type="submit" value= "Login"/>
	</form>	
	<br>
    <form action="<?php echo site_url('applicantController/addApplicant')?>">
    	<input type="submit" value= "Apply"/>
	</form>	
	<br>
	<form action="<?php echo site_url('welcome')?>">
	<input type="submit" value= "Back"/>
	</form>		
</body>
</html>