<?php
include ('connect.php');

$uname = $_POST['txtUname'];
$pword = $_POST['txtPword'];
$lname = $_POST['txtLname'];
$fname = $_POST['txtFname'];
$mname = $_POST['txtMname'];
$email = $_POST['txtEmail'];
$position = $_POST['drpPosition'];

$sql = "INSERT INTO users_tbl (u_id,u_uname,u_pword,u_lname,u_fname,u_mname,u_email,u_position)
VALUES (null, '$uname', '$pword', '$lname', '$fname', '$mname', '$email', '$position')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
  location.replace("view_users.php")

</script>