<!DOCTYPE html>
<html>
<head>
	<title>USERS</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>LAST NAME</th>
			<th>FIRST NAME</th>
			<th>MIDDLE NAME</th>
			<th>BATCH</th>
			<th>GRADE</th>
			<th>PSHS CLUB</th>
			<th>PSHS CLUB POSITION</th>
			<th>DURATION OF MEMBERSHIP</th>
			<th>CLUB OUTSIDE OF PSHS</th>
			<th>OUTSIDE CLUB POSITION</th>
			<th>DURATION OF MEMBERSHIP</th>
			<th>SPORTS</th>
			<th>INSTRUMENTS</th>
			<th>ARTS</th>
			<th>HOBBIES</th>
			<th>INTERESTS</th>
			<th>ACTIVITIES STARTED</th>
			<th>SIGNATURE</th>
			<th>DATE</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scale_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Print out the SQL query and execute it
$sql = "SELECT * FROM studentinfo_tbl";
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
		<tr>
			<td><?php echo $row['u_id']; ?></td>
			<td><?php echo is_array($row['u_lname']) ? implode(', ', $row['u_lname']) : $row['u_lname']; ?></td>
			<td><?php echo is_array($row['u_fname']) ? implode(', ', $row['u_fname']) : $row['u_fname']; ?></td>
			<td><?php echo is_array($row['u_mname']) ? implode(', ', $row['u_mname']) : $row['u_mname']; ?></td>
			<td><?php echo $row['u_batch']; ?></td>
			<td><?php echo $row['u_grade']; ?></td>
			<td><?php echo is_array($row['u_pshsclubs']) ? implode(', ', $row['u_pshsclubs']) : $row['u_pshsclubs']; ?></td>
			<td><?php echo is_array($row['u_pshsclubposs']) ? implode(', ', $row['u_pshsclubposs']) : $row['u_pshsclubposs']; ?></td>
			<td><?php echo $row['u_pshsclublengths']; ?></td>
			<td><?php echo is_array($row['u_outsideclubs']) ? implode(', ', $row['u_outsideclubs']) : $row['u_outsideclubs']; ?></td>
			<td><?php echo is_array($row['u_outsideclubposs']) ? implode(', ', $row['u_outsideclubposs']) : $row['u_outsideclubposs']; ?></td>
			<td><?php echo $row['u_outsideclublengths']; ?></td>
			<td><?php echo is_array($row['u_sports']) ? implode(', ', $row['u_sports']) : $row['u_sports']; ?></td>
			<td><?php echo is_array($row['u_instruments']) ? implode(', ', $row['u_instruments']) : $row['u_instruments']; ?></td>
			<td><?php echo is_array($row['u_arts']) ? implode(', ', $row['u_arts']) : $row['u_arts']; ?></td>
			<td><?php echo is_array($row['u_hobbies']) ? implode(', ', $row['u_hobbies']) : $row['u_hobbies']; ?></td>
			<td><?php echo is_array($row['u_interests']) ? implode(', ', $row['u_interests']) : $row['u_interests']; ?></td>
			<td><?php echo $row['u_activitiesstarted']; ?></td>
			<td><?php echo $row['u_signature']; ?></td>
			<td><?php echo $row['u_date']; ?></td>
			<td><a href="update_users.php?id=<?php echo $row['u_id']; ?>">EDIT</a></td>
			<td><a href="delete_users.php?id=<?php echo $row['u_id']; ?>">DELETE</a></td>
		</tr>
<?php
  }
} else {
  echo "0 results";
}

// Close the connection
$conn->close();
?>
	</table>
	<br>
	<a href="check.php">Add Students</a>
</body>
</html>