<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Exam Schedules</title>
    <style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		}
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}

		.isDisabled {
  		color: currentColor;
  		cursor: not-allowed;
		pointer-events: none;
  		opacity: 0.5;
		}

		.decor{
			text-decoration: none;
		}
	</style>
</head>
<body>
    <h1>This is Exam Schedules Screen</h1>

    <form action="<?php echo ('examcontroller/addExam') ?>">
        <input type="submit" value= " + Add Exam Schedule"/>
    </form>	
    <br>

    <table style="border: 1px solid #dddddd;">
        
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Building</th>
            <th>Room No.</th>
            <th>Floor No.</th>
            
        </tr>
        <?php foreach($exam as $row) {?>
        <tr>
            <td> <?php echo $row->date?> </td>
            <td> <?php echo $row->time?> </td>
            <td> <?php echo $row->building ?></td>
            <td> <?php echo $row->room_no ?></td>
            <td> <?php echo $row->floor_no ?></td>
            <td>  
                
                <?php if ($row->status == 1):  ?>
                    <a href="<?php echo site_url('examcontroller/editExam')?>/<?php echo $row->schedID ?>" class='decor'>Edit </a>
                    <a href="<?php echo site_url('examcontroller/deactivateData')?>/<?php echo $row->schedID ?>" class='decor'> | Deactivate </a>
                <?php else: ?>
                    <a href="<?php echo site_url('examcontroller/editExam')?>/<?php echo $row->schedID ?>" class='isDisabled decor'>Edit </a>
                    <a href="<?php echo site_url('examcontroller/reactivateData')?>/<?php echo $row->schedID ?>" class='decor'> | Activate </a>	
                <?php endif ?>					
            </td>
        </tr>
            <?php }?>
    </table>
    <br>
    <br>
    <form action="<?php echo site_url('homepage')?>">
        <input type="submit" value= "Logout"/>
    </form>	
    <br>
    <form action="<?php echo site_url('studentController')?>">
        <input type="submit" value= "Student Tab"/>
    </form>		
    <br>			
    <form action="<?php echo site_url('teacherController')?>">
        <input type="submit" value= "Faculty Tab"/>
    </form>		
    <br>
    <form action="<?php echo site_url('courseController')?>">
        <input type="submit" value= "Course Tab"/>
    </form>	
    <br>
    <form action="<?php echo site_url('eventscontroller')?>">
        <input type="submit" value= " Events Tab"/>
    </form>
    <br>
    <form action="<?php echo site_url('applicantcontroller/viewallapplicant')?>">
        <input type="submit" value= " Admission Tab"/>
    </form>
    <br>
    <form action="<?php echo site_url('examcontroller')?>">
        <input type="submit" value= " Exam Schedules Tab"/>
    </form>

</body>
</html>