<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>EVENTS CRUD</title>
    <style>
        .container table th{
            border-bottom: solid;
        }
    </style>
</head>
<body>
    <h1>EVENTS AND ANNOUNCEMENTS MAIN VIEW</h1>
    <button><a href="<?php echo site_url('eventsController/add') ?>">Add Event</a></button>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Event ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                    <td><?php echo $row->eaID; ?></td>
                    <td><?php echo $row->title; ?></td>
                    <td>
                        <a href="<?php echo site_url('eventsController/edit');?>/<?php echo $row->eaID; ?>" > Edit</a> |
                        <a href="<?php echo site_url('eventsController/view');?>/<?php echo $row->eaID; ?>" > View</a> | 
                        <a href="<?php 
                            if($row->status == 0){
                                echo site_url('eventsController/activate');
                            } else {
                                echo site_url('eventsController/deactivate');
                            }
                        ?>/<?php echo $row->eaID; ?>" >
                            <?php 
                                if($row->status == 0){
                                    echo "Activate";
                                } else {
                                    echo "Deactivate";
                                }
                            ?>
                        </a>
                        
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <form action="<?php echo site_url('admin_loginpage')?>">
    	<input type="submit" value= "Logout"/>
	</form>	
	<br>
	<form action="<?php echo site_url('admin_main')?>">
	<input type="submit" value= " Admin Control Center"/>
	</form>		
	<br>				
	<form action="<?php echo site_url('teachercontroller')?>">
    	<input type="submit" value= " Teacher Control Center"/>
	</form>	
	<br>
	<form action="<?php echo site_url('studentcontroller')?>">
    	<input type="submit" value= " Student Control Center"/>
	</form>	
</body>
</html>