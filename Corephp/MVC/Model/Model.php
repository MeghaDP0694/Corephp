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
	public function insert_data($table,$data){
		//insert into table(col1,col2)values('val1','val2');
		$key=implode(",",array_keys($data));
		$value=implode("','", array_values($data));
		$query="insert into $table($key)value('$value')";
		$this->connection->query($query);
	}

	public function delete_data($table,$data){
		//"delete from table where col=1";
		$del="delete from $table where 1=1";
		foreach ($data as $key => $value) {
			$del.= " AND ".$key." = '".$value."' ";
		}
		echo $del;
		$this->connection->query($del);

	}
}


 ?>