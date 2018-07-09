<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	$pass=$_POST["newpass"];
	$username=$_SESSION["USER"];
	include ("dbconnection.php");
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	$sql="Update users set password='".$hash."' where username='".$username."'";
	include ("index1.php");
	$result = mysqli_query($myDB, $sql);
	echo "<br><br>Η αλλαγή έγινε με επιτυχία";
?>
</body>
</html>