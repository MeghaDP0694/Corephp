<?php 
//include_once("array.php");
//include_once("array.php");
$name="megha";
echo "<h1>".$name."</h1>";

echo "<br>";
echo md5($name);

  if(isset($_REQUEST['submit'])){
  	header("Content-type:application/pdf");


header("Content-Disposition:attachment;filename=lecture_flow.pdf");

// The PDF source is in original.pdf
readfile("lecture_flow.pdf");
  }

 if(isset($_REQUEST['submitnext'])){
 	header("Location:array.php");
 }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form>
 	<input type="submit" name="submit" value="Download here">
 	<input type="submit" name="submitnext" value="click">
 </form>
 </body>
 </html>