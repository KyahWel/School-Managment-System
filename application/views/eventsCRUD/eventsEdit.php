<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>EVENTS CRUD</title>
</head>
<body>
    <h1>EDIT EVENTS</h1>
    <form method="POST" action="<?php echo site_url('eventsController/update') ?>/<?php echo $row->eaID ?>">
        <div>
            <label>Title: </label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Details: </label>
            <input type="text" value="<?php echo $row->details ?>" name="details">
        </div>
        <div>
            <label>Date: </label>
            <input type="date" value="<?php echo $row->date ?>" name="date">
        </div>
        <div>
            <label>Time: </label>
            <input type="time" value="<?php echo $row->time ?>" name="time">
        </div>
        <div>
            <label>Creator ID: </label>
            <input type="creatorID" name="creatorID">
        </div>
        <button type="submit" value="save">Submit</button>
        <button><a href="<?php echo site_url('eventsController/view') ?>">Back</a></button>
    </form>
</body>
</html>