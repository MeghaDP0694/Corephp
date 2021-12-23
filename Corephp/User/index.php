<?php include('../connection.php')?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $_COOKIE['email']??''?>">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?php echo $_COOKIE['pass']??''?>"
      >
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="rem"> Remember me
      </label>
    </div>
   <input type="submit" name="submit" class="btn btn-primary">
  </form>
</div>

</body>
</html>
<?php if(isset($_REQUEST['submit'])){
   $email=$_REQUEST['email'];
   $pass=$_REQUEST['pswd'];
   $sel="select * from ccrudd where Email='$email' and Password='$pass'";
   $res=$connection->query($sel);
   $row=$res->fetch_object();
   if(isset($row)){
     if($_REQUEST['rem']){
       setcookie("email",$email,time()+3600);
       setcookie("pass",$pass,time()+3600);
     }
     $_SESSION['user']=$row;
     header("Location:home.php");

   }
   else{
     echo "login failed";
   }
  }?>
