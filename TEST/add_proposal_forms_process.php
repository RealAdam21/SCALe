<?php
include 'connect.php';

// Get form data
$student_name = $_POST['student_name'];
$adviser_name = $_POST['adviser_name'];
$submission_date = $_POST['submission_date'];

// Loop through the form data and insert each activity into the database
for ($i = 0; $i < 4; $i++) {
    $title = $_POST['title_' . $i];
    $strand = $_POST['strand_' . $i];
    $type = $_POST['type_' . $i];
    $start_date = $_POST['start_date_' . $i];
    $end_date = $_POST['end_date_' . $i];
}
    // Prepare an SQL statement to insert data into the proposalform_tbl table
    $sql = "INSERT INTO proposalform_tbl (u_name, u_adviser, u_submissiondate, u_activitytitle, u_strand, u_type, u_startdate, u_enddate)
            VALUES ('$student_name', '$adviser_name', '$submission_date', '$title', '$strand', '$type', '$start_date', '$end_date')";

    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
  location.replace("view_proposals.php")

</script>
