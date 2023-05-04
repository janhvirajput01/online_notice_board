<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="style.css"/>
		<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		

	<section class="wrapper">
      <div class="container">
        <div class="logo text-center mb-5"> <a href="index.php" class="text-dark">info<span class="text-primary">Wall</span></a>
          
        </div>

        <h2 class="text-center mb-5">"Stay Connected, Stay Informed !"</h2>
        <h3 class="text-center mb-3">
          Login here <span class="text-primary">as</span>
        </h3>
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <img
                  src="img/images/pngwing.com.png"
                  class="card-img-top"
                  alt="..."
                />
                <a  href="login.php" class="btn btn-primary">Student</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <img
                  src="img/images/admin.png"
                  class="card-img-top"
                  alt="..."
                />
                <a  href="admin/login.php"class="btn btn-primary">Admin</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!-- slider -->


  <!-- Controls -->
  



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


<!-- <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->
