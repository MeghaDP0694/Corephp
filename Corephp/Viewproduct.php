<?php include('connection.php'); ?>
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
</head>
<body>
<?php
$sel="select * from product";
$res=$connection->query($sel);

?>
<div class="container">
  <h2>Product Details</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>ProductName</th>
        <th>Price</th>
        <th>qty</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row=$res->fetch_object()){
      ?>
      <tr>
        <td><?php echo $row->pname?></td>
        <td><?php echo $row->price?></td>
        <td><?php echo $row->qty?></td>
        <td><?php echo $row->desciption?></td>


      </tr>

      <?php
   }

    ?>
      
      
    </tbody>
  </table>
</div>

</body>
</html>
