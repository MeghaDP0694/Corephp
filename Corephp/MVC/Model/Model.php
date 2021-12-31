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
	public function select_where($table,$data){
		$sel="select *  from $table where 1=1";
		foreach ($data as $key => $value) {
			$sel.= " AND ".$key." = '".$value."' ";
		}
		$res=$this->connection->query($sel);
		while($row=$res->fetch_object()){
			$rw[]=$row;
		}
		return $rw;
	}
	public function update_data($table,$data,$where){

		//"update $table set key ='value',key='value' where id=2"

		$up="update $table set";
		$count=count($data);
		$i=0;
		foreach ($data as $key => $value) {
			if($i<$count-1){
				$up.= " ".$key." ='".$value." ', ";
			}
			else{
				$up.= " ".$key." ='".$value." ' ";
			}
			
		$i++;
		}
		$up.=" where 1=1 ";
		foreach ($where as $key => $value) {
			$up.= " AND ".$key." = '".$value."' ";
		}
		$this->connection->query($up);
	}
}


 ?>