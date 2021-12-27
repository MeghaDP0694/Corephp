<?php 
interface parents{
	public function test();
	public function display();
}
class Baseclass implements parents{
	public function __construct(){
		echo "<h1>Con. method</h1>";
	}

	public function test(){
		echo "<p>loreLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>";

	}
	public function display(){
		echo "<h1>display method</h1><p>loreLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>";
	}
}

$obj=new Baseclass();
$obj->test();
$obj->display();


 ?>