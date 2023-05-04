<?php
include('../connection.php');

// Check if the "id" parameter is set and is a valid integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $nid = $_GET['id'];

  // Use prepared statement to delete the file record with the specified ID
  $stmt = $conn->prepare("DELETE FROM files WHERE id = ?");
  $stmt->bind_param("i", $nid);
  $stmt->execute();

  // Check if the deletion was successful
  if ($stmt->affected_rows > 0) {
    header('location:index.php?page=allnotice');
  } else {
    // Display an error message if the file record was not found or could not be deleted
    echo "Error: Could not delete file record.";
  }

  // Close the prepared statement and database connection
  $stmt->close();
  $conn->close();
} else {
  // Display an error message if the "id" parameter is missing or invalid
  echo "Error: Invalid file ID.";
}
?>
