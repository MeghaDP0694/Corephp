<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center">Types of Array in php</h1>
<h2>array_combine()</h2>
<?php 
	$data=["name","sname"];
	$data1=["email"=>"m@gmail.com","address"=>"surat"];
	echo "<pre>";
	print_r(array_combine($data, $data1));
 ?>
 <h2>array_merge</h2>
 <?php 
 	print_r(array_merge($data,$data1));
  ?>
  <h2>Count</h2>
  <?php 
  		$array=['bmb','gjhghg',1,2,3];
  		echo count($array);
   ?>
   <h3>in_array</h3>
   <?php 
   		if(in_array("bmbxxzx", $array)){
   			echo "find";
   		}
   		else{
   			echo "not find";
   		}

    ?>
    <h2>array key get array_keys</h2>
    <?php 
    $student=['name'=>'megha','enroll'=>123,'email'=>'m@gmail.com'];
    print_r(array_keys($student));
    print_r(array_values($student));

     ?>
     <h2>sort</h2>
     <?php 
    	arsort($student);
     	print_r($student);

      ?>
      <h2>implode/explode</h2>
      <?php 
      $hobby=['music','sport','drawing'];
      echo $str=implode("-",$hobby);
      print_r(explode("-", $str));
       ?>
</body>
</html>