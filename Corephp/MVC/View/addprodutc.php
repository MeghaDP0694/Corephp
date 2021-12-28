
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
  <h2>Product Add</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Productname:</label>
      <input type="text" class="form-control"  placeholder="Enter Productname" name="pname">
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control"  placeholder="Enter price" name="price">
    </div>
     <div class="form-group">
      <label for="pwd">quantity:</label>
      <input type="text" class="form-control"  placeholder="Enter quantity" name="quantity">
    </div>
     <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Description" name="desc">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button >
  </form>
</div>

</body>
</html>

