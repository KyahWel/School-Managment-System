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
    <h1> Step 3: Requirements</h1>
    
    <!-- Form 137 -->
    <table>
        <tr>
            <td> Form 137: <button type="submit"> Upload a File</button></td>
        </tr>
    </table>
    <br>

    <!-- Good Moral -->
    <table>
        <tr>
            <td> Good Moral: <button type="submit"> Upload a File</button></td>
        </tr>
    </table>
    <br>

    <!-- Medical Clearance -->
    <table>
        <tr>
            <td> Medical Clearance: <button type="submit"> Upload a File</button></td>
        </tr>
    </table>
    <br>
    <form action="<?php echo site_url('applicantController/educational_attainment')?>">
    	<input type="submit" value= "Previous Step: EDUCATIONAL ATTAINMENT"/>
	</form>
    <button type="submit"> Proceed >></button>
</body>
</html>