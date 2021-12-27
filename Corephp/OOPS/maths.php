<?php 
include('traitex.php');
include('multi.php');
class Maths{
	use Mathsmethod;
	use Multi;
	public function __construct(){
		$ans=$this->addition(100,300);
		echo $ans;
		$mul=$this->multiplication(12,3);
		echo "<br>mulit=".$mul;
	}
}

$obj=new Maths();


 ?>