<?php
extract($_POST);
if(isset($update))
{
//dob
// $dob=$yy."-".$mm."-".$dd;
//hobbies
// $hob=implode(",",$hob);

$query="update user set name='$n',gender='$gen' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../dashboard/style.css">
</head>
<body>
	
<h2 align="center"><B>UPDATE YOUR PROFILE</B></h2>

<form method="post">
	<table class="table table-bordered">
<Tr>
<Td colspan="2"><?php echo @$err;?></Td>
</Tr>

		<tr>
			<td>Enter Your name</td>
			<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
		</tr>
		<tr>
			<td>Enter Your email </td>
			<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
		</tr>




		<tr>
			<td>Select Your Gender</td>
			<Td>
		Male<input type="radio" <?php if($res['gender']=="m"){echo "checked";} ?> name="gen" value="m"/>
		Female<input type="radio" <?php if($res['gender']=="f"){echo "checked";} ?> name="gen" value="f"/>
			</td>
		</tr>




		<tr>


<Td colspan="2" align="center">
<input type="submit" class="btn primary update" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-danger " value="Reset"/>

			</td>
		</tr>
	</table>
</form>

</body>
</html>