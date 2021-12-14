<?php 
include('connection.php');
if(isset($_REQUEST['id'])){
	echo $id=$_REQUEST['id'];
	$query="select * from Product where pid=$id";
	$res=$connection->query($query);
	$row=$res->fetch_object();
	/*echo "<pre>";
	print_r($row);*/
	
}

 ?>
 
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

<div class="container">
  <h2>Product Edit</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Productname:</label>
      <input type="text" class="form-control"  placeholder="Enter Productname" name="pname" value="<?php echo $row->pname;?>">
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control"  placeholder="Enter price" name="price" value="<?php echo $row->price?>">
    </div>
     <div class="form-group">
      <label for="pwd">quantity:</label>
      <input type="text" class="form-control"  placeholder="Enter quantity" name="quantity" value="<?php echo $row->qty?>">
    </div>
     <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Description" name="desc" value="<?php echo $row->desciption;?>">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Update</button >
  </form>
</div>

</body>
</html>
<?php 
if(isset($_REQUEST['submit'])){
   $pname=$_REQUEST['pname'];
   $price=$_REQUEST['price'];
   $qty=$_REQUEST['quantity'];
   $descs=$_REQUEST['desc'];

   $query="update product set pname='$pname',price='$price',qty='$qty',desciption='$descs' where pid='$id'";
   
   $connection->query($query);
   header("Location:Viewproduct.php");

} ?>
