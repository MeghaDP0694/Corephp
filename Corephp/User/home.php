<?php include('../connection.php');
if(! isset($_SESSION['user'])){
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['user']->Firstname?> Home page</h1>
    <a href="logout.php" class="btn btn-primary">Logout</a>
</body>
</html>