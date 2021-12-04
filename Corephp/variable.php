<?php 	

$a=10;
echo $b=$a++;//post increment//first assign value in variable then increment

echo "a=".$a;//11
echo "<br>";
echo $c=++$a;//pre increment//first increment value and the assign//12

echo "<h2>sorthand operator +=</h2>";

echo $a+=20;//$a=$a+20;


echo "<h2>sorthand operator .=</h2>";
$name="megha";

$name.="patel";
echo $name;

echo "<h2>comparision operator ==<h2>";
$x=70;
$y=70;
echo ($x==$y)?"true":"false";

echo "<h2>Global variable</h2>";

$GLOBALS['x']=10;

echo "<h2>$_SERVER Global variable</h2>";
echo $_SERVER['PHP_SELF'];
echo "<br>=====";
echo $_SERVER['QUERY_STRING']

 ?>