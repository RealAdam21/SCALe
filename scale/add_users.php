<html>
<head>
	<title></title>
</head>
<body>
<form action="add_users_process.php" method="POST">
	<table border='1'>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="txtUname"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="txtPword"></td>
		</tr>
		<tr>
			<td>RETYPE PASSWORD</td>
			<td><input type="text" name="txtRpword"></td>
		</tr>
		<tr>
			<td>LASTNAME</td>
			<td><input type="text" name="txtLname"></td>
		</tr>
		<tr>
			<td>FIRSTNAME</td>
			<td><input type="text" name="txtFname"></td>
		</tr>
		<tr>
			<td>MIDDLENAME</td>
			<td><input type="text" name="txtMname"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="text" name="txtEmail"></td>
		</tr>
		<tr>
			<td>POSITION</td>
			<td><select name="drpPosition">
				  <option value="Coordinator">Coordinator</option>
				  <option value="Adviser">Adviser</option>
				  <option value="Student">Student</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><a href="view_users.php"><input type="button" value="BACK"></a></td>
			<td><input type="SUBMIT"></td>
		</tr>
	</table>


</body>
</html>