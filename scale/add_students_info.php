<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        form {
            background-color: white;
            border: 1px solid #005caa;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            margin-top: 50px;
            height: 600px;
            overflow: auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            table-layout: fixed;
        }
        td, th {
            border: 1px solid #005caa;
            padding: 10px;
            text-align: left;
            word-wrap: break-word;
        }
        th {
            background-color: #005caa;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #005caa;
            margin-bottom: 10px;
        }
        input[type="button"], input[type="submit"] {
            background-color: #005caa;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="button"]:hover, input[type="submit"]:hover {
            background-color: #003d74;
        }
        a {
            color: #005caa;
            text-decoration: none;
            border: 1px solid #005caa;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            margin-right: 10px;
            margin-top: 10px;
        }
        a:hover {
            background-color: #005caa;
            color: white;
        }
		img {
            display: block;
            margin: 0 auto;
            max-width: 100%; /* Make the image responsive */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px; /* Added some margin at the bottom */
        }
    </style>
</head>
<body>
<form action="add_students_info_process.php" method="POST">
    <img src="https://khub.clc.pshs.edu.ph/pluginfile.php/1/theme_moove/logo/1705109989/moodle-lg.png" alt="PSHS Logo" style="display: block; margin: 0 auto; width: 200px;">
    <table>
        		<tr>
			<th>LASTNAME</th>
			<td><input type="text" name="txtLname"></td>
		</tr>
		<tr>
			<th>FIRSTNAME</th>
			<td><input type="text" name="txtFname"></td>
		</tr>
		<tr>
			<th>MIDDLENAME</th>
			<td><input type="text" name="txtMname"></td>
		</tr>
		<tr>
			<th>BATCH</th>
			<td><input type="text" name="txtBatch"></td>
		</tr>
		<tr>
			<th>GRADE</th>
			<td><input type="text" name="txtGrade"></td>
		</tr>
		<tr>
			<th>SECTION</th>
			<td><input type="text" name="txtSection"></td>
		</tr>
		<tr>
			<th>PSHSCLUB1</th>
			<td><input type="text" name="txtPSHSClub1"></td>
		</tr>
		<tr>
			<th>PSHSCLUBPOSITION1</th>
			<td><input type="text" name="txtPSHSClubPos1"></td>
		</tr>
		<tr>
			<th>PSHSCLUBLENGTH1</th>
			<td><input type="text" name="txtPSHSClubLength1"></td>
		</tr>
		<tr>
			<th>PSHSCLUB2</th>
			<td><input type="text" name="txtPSHSClub2"></td>
		</tr>
		<tr>
			<th>PSHSCLUBPOSITION2</th>
			<td><input type="text" name="txtPSHSClubPos2"></td>
		</tr>
		<tr>
			<th>PSHSCLUBLENGTH2</th>
			<td><input type="text" name="txtPSHSClubLength2"></td>
		</tr>
		<tr>
			<th>PSHSCLUB3</th>
			<td><input type="text" name="txtPSHSClub3"></td>
		</tr>
		<tr>
			<th>PSHSCLUBPOSITION3</th>
			<td><input type="text" name="txtPSHSClubPos3"></td>
		</tr>
		<tr>
			<th>PSHSCLUBLENGTH3</th>
			<td><input type="text" name="txtPSHSClubLength3"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUB1</th>
			<td><input type="text" name="txtOutsideClub1"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUBPOSITION1</th>
			<td><input type="text" name="txtOutsideClubPos1"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUBLENGTH1</th>
			<td><input type="text" name="txtOutsideClubLength1"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUB2</th>
			<td><input type="text" name="txtOutsideClub2"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUBPOSITION2</th>
			<td><input type="text" name="txtOutsideClubPos2"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUBLENGTH2</th>
			<td><input type="text" name="txtOutsideClubLength2"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUB3</th>
			<td><input type="text" name="txtOutsideClub3"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUBPOSITION3</th>
			<td><input type="text" name="txtOutsideClubPos3"></td>
		</tr>
		<tr>
			<th>OUTSIDECLUBLENGTH3</th>
			<td><input type="text" name="txtOutsideClubLength3"></td>
		</tr>
		<tr>
			<th>SPORTS</th>
			<td><input type="text" name="txtSports"></td>
		</tr>
		<tr>
			<th>INSTRUMENTS</th>
			<td><input type="text" name="txtInstruments"></td>
		</tr>
		<tr>
			<th>ARTS</th>
			<td><input type="text" name="txtArts"></td>
		</tr>
		<tr>
			<th>HOBBIES</th>
			<td><input type="text" name="txtHobbies"></td>
		</tr>
		<tr>
			<th>INTERESTS</th>
			<td><input type="text" name="txtInterests"></td>
		</tr>
		<tr>
			<th>ACTIVITIESSTARTED</th>
			<td><input type="text" name="txtActivities"></td>
		</tr>
		<tr>
			<td><a href="view_students.php"><input type="button" value="BACK"></a></td>
			<td><input type="SUBMIT"></td>
		</tr>
    </table>
</form>
</body>
</html>
