<?php

include('../connection.php');

// Fetch the notices based on the user department
$user_department = $_SESSION['user_department'];
$q = mysqli_query($conn, "SELECT * FROM notice WHERE DEPARTMENT_NAME = '$user_department'");
$q2 = mysqli_query($conn, "SELECT * FROM publicnotice");
$rr=mysqli_num_rows($q);
$rr2 = mysqli_num_rows($q2);
if(!$rr &&!$rr2)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../dashboard/style.css" rel="stylesheet">
</head>
<body>
<h2>All Notification</h2>

<table class="table table-bordered shadow">
	<Tr class="primary rounded shadow">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<!-- <th>Files</th> -->
		<th>Date</th>
		</Tr>
		<?php


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
// echo "<td>".$row['image']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}

while ($row2 = mysqli_fetch_assoc($q2)) {

	echo "<tr>";
	echo "<td>" . $i . "</td>";
	echo "<td>" . $row2['subject'] . "</td>";
	echo "<td>" . $row2['Description'] . "</td>";
	echo "<td>" . $row2['Date'] . "</td>";
	echo "</tr>";

	$i++;
}
		?>

</table>
<?php }?>

</body>
</html>
