<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php include("menuchp.php"); ?>
<br>
<br>
<?php echo $_SESSION["USER"];?>
<h4>Αλλαγή Κωδικού</h4>
<form action="changePass.php" method="post">
<p><label>Νέος Κωδικός: </label><input name="newpass" type="password"></p>
<p><input name="changep" type="submit" value="Αλλαγή Κωδικού"></p>
</form>
</body>
</html>