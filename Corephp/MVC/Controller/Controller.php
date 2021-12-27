<?php 
include('../Model/Model.php');
class Controller extends Model{
	public $baseurl;
	public function __construct(){
		parent::__construct();
		$this->baseurl=dirname($_SERVER['REQUEST_URI']);

	}
	public function index()
	{
		echo "<h1 align='center'>Welcome to app</h1>";
	}
	public function getUser(){
		$user=$this->select_data('ccrudd');
		include('../View/viewstudent.php');
	}
	public function getCity(){
		$city=$this->select_data('city');
		include('../View/viewcity.php');
	}
	public function getProduct(){
		$product=$this->select_data('product');
		include('../View/viewproduct.php');
	}
}




$obj= new Controller();
if(isset($_SERVER['PATH_INFO'])){
	$path=$_SERVER['PATH_INFO'];
    
	
	switch($path){
		case '/':
		$obj->index();
		break;
		case '/user':
		$obj->getUser();
		break;
		case '/city':
		$obj->getCity();
		break;
		case '/product':
		$obj->getProduct();
		break;

	}
	
}
 ?>

 