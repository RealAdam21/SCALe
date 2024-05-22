<?php
session_start();
include 'connect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM users_tbl WHERE u_id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<html>
<head>



</head>
<?php include 'links.php'; ?>
<body>
<h2><?php echo $row['u_lname'] . " " . $row['u_fname'] . " " . $row['u_mname']; ?></h2>
	<form action="assign_user_proc.php" method="post">
		<table border="1">
			<tr>
				<td><input type="hidden" name="txtId" value="<?php echo $id; ?>">Batch:</td>
				<td>
					<select name="drpBatch">
					  <option value="n/a">N/A</option>
					  <option value="2024">2024</option>
					  <option value="2025">2025</option>
					  <option value="2026">2026</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Grade:</td>
				<td>
					<select name="drpGrade">
					  <option value="n/a">N/A</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Section:</td>
				<td>
					<select name="drpSection">
					  <option value="n/a">N/A</option>
					  <option value="Curie A">Curie A</option>
					  <option value="Curie B">Curie B</option>
					  <option value="Darwin A">Darwin A</option>
					  <option value="Darwin B">Darwin B</option>
					  <option value="Einstein A">Einstein A</option>
					  <option value="Einstein B">Einstein B</option>
					  <option value="Pascal A">Pascal A</option>
					  <option value="Pascal B">Pascal B</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></td>
				
			</tr>
			</table>
	</form>
</body>
</html>