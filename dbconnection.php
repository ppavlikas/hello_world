<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php $myDB=mysqli_connect("localhost","moecphp","12344321aA!","projectphp");
	if(mysqli_connect_errno($myDB)){
		echo "Δεν υπάρχει σύνδεση με τη βάση. Επικοινώνησε με τον διαχειριστή";
		include ("login.php");	
	}
?>
</body>
</html>