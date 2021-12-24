
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(isset($_REQUEST['id'])){
    	$id=$_REQUEST['id'];
    	$query="select * from ccrudd where Id=$id";
    	$res=$connection->query($query);
    	$row=$res->fetch_object();
    	$hb=explode("-", $row->Hobbies);
    	//exit;
    } ?>
<form method="POST" enctype="multipart/form-data">
        <table border="1" cellspacing="0px" cellpadding="10px" align="center">
            <tr>
                <th><label for="firstname"><strong>Firstname</strong></label></th>
                <td><input type="text" name="myfirstname" id="firstname" value="<?php echo $row->Firstname ?? ""?>"></td>
            </tr>
            <tr>
                <th><label for="lastname"><strong>Lastname</strong></label></th>
                <td><input type="text" name="mylastname" id="lastname" value="<?php echo  $row->Lastname ?? ""?>"></td>
            </tr>
            <tr>
                <th><label for="email"><strong>Email</strong></label></th>
                <td><input type="email" name="myemail" id="email" value="<?php echo $row->Email ?? ""?>"></td>
            </tr>
            <tr>
                <th><label for="password"><strong>Password</strong></label></th>
                <td><input type="password" name="mypassword" id="password" value="<?php echo $row->Password ?? ""?>"></td>
            </tr>
            <tr>
                <th><label for="gender"><strong>Gender</strong></label></th>
                <td>

                    Male<input type="radio" name="mygender" id="gender" value="Male" 
                    <?php echo  (isset($row->Gender)&&$row->Gender=="Male")?"checked":""?>

                    >
                    Female<input type="radio" name="mygender" id="gender" value="Female"
                     <?php echo (isset($row->Gender)&&$row->Gender=="Female")?"checked":""?>
                     >
                </td>
            </tr>
            <tr>
                <th><label for="contactno"><strong>Contactno</strong></label></th>
                <td><input type="text" name="mycontactno" id="contactno" value="<?php echo $row->Contactno ?? "" ?>"></td>
            </tr>
            <tr>
                <th><label for="hobbies"><strong>Hobbies</strong></label></th>
                <td>
                    Swimming<input type="checkbox" name="myhobbies[]" id="hobbies" value="Swimming" <?php echo(isset($hb)&&in_array("Swimming", $hb))?"checked":""; ?>
                    >
                    Photography<input type="checkbox" name="myhobbies[]" id="hobbies" value="Photography" <?php echo(isset($hb)&&in_array("Photography", $hb))?"checked":""; ?>>
                    Reading<input type="checkbox" name="myhobbies[]" id="hobbies" value="Reading" <?php echo(isset($hb)&&in_array("Reading", $hb))?"checked":""; ?> >
                </td>
            </tr>
            <tr>
                <th><label for="location"><strong>City</strong></label></th>
                <td>
                    <select name="mylocation" id="location">
                       <?php 
                       while($rowcity=$rescity->fetch_object()){
                       	?>
                       	<option value="<?php echo $rowcity->cid?>"

                       		<?php echo (isset($row->Location)&&($row->Location==$rowcity->cid))?"selected":"" ?>

                       		><?php echo $rowcity->cname ?></option>
                       	<?php
                       }
                        ?> 
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="image"><strong>Image</strong></label></th>
                <td>
                	<?php 
                	if(isset($row->Image)){
                		?>
                		<img height="100px" width="100px" src="images/<?php echo $row->Image ?>">
                		<?php
                		}
                	 ?>
                	
                    <input type="file" name="myimage" id="image">
                    
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="<?php echo  isset($_REQUEST['id'])?"update":"submit"?>" id="submit" value="<?php echo  isset($_REQUEST['id'])?"update":"submit"?>">

                </td>
            </tr>
        </table>
    </form>
    <?php 
    if(isset($_POST['update'])&&isset($_REQUEST['id'])){
    	$fname=$_POST['myfirstname'];
    	$lname=$_POST['mylastname'];
    	$email=$_POST['myemail'];
    	$password=$_POST['mypassword'];
    	$gender=$_POST['mygender'];
    	$contactno=$_POST['mycontactno'];
    	$hobby=implode("-",$_POST['myhobbies']);
    	$city=$_POST['mylocation'];
    	if(isset($_FILES['myimage']['name'])&&$_FILES['myimage']['name']!=""){
    	$filename=$_FILES['myimage']['name'];
    	$temp=$_FILES['myimage']['tmp_name'];
    	move_uploaded_file($temp, "images/".$filename);
    	}
    	else{
    		$filename=$row->Image;
    	}
    	echo $upquery="update ccrudd set Firstname='$fname',Lastname='$lname',Email='$email',Gender='$gender',Password='$password',Contactno='$contactno',Hobbies='$hobby',Location='$city',Image='$filename' where Id= $id";
    	$connection->query($upquery);
    	header("Location:Viewstudent.php");
    }	
    if(isset($_POST['submit'])){
    	$fname=$_POST['myfirstname'];
    	$lname=$_POST['mylastname'];
    	$email=$_POST['myemail'];
    	$password=$_POST['mypassword'];
    	$gender=$_POST['mygender'];
    	$contactno=$_POST['mycontactno'];
    	$hobby=implode("-",$_POST['myhobbies']);
    	$city=$_POST['mylocation'];
    	$filename=$_FILES['myimage']['name'];
    	$temp=$_FILES['myimage']['tmp_name'];
    	move_uploaded_file($temp, "images/".$filename);

    	

    	$query="insert into ccrudd(Firstname,Lastname,Email,Password,Gender,Contactno,Hobbies,Location,Image)values('$fname','$lname','$email','$password','$gender','$contactno','$hobby','$city','$filename')";
    	$connection->query($query);
    	


    }

     ?>
</body>
</html>