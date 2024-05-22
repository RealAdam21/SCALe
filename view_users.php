<?php
session_start();
include 'connect.php';

$level = $_SESSION["level"];
$sql = ""; // Initialize $sql variable

if ($level == 0){
    $sql = "SELECT * FROM users_tbl";
} elseif ($level == 1){
    $sql = "SELECT * FROM users_tbl WHERE u_level IN ('1', '2', '3')";
}

// Check if $sql is not empty before querying the database
if (!empty($sql)) {
    $result = $conn->query($sql);

    if ($result) {
?>
        <html>
        <head>
        </head>
        <?php include 'links.php'; ?>
        <body>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>FULLNAME</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
<?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
?>
                <tr>
                    <td><?php echo $row["u_id"] ?></td>
                    <td><?php echo $row["u_lname"] . " " . $row["u_fname"] . " " . $row["u_mname"] ?></td>
                    <td>UPDATE</td>
                    <td><a href="assign_user.php?id=<?php echo $row["u_id"] ?>">ASSIGN</a></td>
                    <td>DELETE</td>
                </tr>
<?php
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }
?>
                <tr>
                    <td colspan="4"><a href="insert_user.php"><input type="button" value="ADD"></a></td>
                </tr>
            </table>
        </body>
        </html>
<?php
    } else {
        echo "Error executing query: " . $conn->error;
    }
} else {
    echo "SQL query is empty.";
}

$conn->close();
?>