<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCALE Program Proposal Form</title>
    <style>
      <html>
<head>
	<title>Students Table</title>
	
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
    <form action="add_proposal_forms_process.php" method="post">
        <label for="student_name">Name of Student:</label>
        <input type="text" id="student_name" name="student_name" required><br><br>

        <label for="adviser_name">Name of Adviser:</label>
        <input type="text" id="adviser_name" name="adviser_name" required><br><br>

        <label for="submission_date">Date of Submission:</label>
        <input type="date" id="submission_date" name="submission_date" required><br><br>

        <table>
            <tr>
                <th>Title of Activity</th>
                <th>Strand</th>
                <th>Type</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
            <?php for ($i = 0; $i < 4; $i++): ?>
            <tr>
                <td><input type="text" name="title_<?php echo $i; ?>" required></td>
                <td>
                    <select name="strand_<?php echo $i; ?>" required>
                        <option value="">Select a strand</option>
                        <option value="S">Service</option>
                        <option value="C">Creativity</option>
                        <option value="A">Action</option>
                        <option value="L">Leadership</option>
                    </select>
                </td>
                <td>
                    <select name="type_<?php echo $i; ?>" required>
                        <option value="">Select a type</option>
                        <option value="I">Individual</option>
                        <option value="G">Group</option>
                    </select>
                </td>
                <td><input type="date" name="start_date_<?php echo $i; ?>" required></td>
                <td><input type="date" name="end_date_<?php echo $i; ?>" required></td>
            </tr>
            <?php endfor; ?>
        </table>

        <!-- Reviewed by and Noted by sections will be added to the "submit_form.php" file -->

        <input type="submit" value="Submit">
    </form>
</body>
</html>