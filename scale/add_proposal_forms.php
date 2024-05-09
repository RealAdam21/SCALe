<?php
include 'connect.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $student_name = $_POST['student_name'];
    $adviser_name = $_POST['adviser_name'];
    $submission_date = $_POST['submission_date'];
    // Add more fields as needed

    // Prepare an SQL statement to insert data into the students_tbl table
    $sql = "INSERT INTO students_tbl (student_name, adviser_name, submission_date) VALUES (?, ?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bindValue(1, $student_name);
    $stmt->bindValue(2, $adviser_name);
    $stmt->bindValue(3, $submission_date);
	
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="student_name">Name of Student:</label><br>
    <input type="text" id="student_name" name="student_name" required><br><br>

    <label for="adviser_name">Name of Adviser:</label><br>
    <input type="text" id="adviser_name" name="adviser_name" required><br><br>

    <label for="submission_date">Date of Submission:</label><br>
    <input type="date" id="submission_date" name="submission_date" required><br><br>

    <!-- Add more form fields as needed -->

    <input type="submit" value="Submit">
</form>


    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the prepared statement
    $stmt->closeCursor();
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="student_name">Name of Student:</label><br>
    <input type="text" id="student_name" name="student_name" required><br><br>

    <label for="adviser_name">Name of Adviser:</label><br>
    <input type="text" id="adviser_name" name="adviser_name" required><br><br>

    <label for="submission_date">Date of Submission:</label><br>
    <input type="date" id="submission_date" name="submission_date" required><br><br>

    <!-- Add more form fields as needed -->

    <input type="submit" value="Submit">
</form>
