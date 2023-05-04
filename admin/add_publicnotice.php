<?php 

extract($_POST);
if(isset($add))
{
	if($details=="" || $sub=="" )
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{


	
		// Insert options into notice table
	
		mysqli_query($conn,"insert into publicnotice values('','$sub','$details',now())");
	

	
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
	
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>addNotice</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../dashboard/style.css">
</head>
<body>
	
<h1>Add New Notice</h1>


<form method="post">
	<div class="form-container">
	<div class="row
	">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row
	" style="margin-left:1.3rem">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row
	" style="margin:10px 0 0 2.5rem	">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row
	" >
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	


	<!-- <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file">

</form> -->

	<div class="row
	" style="margin:10px 0 0 1rem	">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	

	


	
	
	<div class="row	
	" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row
		" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn primary update"/>
		or</span>
		<a href="index.php?page=upload_notice" class="btn btn-success" name="add"><i class="uil uil-upload"></i>  Upload</a>
		<!-- <button type="submit" value="Upload Notice"  name="upload" class="btn btn-success ">	</button> -->
</div>

		
		
		<!-- <input type="submit" name="submit" value="Upload" class="btn primary update"> -->
		
		</div>
		
		
           
      
	</div>
	
	</div>
	
</form>	


			
</body>
</html>