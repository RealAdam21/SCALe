<html>
<head>



</head>
<body>
<?php include 'links.php'; ?>
<form action="insert_inclub_proc.php" method="POST">
	<table border="1">
		<tr>
			<td>CLUB NAME:</td>
			<td><input type="text" name="txtCname"></td>
		</tr>

		<tr>
			<td>POSITION:</td>
			<td><input type="text" name="txtPosition"></td>
		</tr>
		<tr>
			<td>LENGTH OF MEMBERSHIP</td>
			<td><input type="text" name="txtMembership"></td>
		</tr>
		
		
		<tr>
			<td><input type="submit"></td>
			<td><a href="view_form1.php"><input type="button" value="BACK"></td>
		</tr>
	</table>
</form>
</body>
</html>