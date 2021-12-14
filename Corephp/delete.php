<?php 
include('connection.php');
if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	$del="delete from product where pid='$id'";
	$connection->query($del);
	header("Location:Viewproduct.php");
}


 ?>