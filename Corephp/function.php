<?php 
//Default parameters in Function
function addition($a,$b=0){
	echo $a+$b;
}
//PHP Functions -Return values
function square($num){
	$sq=$num*$num;
	return $sq;
}
//Recursive Function
function swap(&$num1,&$num2){
	$num3=$num1;
	$num1=$num2;
	$num2=$num3;
}
//Passing Function parameters by reference
function fact($num){
	$f;
	if($num==1)
	{
		return 1;
	}
	else{
		$f=$num*fact($num-1);
	}
	return $f;
}
//Returning an Array to get multiple values
function makearray($num1,$num2){
	$arr=[$num1,$num2];
	return $arr;
}
if(isset($_POST['submit'])){
   		$num1=$_POST['num1'];
   		$num2=$_POST['num2'] && $_POST['num2']!=''? $_POST['num2']:0;
   		addition($num1,$num2);
   		echo "<h1>square of ".$num1."=".square($num1)."</h1>";
   		echo "<h1>fact of ".$num1."=".fact($num1)."</h1>";
   		swap($num1,$num2);
   		echo "<br>".$num1."-----".$num2;
   		$result=makearray($num1,$num2);
   		echo "<pre>";
   		print_r($result);
   		echo "<hr>";
   		var_dump($result);
   		echo "<hr>";
   		var_export($result);
  } 		
 ?>
 <form method="post">
	<input type="text" name="num1" placeholder="enter num1"><br>
	<input type="text" name="num2" placeholder="enter num2"><br>
	
	<input type="submit" name="submit">
</form>