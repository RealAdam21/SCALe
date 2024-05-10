<?php
include ('connect.php');

// Get the posted values
$lname = $_POST['txtLname'];
$fname = $_POST['txtFname'];
$mname = $_POST['txtMname'];
$batch = $_POST['txtBatch'];
$grade = $_POST['txtGrade'];

// Serialize the arrays of PSHS clubs, outside clubs, and their respective positions and lengths
$pshs_clubs = isset($_POST['txtpshsclubs'])? $_POST['txtpshsclubs'] : [];
$pshs_club_positions = isset($_POST['txtpshsclubposs'])? $_POST['txtpshsclubposs'] : [];
$pshs_club_lengths = isset($_POST['txtpshsclublengths'])? $_POST['txtpshsclublengths'] : [];
$outside_clubs = isset($_POST['txtoutsideclubs'])? $_POST['txtoutsideclubs'] : [];
$outside_club_positions = isset($_POST['txtoutsideclubposs'])? $_POST['txtoutsideclubposs'] : [];
$outside_club_lengths = isset($_POST['txtoutsideclublengths'])? $_POST['txtoutsideclublengths'] : [];
$pshs_clubs_serialized = serialize($pshs_clubs);
$pshs_club_positions_serialized = serialize($pshs_club_positions);
$pshs_club_lengths_serialized = serialize($pshs_club_lengths);
$outside_clubs_serialized = serialize($outside_clubs);
$outside_club_positions_serialized = serialize($outside_club_positions);
$outside_club_lengths_serialized = serialize($outside_club_lengths);

// Get the other form data
$sports = $_POST['txtsports'];
$instruments = $_POST['txtinstruments'];
$arts = $_POST['txtarts'];
$hobbies = $_POST['txthobbies'];
$interests = $_POST['txtinterests'];
$activities = $_POST['txtactivities'];
$signature = $_POST['Signature'];
$date = $_POST['Date'];

// Insert into database
$sql = "INSERT INTO studentinfo_tbl(u_lname, u_fname, u_mname, u_batch, u_grade, u_pshsclubs, u_pshsclubposs, u_pshsclublengths, u_outsideclubs, u_outsideclubposs, u_outsideclublengths, u_sports, u_instruments, u_arts, u_hobbies, u_interests, u_activitiesstarted, u_signature, u_date)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssssssssssssssss', 
    $lname, 
    $fname, 
    $mname, 
    $batch, 
    $grade, 
    $pshs_clubs_serialized, 
    $pshs_club_positions_serialized, 
    $pshs_club_lengths_serialized, 
    $outside_clubs_serialized, $outside_club_positions_serialized, 
    $outside_club_lengths_serialized, 
    $sports, 
    $instruments, 
    $arts, 
    $hobbies, 
    $interests, 
    $activities, 
    $signature, 
    $date
);
try {
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "New record created successfully";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
}
} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
}

$conn->close();

// Redirect to view_students.php
header("Location: view_students.php");
exit;
?>