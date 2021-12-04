<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="num1" placeholder="enter num1"><br>
	<input type="text" name="num2" placeholder="enter num2"><br>
	<input type="text" name="opt" placeholder="enter operator"><br>
	<input type="submit" name="submit">
</form>
<?php 
   if(isset($_POST['submit'])){
   		$num1=$_POST['num1'];
   		$num2=$_POST['num2'];
   		$op=$_POST['opt'];

   		switch($op){
   			case '+':
   				echo $num1+$num2;
   				break;
   			case '-':
   				echo $num1-$num2;
   				break;
   			case '*':
   				echo $num1*$num2;
   				break;
   			case '/':
   				echo $num1/$num2;
   				break;	
   			default:
   				echo "wrong choice";
   				break;			
   		}
   }

 ?>
</body>
</html>