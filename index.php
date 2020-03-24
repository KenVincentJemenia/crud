<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>crud</title>
</head>
<body>
<?php require_once 'process.php';?>

    <div class="col-sm-4"></div> <!-- first -->

<div class="container justify-content-center col-sm-4">
    <form action="process.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="Enter your name">
        </div>    

        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="Enter your location">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">save</button>
        </div>
    </form>
</div>
</body>
</html>