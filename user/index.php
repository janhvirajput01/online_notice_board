<?php 
session_start();
include('../connection.php');
$user = $_SESSION['user'];

// Fetch the department name of the user from the user table
$sql = mysqli_query($conn, "SELECT DEPARTMENT_NAME FROM user WHERE email = '$user'");
$user_row = mysqli_fetch_assoc($sql);
$user_department = $user_row['DEPARTMENT_NAME'];

// Store the user department in a session variable
$_SESSION['user_department'] = $user_department;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>Online Notice Board User Dashboard</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard/style.css" rel="stylesheet">
    <!-- <link href="../css/dashboard.css" rel="stylesheet"> -->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="sidebar-container">
      <div class="navigation" >
        <ul>
          <li class="logo">
            <a href="../index.php">
            <span class="icon">
                
              </span>
              <span class="title">info<span class="text-primary">Wall</span></span>
            </a>
          </li>

          <li>
            <a href="index.php">
              <span class="icon">
                <i class="uil uil-estate"></i>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=allnotice">
              <span class="icon">
              <i class="uil uil-folder"></i>
              </span>
              <span class="title">All Files</span>
            </a>
          </li>

          <li>
            <a href="index.php?page=notification">
              <span class="icon">
                <i class="uil uil-comment"></i>
              </span>
              <span class="title">Notification</span>
            </a>
          </li>
          <li>
            <a  href="index.php?page=update_profile">
              <span class="icon">
                <i class="uil uil-user"></i>
              </span>
              <span class="title">Update Profile</span>
            </a>
          </li>

          <li>
            <a href="index.php?page=update_password">
              <span class="icon">
                <i class="uil uil-lock"></i>
              </span>
              <span class="title">Update password</span>
            </a>
          </li>
         

          <li>
            <a href="logout.php">
              <span class="icon">
                <i class="uil uil-signout"></i>
              </span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- content -->
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <i class="uil uil-bars" ></i>
          </div>


          <div class="button">
         <a href="logout.php" class="btn btn-danger">Sign Out <i class="uil uil-signout"></i>
            </a>
        </div>
        </div>

        <!-- ======================= Cards ================== -->
        <div style="padding:2.5rem">
        <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
      if($page=="allnotice")
			{
				include('allnotice.php');
			
			}
			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			
		  }
		  else
		  {
		  include('notification.php');
		  ?>
		  <!-- container end-->
		   
		  
		  
		  
		  
<?php } ?>
        </div>
      </div>
    </div>

          


    <script src="../dashboard/app.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
