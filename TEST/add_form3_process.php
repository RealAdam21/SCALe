<?php
include ('connect.php');


$name = $_POST['student_name'];
$adviser = $_POST['adviser_name'];
$campus = $_POST['campus'];
$batch = $_POST['batch'];
$title = $_POST['title'];
$strand = $_POST['strand'];
$type = $_POST['type'];
$pstartdate = $_POST['planning_start_date'];
$penddate = $_POST['planning_end_date'];
$pshsclub2 = $_POST['txtPSHSClub2'];
$pshsclubpos2 = $_POST['txtPSHSClubPos2'];
$pshsclublength2 = $_POST['txtPSHSClubLength2'];
$pshsclub3 = $_POST['txtPSHSClub3'];
$pshsclubpos3 = $_POST['txtPSHSClubPos3'];
$pshsclublength3 = $_POST['txtPSHSClubLength3'];
$outsideclub1 = $_POST['txtOutsideClub1'];
$outsideclubpos1 = $_POST['txtOutsideClubPos1'];
$outsideclublength1 = $_POST['txtOutsideClubLength1'];
$outsideclub2 = $_POST['txtOutsideClub2'];
$outsideclubpos2 = $_POST['txtOutsideClubPos2'];
$outsideclublength2 = $_POST['txtOutsideClubLength2'];
$outsideclub3 = $_POST['txtOutsideClub3'];
$outsideclubpos3 = $_POST['txtOutsideClubPos3'];
$outsideclublength3 = $_POST['txtOutsideClubLength3'];
$sports = $_POST['txtSports'];
$instruments = $_POST['txtInstruments'];
$arts = $_POST['txtArts'];
$hobbies = $_POST['txtHobbies'];
$interests = $_POST['txtInterests'];
$activities = $_POST['txtActivities'];

$sql = "INSERT INTO studentinfo_tbl(u_id,u_lname,u_fname,u_mname,u_batch,u_grade,u_section,u_pshsclub1,u_pshsclubpos1,u_pshsclublength1,u_pshsclub2,u_pshsclubpos2,u_pshsclublength2,u_pshsclub3,u_pshsclubpos3,u_pshsclublength3,u_outclub1,u_outclubpos1,u_outclublength1,u_outclub2,u_outclubpos2,u_outclublength2,u_outclub3,u_outclubpos3,u_outclublength3,u_sports,u_instruments,u_arts,u_hobbies,u_interest,u_activitiesstarted)
VALUES (null, '$lname', '$fname', '$mname', '$batch', '$grade','$section', '$pshsclub1', '$pshsclubpos1', '$pshsclublength1', '$pshsclub2', '$pshsclubpos2 ', '$pshsclublength2', '$pshsclub3', '$pshsclubpos3', '$pshsclublength3', '$outsideclub1', '$outsideclubpos1', '$outsideclublength1', '$outsideclub2', '$outsideclubpos2', '$outsideclublength2', '$outsideclub3', '$outsideclubpos3', '$outsideclublength3', '$sports', '$instruments', '$arts', '$hobbies', '$interests', '$activities')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script>
  location.replace("view_students.php")

</script>