<?php
include ('connect.php');

$sql = "SELECT * FROM students_tbl";
$result = $conn->query($sql);

?>

<html>
<head>
	<title></title>
</head>
<body>
<form action ="search_users.php" method="POST">
<table border="1">
	<tr>
		<td>
		<select name="drpField">
			<option value="u_id">ID</option>
			<option value="u_lname">Lastname</option>
			<option value="u_fname">Firstname</option>
			<option value="u_mname">Middlename</option>
			<option value="u_batch">Batch</option>
		</select>
		</td>
		<td><input type="text" name="txtSearch"></td>
		<td><input type="submit"></td>
	</tr>
</table>
</form>
	<table border='1'>
		<tr>
			<td>ID</td>
			<td>LASTNAME</td>
			<td>FIRSTNAME</td>
			<td>MIDDLENAME</td>
			<td>BATCH</td>
			<td>GRADE</td>
			<td>PSHSCLUB1</td>
			<td>PSHSCLUBPOSITION1</td>
			<td>PSHSCLUBMEMBERSHIPLENGTH1</td>
			<td>PSHSCLUB2</td>
			<td>PSHSCLUBPOSITION2</td>
			<td>PSHSCLUBMEMBERSHIPLENGTH2</td>
			<td>PSHSCLUB3</td>
			<td>PSHSCLUBPOSITION3</td>
			<td>PSHSCLUBMEMBERSHIPLENGTH3</td>
			<td>OUTSIDECLUB1</td>
			<td>OUTSIDECLUBPOSITION1</td>
			<td>OUTSIDECLUBMEMBERSHIPLENGTH1</td>
			<td>OUTSIDECLUB2</td>
			<td>OUTSIDECLUBPOSITION2</td>
			<td>OUTSIDECLUBMEMBERSHIPLENGTH2</td>
			<td>OUTSIDECLUB1</td>
			<td>OUTSIDECLUBPOSITION1</td>
			<td>OUTSIDECLUBMEMBERSHIPLENGTH3</td>
			<td>SPORTS</td>
			<td>INSTRUMENTS</td>
			<td>ARTS</td>
			<td>HOBBIES</td>
			<td>INTERESTS</td>
			<td>ACTIVITIESSTARTED</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
		<tr>
			<td><?php echo $row['u_id']; ?></td>
			<td><?php echo $row['u_lname']; ?></td>
			<td><?php echo $row['u_fname']; ?></td>
			<td><?php echo $row['u_mname']; ?></td>
			<td><?php echo $row['u_batch']; ?></td>
			<td><?php echo $row['u_grade']; ?></td>
			<td><?php echo $row['u_pshsclub1']; ?></td>
			<td><?php echo $row['u_pshsclubpos1']; ?></td>
			<td><?php echo $row['u_pshsclublength1']; ?></td>
			<td><?php echo $row['u_pshsclub2']; ?></td>
			<td><?php echo $row['u_pshsclubpos2']; ?></td>
			<td><?php echo $row['u_pshsclublength2']; ?></td>
			<td><?php echo $row['u_pshsclub3']; ?></td>
			<td><?php echo $row['u_pshsclubpos3']; ?></td>
			<td><?php echo $row['u_pshsclublength3']; ?></td>
			<td><?php echo $row['u_outclub1']; ?></td>
			<td><?php echo $row['u_outclubpos1']; ?></td>
			<td><?php echo $row['u_outclublength1']; ?></td>
			<td><?php echo $row['u_outclub2']; ?></td>
			<td><?php echo $row['u_outclubpos2']; ?></td>
			<td><?php echo $row['u_outclublength2']; ?></td>
			<td><?php echo $row['u_outclub3']; ?></td>
			<td><?php echo $row['u_outclubpos3']; ?></td>
			<td><?php echo $row['u_outclublength3']; ?></td>
			<td><?php echo $row['u_sports']; ?></td>
			<td><?php echo $row['u_instruments']; ?></td>
			<td><?php echo $row['u_arts']; ?></td>
			<td><?php echo $row['u_hobbies']; ?></td>
			<td><?php echo $row['u_interest']; ?></td>
			<td><?php echo $row['u_activitiesstarted']; ?></td>
			<td><a href="update_users.php?id=<?php echo $row['u_id']; ?>">EDIT</a></td>
			<td><a href="delete_users.php?id=<?php echo $row['u_id']; ?>">DELETE</a></td>
		</tr>
<?php

}
} else {
  echo "0 results";
}
?>		

		<tr>
			<td><a href="add_students_info.php"><input type="button" value="ADD"></a></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>


</body>
</html>