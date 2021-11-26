<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>EVENTS CRUD</title>
    <style>
        table {
            
        }
        .container table th{
            border-bottom: solid;
        }
    </style>
</head>
<body>
    <h1>EVENTS VIEW</h1>
    
    <button><a href="<?php echo site_url('eventsController/index') ?>">Back</a></button>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Event ID</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Date</th>
                    <th>Time</th> 
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $row->eaID; ?></td>
                    <td><?php echo $row->title; ?></td>
                    <td><?php echo $row->details; ?></td>
                    <td><?php echo $row->date; ?></td>
                    <td><?php echo $row->time; ?></td>
                    <td><?php echo $row->status; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>