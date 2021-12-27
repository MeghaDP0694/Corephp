<?php 
class test{
	public static $var=0;
	public $a;

	public function __construct(){
		$a=0;
		//test::$var = 0;
		test::$var++;
		$a++;
		echo "<h1>static::::";
		echo test::$var;
		echo "a====  ".$a;
		echo "</h1>";
	}

}

$obj=new test();
$obj1=new test();
$obj2=new test();
echo test::$var;



 ?>