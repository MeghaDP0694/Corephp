<?php date_default_timezone_set('asia/calcutta') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>
	<?php /*$tp=mktime(0,0,0,12,9,2012)*/ ?>
	<?php echo  date("d-M-Y h:i:s"); ?>
		<br>
		<?php echo  date("N"); ?>
	</h1>
	<h1>date_diff</h1>
<form>
	<input type="date" name="sdate">
	<input type="date" name="edate">
	<input type="submit" name="submit">
</form>	
<?php 
	if(isset($_REQUEST['submit'])){
		$f=date_create($_REQUEST['sdate']);
		$s=date_create($_REQUEST['edate']);
		$diff=date_diff($f,$s);
		echo $diff->format("%R%a days");

	}
 ?>
 <h1>Strtotime</h1>
 <?php 
   $dt=strtotime("2019-09-01");
   echo date("Y-m-d",$dt);
  ?>
</body>
</html>