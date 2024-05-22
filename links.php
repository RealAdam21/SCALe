<h2> <a href = "dashboard.php">HOME</a> 

<?php $level = $_SESSION["level"];

if ($level == 0 || $level == 1 ){
 ?>
| <a href = "view_users.php">USERS</a>

<?php 
}
?>
 | <a href = "view_form.php">FORMS</a></h2>