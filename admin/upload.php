<?php
// connect to the database
include('../connection.php');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
      $err="<font color='red'>You file extension must be .zip, .pdf or .docx</font>";
        // echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        // echo "File too large!";
        $err="<font color='red'>File too large</font>";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
              $err="<font color='green'>File uploaded successfully</font>";
                // echo "File uploaded successfully";
            }
        } else {
          $err="<font color='red'>Failed to upload file.</font>";
            // echo "Failed to upload file.";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      

  
      <div class="row
	">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
        <form method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <input type="submit" value="Upload" name="save" class="btn primary update"/>
          <!-- <a href="index.php?page=upload_notice" class="btn btn-success" name="add"><i class="uil uil-upload"></i>  Upload</a> -->
          <!-- <button type="submit" name="save">upload</button> -->
        </form>
      </div>
    </div>
  </body>
</html>