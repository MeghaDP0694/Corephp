<?php 
include('../connection.php');
$query="select * from city";
$res=$connection->query($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
        <table border="1" cellspacing="0px" cellpadding="10px" align="center">
            <tr>
                <th><label for="firstname"><strong>Firstname</strong></label></th>
                <td><input type="text" name="myfirstname" id="firstname" value=""></td>
            </tr>
            <tr>
                <th><label for="lastname"><strong>Lastname</strong></label></th>
                <td><input type="text" name="mylastname" id="lastname" value=""></td>
            </tr>
            <tr>
                <th><label for="email"><strong>Email</strong></label></th>
                <td><input type="email" name="myemail" id="email" value=""></td>
            </tr>
            <tr>
                <th><label for="password"><strong>Password</strong></label></th>
                <td><input type="password" name="mypassword" id="password" value=""></td>
            </tr>
            <tr>
                <th><label for="gender"><strong>Gender</strong></label></th>
                <td>
                    Male<input type="radio" name="mygender" id="gender" value="Male" >
                    Female<input type="radio" name="mygender" id="gender" value="Female" >
                </td>
            </tr>
            <tr>
                <th><label for="contactno"><strong>Contactno</strong></label></th>
                <td><input type="text" name="mycontactno" id="contactno" value=""></td>
            </tr>
            <tr>
                <th><label for="hobbies"><strong>Hobbies</strong></label></th>
                <td>
                    Swimming<input type="checkbox" name="myhobbies[]" id="hobbies" value="Swimming" >
                    Photography<input type="checkbox" name="myhobbies[]" id="hobbies" value="Photography" >
                    Reading<input type="checkbox" name="myhobbies[]" id="hobbies" value="Reading" >
                </td>
            </tr>
            <tr>
                <th><label for="location"><strong>City</strong></label></th>
                <td>
                    <select name="mylocation" id="location">
                       <?php 
                       while($row=$res->fetch_object()){
                       	?>
                       	<option value="<?php echo $row->cid?>"><?php echo $row->cname ?></option>
                       	<?php
                       }
                        ?> 
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="image"><strong>Image</strong></label></th>
                <td>
                    <input type="file" name="myimage" id="image">
                    
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" id="submit" value="submit">

                </td>
            </tr>
        </table>
    </form>
    <?php 
    if(isset($_POST['submit'])){
    	$fname=$_POST['myfirstname'];
    	$lname=$_POST['mylastname'];
    	$email=$_POST['myemail'];
    	$password=$_POST['mypassword'];
    	$gender=$_POST['mygender'];
    	$contactno=$_POST['mycontactno'];
    	$hobby=implode("-",$_POST['myhobbies']);
    	$city=$_POST['mylocation'];

    	echo $query="insert into ccrudd(Firstname,Lastname,Email,Password,Gender,Contactno,Hobbies,Location,Image)values('$fname','$lname','$email','$password','$gender','$contactno','$hobby','$city','')";
    	$connection->query($query);


    }

     ?>
</body>
</html>