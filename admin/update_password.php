<?php
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";
	}
	else
	{
$sql=mysqli_query($conn,"select * from admin where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{

	$sql=mysqli_query($conn,"update admin set pass='$np' where user='$admin'");

	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

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
<h2><B>UPDATE PASSWORD</B></h2>
<form method="post">

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>



	<div class="row pass_input">
		<div class="col-sm-4">Old Password</div>
		<div class="col-sm-5 ">
		<input type="password" name="op" class="form-control"/></div>
	</div>

	<div class="row pass_input">
		<div class="col-sm-4">New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>

	<div class="row pass_input">
		<div class="col-sm-4">Confirm Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">


		<input type="submit" value="Update Password" name="save" class="btn primary update"/>
		<input type="reset" class="btn btn-danger"/>
		</div>
	</div>
</form>

</body>
</html>
