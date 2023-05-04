<?php
	include('../connection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
		$que=mysqli_query($conn,"select * from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['admin']=$email;
				header('location:index.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>



<!DOCTYPE html>

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
    <link rel="stylesheet" href="../style.css" />

    <title>Login</title>
  </head>
  <body>
    <section class="wrapper">
      <div class="container-fluid">
        <div
          class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center"
        >
          <div class="logo"><a href="../index.php" class="text-dark">info<span class="text-primary">Wall</span></a></div>
          <form action="" method="post" class="rounded bg-white shadow p-5">
            <h3 class="text-dark fw-bolder fs-4 mb-2">Log In</h3>
           
						<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
            <div class="form-floating mb-3">

              <input
                type="email" name="email" 
                class="form-control"
                id="floatingInput"
                placeholder="Email Address"  required
              />
              <!-- <label for="floatingInput">Email address</label> -->
            </div>
            <div class="form-floating">
              <input
                type="password" name="pass"
                class="form-control"
                id="floatingPassword"  
                placeholder="Password"  required
              />
              <!-- <label for="floatingPassword">Password</label> -->
            </div>


            <button
              type="submit" value="Login" name="login"
              class="btn btn-primary submit_btn w-100 my-4 font-weight-bold"
            >
              Sign in
            </button>
            <div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
</div>
            <!-- <div class="text-center text-muted text-uppercase">or</div>
            <a href="#" class="btn btn-light login_with w-100 mb-3">
              <img
                src="img/images/google-icon.svg"
                alt=""
                class="img-fluid me-3"
              />Continue with Google
            </a> --> 
          </form>
        </div>
      </div>
    </section>
		
    <!-- Optional Jav
		aScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


