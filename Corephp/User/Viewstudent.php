<?php include('../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
$sel="SELECT * FROM city join ccrudd on city.cid= ccrudd.Location";
$res=$connection->query($sel);

?>
<div class="container">
  <a href="registration.php" class="btn btn-primary">Add User</a>
  <h2>User Details</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>UserName</th>
        <th>lastname</th>
        <th>contact</th>
        <th>gender</th>
        <th>city</th>
        <th>hobby</th>
        <th>Image</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=$res->fetch_object()){
        ?>
        <tr>
          <td><?php echo $row->Firstname ?></td>
          <td><?php echo $row->Lastname ?></td>
          <td><?php echo $row->Contactno ?></td>
          <td><?php echo $row->Gender ?></td>
          <td><?php echo $row->cname ?></td>
          <td><?php echo $row->Hobbies ?></td>
          <td><img height="100px" width="100px" src="images/<?php echo $row->Image ?>"></td>
          <td><?php echo $row->Email ?></td>
          <td><a href="Registration.php?id=<?php echo $row->Id?>">Edit</a></td>

        </tr>
        <?php
      }
    ?>
      
      
    </tbody>
  </table>
</div>

</body>
</html>
