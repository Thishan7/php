<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link>
</head>
<body>
    <?php require_once 'process.php'; ?>
    <div class="justify-content-center">
    <form action="process.php" method="post">
        <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
        <label for="">Location</label>
        <input type="text" class="form-control" name="city" placeholder="Enter your city">
        </div>
        <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  
</body>
</html>