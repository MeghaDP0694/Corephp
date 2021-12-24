<?php 
class parents{
	public function __construct(){
		echo "<h1>parent con.</h1>";
	}

	public function getinfo(){

		echo "parent class method";
	}
}
class child extends parents{
	public function __construct(){
		parent:: __construct();
		echo "<h1>child con.</h1>";
	}
	public function showinfo(){
		echo "<br>child class called";
	}
}

$obj=new child();
$obj->getinfo();
$obj->showinfo();



 ?>