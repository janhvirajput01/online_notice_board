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

    <title>Online Notice Board Admin Dashboard</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
          ['Total Class',     4],
          ['Total Students',      8],
          ['Total Class Notice',  18],
          ['Total File Notice', 7]
        ]);

        var options = {
          title: 'Report Summary'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    
<div class="cardBox">
  <div class="card card-1">
                    <div >
                        <div class="numbers">
                        <?php
// Establish a database connection

// Check for errors in the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the SQL query to get the total notice count
$sql = "SELECT COUNT(*) AS total_notices FROM notice";
$result = mysqli_query($conn, $sql);

// Check for errors in the SQL query execution
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Fetch the total notice count from the query result
$row = mysqli_fetch_assoc($result);
$total_notices = $row['total_notices'];

// Display the total notice count in the HTML output
echo '<div class="numbers">' . $total_notices . '</div>';

?>

                        </div>
                     <div class="cardName">Total notice</div></a> 
                    </div>

                    <div class="iconBx">
                    <i class="uil uil-file"></i>
                    </div>
                </div>
                <div class="card card-4">
                    <div>
                        <div class="numbers">
                        <?php
                        $sql = "SELECT COUNT(*) AS total_notice FROM publicnotice";
                        $result = mysqli_query($conn, $sql);
                        
                        // Check for errors in the SQL query execution
                        if (!$result) {
                            die("Error: " . mysqli_error($conn));
                        }
                        
                        // Fetch the total notice count from the query result
                        $row = mysqli_fetch_assoc($result);
                        $total_notice = $row['total_notice'];
                        
                        // Display the total notice count in the HTML output
                        echo '<div class="numbers">' . $total_notice . '</div>';
                        ?>
                        </div>
                        <div class="cardName">Total Public notice</div>
                    </div>

                    <div class="iconBx">
                    <i class="uil uil-file"></i>
                    </div>
                </div>
                
                <div class="card card-2">
                    <div>
                        <div class="numbers">
                        <?php
                        $sql = "SELECT COUNT(*) AS total_stu FROM user";
                        $result = mysqli_query($conn, $sql);
                        
                        // Check for errors in the SQL query execution
                        if (!$result) {
                            die("Error: " . mysqli_error($conn));
                        }
                        
                        // Fetch the total notice count from the query result
                        $row = mysqli_fetch_assoc($result);
                        $total_stu = $row['total_stu'];
                        
                        // Display the total notice count in the HTML output
                        echo '<div class="numbers">' . $total_stu . '</div>';
                        ?>
                        </div>
                        <div class="cardName">Total Students</div>
                    </div>

                    <div class="iconBx">
                    <i class="uil uil-user"></i>
                    </div>
                </div>
                <div class="card card-3">
                    <div>
                        <div class="numbers">
                        <?php
                        $sql = "SELECT COUNT(*) AS total_files FROM files";
                        $result = mysqli_query($conn, $sql);
                        
                        // Check for errors in the SQL query execution
                        if (!$result) {
                            die("Error: " . mysqli_error($conn));
                        }
                        
                        // Fetch the total notice count from the query result
                        $row = mysqli_fetch_assoc($result);
                        $total_files = $row['total_files'];
                        
                        // Display the total notice count in the HTML output
                        echo '<div class="numbers">' . $total_files . '</div>';
                        ?>
                        </div>
                        <div class="cardName">Total Files</div>
                    </div>

                    <div class="iconBx">
                    <i class="uil uil-file"></i>
                    </div>
                </div>

            
            </div>
            <div id="piechart" style="width: 700px; height: 500px;"></div>
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
