<?php
session_start();
include 'connect.php';

$id = $_SESSION['id'];

// Fetch current user's information including first name and u_level
$sqlCurrentUser = "SELECT users_info_tbl.*, users_tbl.u_fname, users_tbl.u_level 
                   FROM users_info_tbl 
                   INNER JOIN users_tbl ON users_info_tbl.u_id = users_tbl.u_id 
                   WHERE users_info_tbl.u_id = $id";
$resultCurrentUser = $conn->query($sqlCurrentUser);

if ($resultCurrentUser && $resultCurrentUser->num_rows > 0) {
    $rowCurrentUser = $resultCurrentUser->fetch_assoc();
    $section = $rowCurrentUser['ui_section'];
    $position = $rowCurrentUser['ui_position'];
    $firstName = $rowCurrentUser['u_fname'];
    $userLevel = $rowCurrentUser['u_level']; // Fetch the user's level
} else {
    die("User not found.");
}

// Determine the link for Form 1 based on user's u_level
function getForm1Link($userLevel, $userId) {
    if ($userLevel == 3) {
        return "view_form1_student.php?id=$userId";
    } elseif ($userLevel == 2) {
        return "view_form1_scad.php?id=$userId";
    } elseif ($userLevel == 1) {
        return "view_form1_scaco.php?id=$userId";
    } else {
        return "#"; // Handle other cases or errors
    }
}

// Determine the link for Form 2 based on user's u_level
function getForm2Link($userLevel, $userId) {
    if ($userLevel == 3) {
        return "view_form2_student.php?id=$userId";
    } elseif ($userLevel == 2) {
        return "view_form2_scad.php?id=$userId";
    } elseif ($userLevel == 1) {
        return "view_form2_scaco.php?id=$userId";
    } else {
        return "#"; // Handle other cases or errors
    }
}

// Fetch users with higher u_level based on current user's section and position
$sqlHigherLevelUsers = "SELECT users_tbl.u_id, users_tbl.u_lname, users_tbl.u_fname, users_tbl.u_mname, users_tbl.u_level, users_info_tbl.ui_batch, users_info_tbl.ui_grade, users_info_tbl.ui_section, users_info_tbl.ui_position 
                       FROM users_tbl 
                       INNER JOIN users_info_tbl ON users_tbl.u_id = users_info_tbl.u_id 
                       WHERE users_info_tbl.ui_section = '$section' 
                       AND (
                           (users_tbl.u_level > '$userLevel' AND users_tbl.u_level = 3)
                           OR
                           (users_tbl.u_level = 3 AND users_tbl.u_id = '$id')  -- Include current session user if u_level = 3
                       )";

$resultHigherLevelUsers = $conn->query($sqlHigherLevelUsers);

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            color: #0066cc;
            text-decoration: underline;
        }

        .add-button {
            text-align: center;
            margin-top: 10px;
        }

        .add-button input {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($firstName); ?></h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        if ($resultHigherLevelUsers && $resultHigherLevelUsers->num_rows > 0) {
            while ($rowHigherLevelUser = $resultHigherLevelUsers->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($rowHigherLevelUser['u_id']); ?></td>
                    <td><?php echo htmlspecialchars($rowHigherLevelUser['u_lname'] . " " . $rowHigherLevelUser['u_fname'] . " " . $rowHigherLevelUser['u_mname']); ?></td>
                    <td><a href="<?php echo getForm1Link($rowHigherLevelUser['u_level'], $rowHigherLevelUser['u_id']); ?>">FORM1</a></td>
                    <td><a href="<?php echo getForm2Link($rowHigherLevelUser['u_level'], $rowHigherLevelUser['u_id']); ?>">FORM2</a></td>
                    <td>FORM3</td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5'>No results found.</td></tr>";
        }
        ?>
    </table>

    <div class="add-button">
        <a href="insert_user.php"><input type="button" value="ADD"></a>
    </div>
</body>
</html>
