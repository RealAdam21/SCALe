<?php
include ('connect.php');

$sql = "SELECT * FROM proposalform_tbl";
$result = $conn->query($sql);

?>

<html>
<head>
	    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background-color: #fff;
            border-radius: 5px;
            margin-top: 50px;
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #005caa;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        input[type="text"], select {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"], input[type="button"] {
            background-color: #005caa;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #003d74;
        }

        a {
            color: #005caa;
            text-decoration: none;
            border: 1px solid #005caa;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-right: 10px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #005caa;
            color: #fff;
        }

        a.add-btn {
            float: right;
            margin-top: 0;
        }

        @media (max-width: 600px) {
            table, thead, tbody, th, td, form {
                display: block;
                width: 100%;
            }

            td, th {
                padding: 10px;
            }

            input[type="text"], select {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
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
			<td>NAME</td>
			<td>ADVISER</td>
			<td>SUBMISSION DATE</td>
			<td>ACTIVITY TITLE</td>
			<td>STRAND</td>
			<td>TYPE</td>
			<td>START DATE</td>
			<td>END DATE</td>	
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
			<td><?php echo $row['u_name']; ?></td>
			<td><?php echo $row['u_adviser']; ?></td>
			<td><?php echo $row['u_submissiondate']; ?></td>
			<td><?php echo $row['u_activitytitle']; ?></td> <!-- Corrected column name -->
		    <td><?php echo $row['u_strand']; ?></td>
			<td><?php echo $row['u_type']; ?></td>
			<td><?php echo $row['u_startdate']; ?></td>
			<td><?php echo $row['u_enddate']; ?></td>

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
			<td><a href="form2.php"><input type="button" value="ADD"></a></td>
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