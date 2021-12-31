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
	public function addProduct(){
		include('../View/addprodutc.php');
		if(isset($_REQUEST['submit'])){
		   $pname=$_REQUEST['pname'];
		   $price=$_REQUEST['price'];
		   $qty=$_REQUEST['quantity'];
		   $descs=$_REQUEST['desc'];
		   $insertarray=["pname"=>$pname,"price"=>$price,"qty"=>$qty,"desciption"=>$descs];
		   $this->insert_data("product",$insertarray);
		   header("Location:".$this->baseurl."/product");
		}
	}
	public function addCity(){
		$table="city";
		$cityarray=['cid'=>4];
		$this->delete_data($table,$cityarray);
	}
	public function deleteproduct(){
		if(isset($_REQUEST['id'])){
			echo $id=$_REQUEST['id'];
			$array=['pid'=>$id];
			$this->delete_data("product",$array);
			header("Location:".$this->baseurl."/product");
		}
	}
	public function editProduct(){
		if(isset($_REQUEST['id'])){
			$id=$_REQUEST['id'];
			$data=$this->select_where("product",['pid'=>$id]);
			$data=$data[0];
			/*echo "<pre>";
			print_r($data[0]);*/
			include("../View/addprodutc.php");
			if(isset($_REQUEST['submit'])){
		   $pname=$_REQUEST['pname'];
		   $price=$_REQUEST['price'];
		   $qty=$_REQUEST['quantity'];
		   $descs=$_REQUEST['desc'];
		   $updatearray=["pname"=>$pname,"price"=>$price,"qty"=>$qty,"desciption"=>$descs];
		   $this->update_data("product",$updatearray,['pid'=>$id]);
		   header("Location:".$this->baseurl."/product");
		}
		}
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
		case '/addproduct':
		$obj->addProduct();
		break;
		case '/addcity':
		$obj->addCity();
		break;
		case '/delproduct':
		$obj->deleteproduct();
		break;
		case '/editproduct':
		$obj->editProduct();
		break;


	}
	
}
 ?>

 