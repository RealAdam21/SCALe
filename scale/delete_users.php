<?php
include ('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM users_tbl WHERE u_id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
  location.replace("view_users.php")

</script>
