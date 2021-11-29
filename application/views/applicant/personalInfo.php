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
	<form action="<?php echo site_url('welcome')?>">
    	<input type="submit" value= " Back"/>
	</form>	
	<br>
    <h1> Step 1: Personal Information </h1>

    <!-- Departments Dropdown -->
    <label for="departments"> Departments: </label>
    <select>
        <option value="" disabled selected hidden>Please Select</option>
    </select>
    <br>
    <br>

    <!-- Course Dropdown -->
    <label for="courses"> Course: </label>
    <select>
        <option value="" disabled selected hidden>Please Select</option>
    </select>

    <hr>

    <!-- Name Input -->
    <table>
        <tr>
            <td> Name: <input type="text" placeholder="First Name"> </td>
            <td> <input type="text" placeholder="Middle Name"> </td>
            <td> <input type="text" placeholder="Surname"> </td>
            <td> <input type="text" placeholder="Middle Initial"> </td>
        </tr>
    </table>
    <br>

    <!-- LRN and Gender -->
    <table>
        <tr>
            <td> LRN Number: <input type="text"> </td>
            <td> Gender:
                <input type="radio" name="gender"> Male
                <input type="radio" name="gender"> Female
            </td>
        </tr>
    </table>
    <br>

    <!-- Birthdate and Age -->
    <table>
        <tr>
            <td> Birthdate: <input type="date"> </td>
            <td> Age: <input type="text"> </td>
        </tr>
    </table>
    <br>

    <!-- Birthplace -->
    <table>
        <tr>
            <td> Birthplace: <input text="text"> </td>
        </tr>
    </table>
    <br>

    <!-- Contact Number & Landline -->
    <table>
        <tr>
            <td> Contact Address: <input type="text"> </td>
            <td> Landline Number: <input type="text"> </td>
        </tr>
    </table>
    <br>

    <!-- Email Address -->
    <table>
        <tr>
            <td> Email Address: <input type="text"> </td>
        </tr>
    </table>
    <br>

    <!-- Facebook Account -->
    <table>
        <tr>
            <td> Facebook Account: <input type="text"> </td>
        </tr>
    </table>
    <hr>

    <!-- Permanent Address -->
    <h2> Permanent Address</h2>

    <!-- Unit and Street -->
    <table>
        <tr>
            <td> Unit #: <input type="text"> </td>
            <td> Street: <input type="text"> </td>
        </tr>
    </table>

    <!-- Barangay and City -->
    <table>
        <tr>
            <td> Barangay: <input type="text"> </td>
            <td> City: <input type="text"> </td>
        </tr>
    </table>

    <!-- Zip and Province -->
    <table>
        <tr>
            <td> Zip Code: <input type="text"> </td>
            <td> Province: <input type="text"> </td>
        </tr>
    </table>
    <br>

    <!-- Zipcode -->
    <form action="<?php echo site_url('applicantController/educational_attainment')?>">
    	<input type="submit" value= "Next Step: EDUCATIONAL ATTAINMENT"/>
	</form>
</body>
</body>
</html>