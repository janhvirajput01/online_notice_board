<!-- <script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="deleteFiles.php?id="+id;
		}
	}
</script> -->

<?php 
include 'filesLogic.php';
$q=mysqli_query($conn,"select * from files ");
?>
<h1 style="color:#000">All Notice</h1>
<!-- <a href="index.php?page=upload_notice" class="btn btn-success" name="add" style="width: 200px; height:35px"><i class="uil uil-upload"></i>  Upload New Notice</a> -->



<table class="table table-bordered">
 

	<Tr class="primary">
  <th>ID</th>
    <th>Filename</th>
    <!-- <th>Date</th> -->
    <th>size (in mb)</th>

    <th>Action</th>
		<!-- <th>Delete</th> -->
	
	</Tr>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
  
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
    
      <td><a href="allnotice.php?file_id=<?php echo $file['id'] ?>">Download</a></td>

    </tr>
    
  <?php endforeach;?>

</table>








