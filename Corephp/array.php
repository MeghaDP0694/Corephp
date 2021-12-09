<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
<h1 style="text-align: center">Array in php</h1>
<h1>Numeric Arrays</h1>
<?php 
$arr=[1,2,3,"megha","text"];
echo "<pre>";
print_r($arr);

 ?>
 <h1>Assoiciative Arrays</h1>
 <?php 
 $Users=['name'=>'Megha','email'=>'m@gmail.com','sub'=>'php'];
echo "<pre>";
print_r($Users);
  ?>
  <h1>multidimentional Arrays</h1>
  <?php 
    $subject=['software'=>['php','java','.net'],'hardware'=>['a+','n+']];
    echo "<pre>";
    print_r($subject);

   ?>
   <h3><?php echo $subject['software'][2]; ?></h3>
</body>
</html>