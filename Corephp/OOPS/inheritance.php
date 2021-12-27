<?php 
abstract class parents{
	public function __construct(){
		echo "<h1>parent con.</h1>";
	}

	public function commantask(){
		echo "<p>loreLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>";
	}
	abstract public function getinfo();
}
class child1 extends parents{
	public function __construct(){
		parent:: __construct();
		echo "<h1>child con.</h1>";
	}
	public function getinfo(){

		echo "child1 method called";
	}
	
}
class child2 extends parents{
	public function __construct(){
		parent:: __construct();
		echo "<h1>child con.</h1>";
	}
	public function getinfo(){

		echo "child2 method called";
	}
	
}

//$p=new parents();



$obj=new child1();
$obj->getinfo();
$obj->commantask();
//$obj->showinfo();

$sid=new child2();
$sid->getinfo();
$sid->commantask();





 ?>