<?php 
class Product{
	//data member
	private $pid,$pname,$price;

	public function __construct($pid,$pname,$price){
		echo "<h1>Construcytor method called</h1>";
		$this->pid=$pid;
		$this->pname=$pname;
		$this->price=$price;
	}

	public function __destruct(){
		echo "<hr>__destruct ,method called";
	}

	//member function
	public function getProduct(){
		echo "<h1>pid=".$this->pid."</h1>";
		echo "<h1>pname=".$this->pname."</h1>";
		echo "<h1>price=".$this->price."</h1>";
	}

	public function viewProduct(){
		$array=[12,33,45,16,89];
		$even=[];
		$odd=[];
		foreach ($array as $key ) {
			if($key%2==0){
				//array_push($even, $key);
				$even[]=$key;
			}
			else{
				$odd[]=$key;
			}

		}
		echo "<pre>";
			print_r($even);
			print_r($odd);
	}

}

$obj =new Product(123,"laptop",210000);
$obj->getProduct();
echo "<hr>";
$obj->viewProduct();
echo "<hr>";
echo $obj->pid;


 ?>