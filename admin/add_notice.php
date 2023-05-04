<?php 

extract($_POST);
if(isset($add))
{
	if($details=="" || $sub=="" || $department==""||$year=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{


	
		// Insert options into notice table
	
		mysqli_query($conn,"insert into notice values('','$sub','$details',now(),'$department', '$year')");
	

	
		
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
	
	

	<div class="row">
		<div class="col-sm-4">Select department</div>
		<div class="col-sm-5">
		<select name="department" id="department"style="margin:8px" >
    <option value="CSE">CSE</option>
    <option value="EEE">EEE</option>
    <option value="CE">CE</option>
    <option value="ME">ME</option>
  </select>
		
		</div>
	</div>	
	
	
	<div class="row
	">
		<div class="col-sm-4">Select year</div>
		<div class="col-sm-5">
		<select name="year" id="year">
    <option value="1">1st Year</option>
    <option value="2">2nd Year</option>
    <option value="3">3rd Year</option>
    <option value="4">4th Year</option>
  </select>
		</div>
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
		<input type="reset" class="btn btn-danger"/>    <span class="text-center text-muted text-uppercase" >or</span>
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