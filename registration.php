<?php
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
// $dob=$yy."-".$mm."-".$dd;

//hobbies
// $hob=implode(",",$hob);

//image
// $imageName=$_FILES['img6']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$gen','$dp','$sem',now())";
mysqli_query($conn,$query);

// upload image

// mkdir("images/$e");
// move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />

    <title>register</title>
  </head>
  <body>
  <section class="wrapper">


  <div class="container reg ">
  <div class="logo text-center mb-3"><a href="index.php" class="text-dark">info<span class="text-primary">Wall</span></a> </div>
    <div class="register rounded bg-white shadow p-5">
  
  <h3 class="text-dark fw-bolder fs-4 mb-2 text-center">Create an account</h3>
            <div class="fw-normal text-muted mb-4 text-center">
              Already have an account?
              <a
                href="login.php"
                class="text-primary font-weight-bold text-decoration-none"
                >Sign in here
              </a>
            </div>
  <form method="post" enctype="multipart/form-data ">
			<table class="table">
       
	<Tr> 
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>

				<tr>
					<td>Your Name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Your Email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>

				<tr>
					<td>Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>

				<td>Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>
					</td>
				</tr>


        <td>Year</td>
					<Td>
          <select class="form-control" name="sem"required>
  <option>Select</option>
  <option  name="1st" value="1st">1st</option>
  <option  name="2d" value="2nd">2nd</option>
  <option  name="3rd" value="3rd">3rd</option>
  <option  name="4th" value="4th">4th</option>
</select>
					</td>
        </tr>

        <td>Department</td>
					<td>
          <select class="form-control" name="dp"required>
  <option>Select</option>
  <option name="CSE"  value="CSE">CSE</option>
  <option  name="EEE" value="EEE">EEE</option>
  <option name="CE"  value="CE">CE</option>
    <option name="ME"  value="ME">ME</option>
</select>
					</td>
				</tr>
       
       

	


				<tr>


<Td colspan="2" align="center">
<button
              type="submit"  value="Save" name="save"
              class="btn btn-primary w-40 my-2 mr-2 font-weight-bold"
            >
              Sign in
            </button>
            <button
              type="reset"  value="Reset" 
              class="btn btn-danger w-40 my-3 font-weight-bold"
            >Reset
            </button>
<!-- <input type="submit" class="btn btn-primary" /> -->
<!-- <input type="reset" class="btn btn-danger" value="Reset"/> -->

					</td>
				</tr>
			</table>
		</form>
    </div>
  </div>
	</body>
  </section>

</html>
