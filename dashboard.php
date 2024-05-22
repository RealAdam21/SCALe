<?php
session_start();


?>
<html>
	<head>
	
	</head>
<body>
<?php include 'links.php' ?>
<h2> Welcome <?php if ($_SESSION["level"] == 0){
echo "ADMIN";
}else if ($_SESSION["level"] == 1){
echo "SCALE COORDINATOR";
}else if ($_SESSION["level"] == 2){
echo "SCALE ADVISER";
}else if ($_SESSION["level"] == 3){
echo "STUDENT";
}?>

</body>
</html>