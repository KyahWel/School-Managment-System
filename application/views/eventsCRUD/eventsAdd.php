<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>EVENTS CRUD</title>
</head>
<body>
    <h1>ADD EVENTS</h1>
    <form method="POST" action="<?php echo site_url('eventsController/create') ?>">
        <div>
            <label>Title: </label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Details: </label>
            <textarea name="details" placeholder="Input text here..."></textarea>
        </div>
        <div>
            <label>Date: </label>
            <input type="date" name="date">
        </div>
        <div>
            <label>Time: </label>
            <input type="time" name="time">
        </div>
        <div>
            <label>Creator ID: </label>
            <input type="creatorID" name="creatorID">
        </div>
        <button type="submit" value="save">Submit</button>
        <button><a href="<?php echo site_url('eventsController/index') ?>">Back</a></button>
    </form>
</body>
</html>