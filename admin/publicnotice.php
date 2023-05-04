<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from publicnotice ");

?>
<h1 style="color:#000">All Notice</h1>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_publicnotice">Add New notice</a></th>
	</tr>
	<Tr class="primary">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
	
		<!-- <th>Year</th> -->
		<!-- <th>Department</th> -->
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
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

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
