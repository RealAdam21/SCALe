<?php
session_start();
?>

<html>

<head>



</head>
<body>
<?php include 'links.php'; ?>
<form action="insert_user_proc.php" method="POST">
	<table border="1">
		<tr>
			<td>LNAME</td>
			<td><input type="text" name="txtLname"></td>
		</tr>

		<tr>
			<td>FNAME</td>
			<td><input type="text" name="txtFname"></td>
		</tr>
		<tr>
			<td>MNAME</td>
			<td><input type="text" name="txtMname"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="text" name="txtEmail"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="txtPword"></td>
		</tr>
		<tr>
			<td>LEVEL</td>
			<td>
				<select name="drpLevel">
				  <option value="1">SCALE Coordinator</option>
				  <option value="2">SCALE Adviser</option>
				  <option value="3">Students</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><input type="submit"></td>
			<td><a href="view_form.php"><input type="button" value="BACK"></td>
		</tr>
	</table>
</form>
</body>
</html>