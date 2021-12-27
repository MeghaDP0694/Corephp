<?php 
class Model{
	public $connection;

	public function __construct(){
		$this->connection= new mysqli("localhost","root","","product_mgmnt");
	}

	public function select_data($table){
		$query="select * from $table";
		$res=$this->connection->query($query);
		while($row=$res->fetch_object()){
			$rw[]=$row;
		}
		return $rw;
	}
}


 ?>