<?php

include 'links.php';
include 'connect.php'; // Include your database connection file

// Check if 'id' is set in $_SESSION
if (!isset($_SESSION['id'])) {
    // Handle case where 'id' is not set (redirect or display error)
    // For example:
    header("Location: login.php"); // Redirect to login page
    exit; // Ensure script stops execution after redirection
}

$id = $_SESSION['id'];

// Fetch batch and grade from users_info_tbl
$sqlUserInfo = "SELECT ui_batch, ui_grade FROM users_info_tbl WHERE u_id = '$id'";
$resultUserInfo = $conn->query($sqlUserInfo);

// Initialize variables to hold batch and grade
$batch = '';
$grade = '';

// Fetch batch and grade values if there are rows
if ($resultUserInfo->num_rows > 0) {
    $rowUserInfo = $resultUserInfo->fetch_assoc();
    $batch = isset($rowUserInfo['ui_batch']) ? $rowUserInfo['ui_batch'] : '';
    $grade = isset($rowUserInfo['ui_grade']) ? $rowUserInfo['ui_grade'] : '';
}

// Fetch inside clubs data
$sqlIn = "SELECT * FROM sin_clubs_tbl WHERE u_id = '$id'";
$resultIn = $conn->query($sqlIn);

// Fetch outside clubs data
$sqlOut = "SELECT * FROM sout_clubs_tbl WHERE u_id = '$id'";
$resultOut = $conn->query($sqlOut);

?>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>       
        form {
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            margin-top: 50px;
            height: 600px;
            overflow: auto;
        } 
        
        header {
            text-align: center;
        }
        
        body {
            font-family: 'Poppins';
        }
    </style>
</head>

<body>
    <form>
        <header>
            PHILIPPINE SCIENCE HIGH SCHOOL SYSTEM <br> CAMPUS: Philippine Science High School <br> <br> SCALE PROGRAM PROPOSAL FORM
        </header>
        <br>
        <table>
            <tr>
                <td>Name: <?php echo $_SESSION['lname'] . " " . $_SESSION['fname'] . " " . $_SESSION['mname']?></td> 
            </tr>
        </table>
        <br>
        <table> 
            <tr>
                <td>Batch:</td>
                <td><?php echo htmlspecialchars($batch); ?></td>
                <td>Grade:</td>
                <td><?php echo htmlspecialchars($grade); ?></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Name of club/association joined in PSHS</td>
                <td width="250px">Position / designation</td>
                <td width="200px">Length of membership</td>
            </tr>
            <?php
            if ($resultIn->num_rows > 0) {
                while($rowIn = $resultIn->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo isset($rowIn["sin_name"]) ? htmlspecialchars($rowIn["sin_name"]) : ''; ?></td>
                        <td><?php echo isset($rowIn["sin_position"]) ? htmlspecialchars($rowIn["sin_position"]) : ''; ?></td>
                        <td><?php echo isset($rowIn["sin_length"]) ? htmlspecialchars($rowIn["sin_length"]) : ''; ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>0 results</td></tr>";
            }
            ?>
            <tr>
                <td colspan="3"><a href="insert_inclub.php"><button type="button">ADD INSIDE CLUB</button></a></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Name of club/association joined outside PSHS</td>
                <td width="200px">Position / designation</td>
                <td width="200px">Length of membership</td>
            </tr>
            <?php
            if ($resultOut->num_rows > 0) {
                while($rowOut = $resultOut->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo isset($rowOut["sout_name"]) ? htmlspecialchars($rowOut["sout_name"]) : ''; ?></td>
                        <td><?php echo isset($rowOut["sout_position"]) ? htmlspecialchars($rowOut["sout_position"]) : ''; ?></td>
                        <td><?php echo isset($rowOut["sout_length"]) ? htmlspecialchars($rowOut["sout_length"]) : ''; ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>0 results</td></tr>";
            }
            ?>
            <tr>
                <td colspan="3"><a href="insert_outclub.php"><button type="button">ADD OUTSIDE CLUB</button></a></td>
            </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <td>Sports you have played:</td>
                <td>Musical instruments that you have played:</td>
                <td>Arts and crafts you have skill in:</td>
                <td>Other hobbies/interests:</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <br>
        <table border="1" width="783px">   
            <tr>
                <td colspan="4">Activities that you are interested in learning about (could be a sport, art, music, skill, etc.):<br>
                <br><br><br><br></td>

            </tr>
        </table>
        <br>
        <table border="1" width="783px">   
            <tr>
                <td colspan="4">Activities that you have spearheaded (give a brief description of each activity):<br>
                <br><br><br><br></td>

            </tr>
        </table>
    </form>
</body>
</html>
