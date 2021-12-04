<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>For loop example</h1>
	<?php 
	for($i=1;$i<=10;$i++){
		echo $i."<br>";
	}
	?>
	<h1>While loop</h1>
	<?php 
	echo $num=1234;
	$rev=0;
	while($num != 0){
		$rem=$num%10;
		$rev=$rev*10+$rem;
		$num=$num/10;
		$num=(int)$num;
	}
	echo "<br>revnum:".$rev;

	 ?>
	 <h1>Do while</h1>
	 <?php 
	 $i=10;
	 do{
	 	echo $i."<br>";
	 	$i++;
	 }
	 while($i<=20);

	  ?>
	  <h1>Foreachloop</h1>
	  <?php 
	  $array=['php','java','.net'];
	  foreach ($array as $key ) {
	  	echo "<h3>".$key."</h3>";
	  }
	   ?>

</body>
</html>