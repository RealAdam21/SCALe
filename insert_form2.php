<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins';
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 5px;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        input[type="submit"], input[type="button"] {
            padding: 10px 20px;
            margin: 10px 0;
        }
        input[type="button"] {
            background-color: #ccc;
            border: 1px solid #999;
        }
    </style>
</head>
<body>
    <?php 
    include 'connect.php'; // Include database connection
    include 'links.php'; 

    // Fetch advisers from the database
    $sqlAdvisers = "SELECT u_lname, u_fname, u_mname FROM users_tbl WHERE u_level = 2";
    $resultAdvisers = $conn->query($sqlAdvisers);
    ?>
    <form action="insert_form2_proc.php" method="POST">
        <table border="1">
            <tr>
                <td>ADVISER'S NAME:</td>
                <td>
                    <select name="adviserName" required>
                        <?php
                        if ($resultAdvisers->num_rows > 0) {
                            while($row = $resultAdvisers->fetch_assoc()) {
                                $adviserName = $row['u_lname'] . ", " . $row['u_fname'] . " " . $row['u_mname'];
                                echo "<option value='$adviserName'>$adviserName</option>";
                            }
                        } else {
                            echo "<option value=''>No advisers available</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>SUBMISSION DATE:</td>
                <td><input type="date" name="submissionDate" required></td>
            </tr>
            <tr>
                <td>TITLE OF ACTIVITY:</td>
                <td><input type="text" name="txtTa" required></td>
            </tr>
            <tr>
                <td>DESCRIPTION:</td>
                <td>
                    <textarea name="txtDesc" rows="4" cols="50" required></textarea>
                </td>
            </tr>
            <tr>
                <td>STRAND:</td>
                <td>
                    <input type="checkbox" name="cbService" value="S">Service
                    <input type="checkbox" name="cbCreativity" value="C">Creativity
                    <input type="checkbox" name="cbAction" value="A">Action
                    <input type="checkbox" name="cbLeadership" value="L">Leadership
                </td>
            </tr>
            <tr>
                <td>TYPE:</td>
                <td>
                    <select name="drpType" required>
                        <option value="I">Individual</option>
                        <option value="G">Group</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>START:</td>
                <td><input type="date" name="dateStart" required></td>
            </tr>
            <tr>
                <td>END:</td>
                <td><input type="date" name="dateEnd" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT"></td>
                <td><a href="view_form2.php"><input type="button" value="BACK"></a></td>
            </tr>
        </table>
    </form>
</body>
</html>

