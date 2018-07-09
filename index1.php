<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	include ("logo.php");
	echo "<h3> User: ".$_SESSION["UName"]." ".$_SESSION["USurName"] ."</h3>";
	if($_SESSION["access"]==3)
			include ("menu.php");
	
?>
</body>
</html>