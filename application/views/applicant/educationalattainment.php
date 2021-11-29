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
    <h1> Step 2: Educational Attainment</h1>
    <h3> School Last Attended</h3>

    <!-- School and Track -->
    <table>
        <tr>
            <td> Name of School: <input type="text"> </td>
            <td> Program/Track: <input type="text"> </td>
        </tr>
    </table>


    <!-- School Address -->
    <table>
        <tr>
            <td> School Address: <input type="text"> </td>
        </tr>
    </table>

    <!-- Year Level and Graduated -->
    <table>
        <tr>
            <td> Year Level: <input type="text"> </td>
            <td> Year Graduated: <input type="date"> </td>
        </tr>
    </table>

    <!-- Category -->
    <table>
        <tr>
            <td> Category: <input type="radio"> K-12 </td>
            <td> <input type="radio"> Old Curriculum </td>
        </tr>
    </table>

    <!-- GPA -->
    <table>
        <tr>
            <td> GPA: <input type="text"> </td>
        </tr>
    </table>
    <br>

    <!-- Previous and Next Buttons -->
    <table>
        <tr>
            <td> 
                <form action="<?php echo site_url('applicantcontroller/personal_info')?>">
    	        <input type="submit" value= "Previous Step: PERSONAL INFORMATION"/>
	            </form>
            </td>
            <td> 
            <form action="<?php echo site_url('applicantController/requirements')?>">
                <input type="submit" value= "Next Step: REQUIREMENTS"/>
            </form>
            </td>
        </tr>
    </table>
</body>
</html>