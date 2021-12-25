<?php
include __DIR__.'/../includes/adminSideBar.php'
?>

<head>
    <link href="<?php echo base_url('assets/css/class.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Class</title>
</head>

<div class="height-100 pt-2 container-fluid">

<!-- Start -->

    <!-- Class Tab -->
    <div class="ClassTab my-3">
        <h3><i>Welcome to Class Tab</i></h3>
    </div>

    <!-- Add Class -->
    <div class="col-12 align-self-center my-3" id="createClass">
        <div class="accordion accordion-flush" id="accordion-addClass">
            <div class="accordion-item">

            <h2 class="accordion-header" id="addClassHeader">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addClass" aria-expanded="false" aria-controls="addClass">
                Add Class
                </button>
            </h2>

            <div id="addClass" class="accordion-collapse collapse" aria-labelledby="addClassHeader" data-bs-parent="#accordion-addClass">
                <div class="accordion-body">
                    <form action="">
                        <div class="row mb-3">
                            <div class="col-6"> <!--Course-->
                            <label class="form-label">Course</label>
                            <select name="course" class="form-control">
                                <option value="" disabled selected hidden></option>
                                <option value="course">Course 1</option>
                                <option value="course">Course 2</option>
                                <option value="course">Course 3</option>
		                    </select>
                            </div>
                            <div class="col-6"> <!--Semester-->
                            <label class="form-label">Semester</label>
                            <select name="semester" class="form-control">
                                <option value="" disabled selected hidden></option>
                                <option value="semester">First</option>
                                <option value="semester">Second</option>
		                    </select>
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <label class="form-label">Subject</label>
                            <div class="col-sm-3">
                                <select name="subject" class="form-control">
                                    <option value="" disabled selected hidden>Subject</option>
                                    <option value="subject">Subject 1</option>
                                    <option value="subject">Subject 2</option>
                                    <option value="subject">Subject 3</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="professorName" class="form-control">
                                    <option value="" disabled selected hidden>Professor</option>
                                    <option value="professorName">Professor 1</option>
                                    <option value="professorName">Professor 2</option>
                                    <option value="professorName">Professor 3</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="daySchedule" class="form-control">
                                    <option value="" disabled selected hidden>Day</option>
                                    <option value="daySchedule">Monday</option>
                                    <option value="daySchedule">Tuesday</option>
                                    <option value="daySchedule">Wednesday</option>
                                    <option value="daySchedule">Thursday</option>
                                    <option value="daySchedule">Friday</option>
                                    <option value="daySchedule">Saturday</option>
                                    <option value="daySchedule">Sunday</option>
                                </select>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeFrom" placeholder="From">
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeTo" placeholder="To">
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <select name="subject" class="form-control">
                                    <option value="" disabled selected hidden>Subject</option>
                                    <option value="subject">Subject 1</option>
                                    <option value="subject">Subject 2</option>
                                    <option value="subject">Subject 3</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="professorName" class="form-control">
                                    <option value="" disabled selected hidden>Professor</option>
                                    <option value="professorName">Professor 1</option>
                                    <option value="professorName">Professor 2</option>
                                    <option value="professorName">Professor 3</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="daySchedule" class="form-control">
                                    <option value="" disabled selected hidden>Day</option>
                                    <option value="daySchedule">Monday</option>
                                    <option value="daySchedule">Tuesday</option>
                                    <option value="daySchedule">Wednesday</option>
                                    <option value="daySchedule">Thursday</option>
                                    <option value="daySchedule">Friday</option>
                                    <option value="daySchedule">Saturday</option>
                                    <option value="daySchedule">Sunday</option>
                                </select>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeFrom" placeholder="From">
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeTo" placeholder="To">
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <select name="subject" class="form-control">
                                    <option value="" disabled selected hidden>Subject</option>
                                    <option value="subject">Subject 1</option>
                                    <option value="subject">Subject 2</option>
                                    <option value="subject">Subject 3</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="professorName" class="form-control">
                                    <option value="" disabled selected hidden>Professor</option>
                                    <option value="professorName">Professor 1</option>
                                    <option value="professorName">Professor 2</option>
                                    <option value="professorName">Professor 3</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="daySchedule" class="form-control">
                                    <option value="" disabled selected hidden>Day</option>
                                    <option value="daySchedule">Monday</option>
                                    <option value="daySchedule">Tuesday</option>
                                    <option value="daySchedule">Wednesday</option>
                                    <option value="daySchedule">Thursday</option>
                                    <option value="daySchedule">Friday</option>
                                    <option value="daySchedule">Saturday</option>
                                    <option value="daySchedule">Sunday</option>
                                </select>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeFrom" placeholder="From">
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeTo" placeholder="To">
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <select name="subject" class="form-control">
                                    <option value="" disabled selected hidden>Subject</option>
                                    <option value="subject">Subject 1</option>
                                    <option value="subject">Subject 2</option>
                                    <option value="subject">Subject 3</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="professorName" class="form-control">
                                    <option value="" disabled selected hidden>Professor</option>
                                    <option value="professorName">Professor 1</option>
                                    <option value="professorName">Professor 2</option>
                                    <option value="professorName">Professor 3</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="daySchedule" class="form-control">
                                    <option value="" disabled selected hidden>Day</option>
                                    <option value="daySchedule">Monday</option>
                                    <option value="daySchedule">Tuesday</option>
                                    <option value="daySchedule">Wednesday</option>
                                    <option value="daySchedule">Thursday</option>
                                    <option value="daySchedule">Friday</option>
                                    <option value="daySchedule">Saturday</option>
                                    <option value="daySchedule">Sunday</option>
                                </select>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeFrom" placeholder="From">
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeTo" placeholder="To">
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <select name="subject" class="form-control">
                                    <option value="" disabled selected hidden>Subject</option>
                                    <option value="subject">Subject 1</option>
                                    <option value="subject">Subject 2</option>
                                    <option value="subject">Subject 3</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select name="professorName" class="form-control">
                                    <option value="" disabled selected hidden>Professor</option>
                                    <option value="professorName">Professor 1</option>
                                    <option value="professorName">Professor 2</option>
                                    <option value="professorName">Professor 3</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select name="daySchedule" class="form-control">
                                    <option value="" disabled selected hidden>Day</option>
                                    <option value="daySchedule">Monday</option>
                                    <option value="daySchedule">Tuesday</option>
                                    <option value="daySchedule">Wednesday</option>
                                    <option value="daySchedule">Thursday</option>
                                    <option value="daySchedule">Friday</option>
                                    <option value="daySchedule">Saturday</option>
                                    <option value="daySchedule">Sunday</option>
                                </select>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeFrom" placeholder="From">
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" name="timeTo" placeholder="To">
                            </div>
                        </div>
                        <div class="addClassButton d-flex justify-content-end"> <!--Buttons-->
                            <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                            <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>

    <!-- Filter and Search -->
    <div class="col-12 align-self-center my-3" id="filterAndSearch">
        <label>Filter by:</label>
        <select required>
            <option value="" disabled selected hidden>Course</option>
            <option value="course">Course 1</option>
            <option value="course">Course 2</option>
            <option value="course">Course 3</option>
        </select>
        <select required>
            <option value="" disabled selected hidden>Semester</option>
            <option value="semester">First</option>
            <option value="semester">Second</option>
        </select>
        <input type="text" name="search" placeholder="Search">
        <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
    </div>  

    <!-- Class Table -->
    <div class="col-12 align-self-center my-3" id="classList">
        <div class="table-wrapper">
        
            <!--Table Header-->
            <div class="table-title">
                <div class="row">
                    <div class="col">
                        <h2>Class List</h2>
                    </div>
                </div>
            </div>

            <!--Table Body-->
            <div class="table-responsive">  
                <table class="table align-middle table-striped table-borderless table-hover" id="table-body">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>     
                        <tr>
                            <td>BSCS</td> 
                            <td>First Semester</td>
                            <td>
                            <div class="action-buttons">
                                <li><button type="button" id="view" class="btn" data-bs-toggle="modal" data-bs-target="#viewClass"><i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                <li><button type="button" id="edit" class="btn" data-bs-toggle="modal" data-bs-target="#editClass"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                <li>
                                    <div id="status">ACTIVATED</div>
                                </li>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- View Class -->
    <div class="modal fade" id="viewClass" tabindex="-1" aria-labelledby="viewClassHeader" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="viewClassHeader">View Class</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="">
                        <div class="row mb-3">
                            <div class="col-6"> <!--Course-->
                            <label class="form-label">Course</label>
                            <input type="text" class="form-control" placeholder="Course 1" readonly>
                            </div>
                            <div class="col-6"> <!--Semester-->
                            <label class="form-label">Semester</label>
                            <input type="text" class="form-control" placeholder="First" readonly>
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <label class="form-label">Subject</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Subject 1" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Professor 1" readonly>  
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Monday" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="7:00" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="9:00" readonly>
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Subject 1" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Professor 1" readonly>  
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Monday" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="7:00" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="9:00" readonly>
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Subject 1" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Professor 1" readonly>  
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Monday" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="7:00" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="9:00" readonly>
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Subject 1" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Professor 1" readonly>  
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Monday" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="7:00" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="9:00" readonly>
                            </div>
                        </div>
                        <div class="row mb-3"> <!--Subject-->
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Subject 1" readonly>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Professor 1" readonly>  
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Monday" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="7:00" readonly>
                            </div>
                            <div class="col-sm-2" id="time">
                                <input type="text" class="form-control" placeholder="9:00" readonly>
                            </div>
                        </div>
                    </form>
                    <div class="viewClassButton d-flex justify-content-end"> <!--Buttons-->
                        <button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Okay</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Class -->
    <div class="modal fade" id="editClass" tabindex="-1" aria-labelledby="editClassHeader" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="editClassHeader">Update Class</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="">
                        <div class="row mb-3">
                            <div class="col-6"> <!--Course-->
                            <label class="form-label">Course</label>
                            <select name="course" class="form-control">
                                <option value="" disabled selected hidden></option>
                                <option value="course">Course 1</option>
                                <option value="course">Course 2</option>
                                <option value="course">Course 3</option>
		                    </select>
                            </div>
                            <div class="col-6"> <!--Semester-->
                            <label class="form-label">Semester</label>
                            <select name="semester" class="form-control">
                                <option value="" disabled selected hidden></option>
                                <option value="semester">First</option>
                                <option value="semester">Second</option>
		                    </select>
                            </div>
                        </div>
                            <div class="row mb-3"> <!--Subject-->
                                <label class="form-label">Subject</label>
                                <div class="col-sm-3">
                                    <select name="subject" class="form-control">
                                        <option value="" disabled selected hidden>Subject</option>
                                        <option value="subject">Subject 1</option>
                                        <option value="subject">Subject 2</option>
                                        <option value="subject">Subject 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="professorName" class="form-control">
                                        <option value="" disabled selected hidden>Professor</option>
                                        <option value="professorName">Professor 1</option>
                                        <option value="professorName">Professor 2</option>
                                        <option value="professorName">Professor 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="daySchedule" class="form-control">
                                        <option value="" disabled selected hidden>Day</option>
                                        <option value="daySchedule">Monday</option>
                                        <option value="daySchedule">Tuesday</option>
                                        <option value="daySchedule">Wednesday</option>
                                        <option value="daySchedule">Thursday</option>
                                        <option value="daySchedule">Friday</option>
                                        <option value="daySchedule">Saturday</option>
                                        <option value="daySchedule">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeFrom" placeholder="From">
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeTo" placeholder="To">
                                </div>
                            </div>
                            <div class="row mb-3"> <!--Subject-->
                                <div class="col-sm-3">
                                    <select name="subject" class="form-control">
                                        <option value="" disabled selected hidden>Subject</option>
                                        <option value="subject">Subject 1</option>
                                        <option value="subject">Subject 2</option>
                                        <option value="subject">Subject 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="professorName" class="form-control">
                                        <option value="" disabled selected hidden>Professor</option>
                                        <option value="professorName">Professor 1</option>
                                        <option value="professorName">Professor 2</option>
                                        <option value="professorName">Professor 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="daySchedule" class="form-control">
                                        <option value="" disabled selected hidden>Day</option>
                                        <option value="daySchedule">Monday</option>
                                        <option value="daySchedule">Tuesday</option>
                                        <option value="daySchedule">Wednesday</option>
                                        <option value="daySchedule">Thursday</option>
                                        <option value="daySchedule">Friday</option>
                                        <option value="daySchedule">Saturday</option>
                                        <option value="daySchedule">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeFrom" placeholder="From">
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeTo" placeholder="To">
                                </div>
                            </div>
                            <div class="row mb-3"> <!--Subject-->
                                <div class="col-sm-3">
                                    <select name="subject" class="form-control">
                                        <option value="" disabled selected hidden>Subject</option>
                                        <option value="subject">Subject 1</option>
                                        <option value="subject">Subject 2</option>
                                        <option value="subject">Subject 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="professorName" class="form-control">
                                        <option value="" disabled selected hidden>Professor</option>
                                        <option value="professorName">Professor 1</option>
                                        <option value="professorName">Professor 2</option>
                                        <option value="professorName">Professor 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="daySchedule" class="form-control">
                                        <option value="" disabled selected hidden>Day</option>
                                        <option value="daySchedule">Monday</option>
                                        <option value="daySchedule">Tuesday</option>
                                        <option value="daySchedule">Wednesday</option>
                                        <option value="daySchedule">Thursday</option>
                                        <option value="daySchedule">Friday</option>
                                        <option value="daySchedule">Saturday</option>
                                        <option value="daySchedule">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeFrom" placeholder="From">
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeTo" placeholder="To">
                                </div>
                            </div>
                            <div class="row mb-3"> <!--Subject-->
                                <div class="col-sm-3">
                                    <select name="subject" class="form-control">
                                        <option value="" disabled selected hidden>Subject</option>
                                        <option value="subject">Subject 1</option>
                                        <option value="subject">Subject 2</option>
                                        <option value="subject">Subject 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="professorName" class="form-control">
                                        <option value="" disabled selected hidden>Professor</option>
                                        <option value="professorName">Professor 1</option>
                                        <option value="professorName">Professor 2</option>
                                        <option value="professorName">Professor 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="daySchedule" class="form-control">
                                        <option value="" disabled selected hidden>Day</option>
                                        <option value="daySchedule">Monday</option>
                                        <option value="daySchedule">Tuesday</option>
                                        <option value="daySchedule">Wednesday</option>
                                        <option value="daySchedule">Thursday</option>
                                        <option value="daySchedule">Friday</option>
                                        <option value="daySchedule">Saturday</option>
                                        <option value="daySchedule">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeFrom" placeholder="From">
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeTo" placeholder="To">
                                </div>
                            </div>
                            <div class="row mb-3"> <!--Subject-->
                                <div class="col-sm-3">
                                    <select name="subject" class="form-control">
                                        <option value="" disabled selected hidden>Subject</option>
                                        <option value="subject">Subject 1</option>
                                        <option value="subject">Subject 2</option>
                                        <option value="subject">Subject 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select name="professorName" class="form-control">
                                        <option value="" disabled selected hidden>Professor</option>
                                        <option value="professorName">Professor 1</option>
                                        <option value="professorName">Professor 2</option>
                                        <option value="professorName">Professor 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="daySchedule" class="form-control">
                                        <option value="" disabled selected hidden>Day</option>
                                        <option value="daySchedule">Monday</option>
                                        <option value="daySchedule">Tuesday</option>
                                        <option value="daySchedule">Wednesday</option>
                                        <option value="daySchedule">Thursday</option>
                                        <option value="daySchedule">Friday</option>
                                        <option value="daySchedule">Saturday</option>
                                        <option value="daySchedule">Sunday</option>
                                    </select>
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeFrom" placeholder="From">
                                </div>
                                <div class="col-sm-2" id="time">
                                    <input type="text" class="form-control" name="timeTo" placeholder="To">
                                </div>
                            </div>
                        <div class="editClassButton d-flex justify-content-end"> <!--Buttons-->
                            <button class="btn btn-default" id="save" type="submit" value="save">Confirm</button>
                            <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

<!-- End -->

</div>

<script src="<?php echo base_url('assets/js/class.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>