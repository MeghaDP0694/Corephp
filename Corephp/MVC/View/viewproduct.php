
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

<div class="container">
  <a href="<?php echo $this->baseurl;?>/addproduct" class="btn btn-primary">Add Product</a>
  <h2>Cities Details</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>QTY</th>
        <th>Description</th>
        <th>Acition</th>
       
       
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($product as $row) {
      
        ?>
        <tr>
          <td><?php echo $row->pname ?></td>
          <td><?php echo $row->price ?></td>
          <td><?php echo $row->qty ?></td>
          <td><?php echo $row->desciption ?></td>
          <td><a href="<?php echo $this->baseurl?>/delproduct?id=<?php echo $row->pid?>">DELETE</a></td>
          <td><a href="<?php echo $this->baseurl?>/editproduct?id=<?php echo $row->pid?>">EDIT</a></td>


        </tr>
        <?php
      }
    ?>
      
      
    </tbody>
  </table>
</div>

</body>
</html>
