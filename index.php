<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	require ("dbconnection.php");
	$_SESSION["loggedin"]=0;
	$username=$_POST["username"];
	$password=$_POST["pass"];
	
	$sql="Select * from users where username='".$username."'";
	$result = mysqli_query($myDB, $sql);
		if (!($row = mysqli_fetch_array($result))){
		
		
		session_destroy();
		include ("login.php");
		echo "Λανθεσμένο username ή password";
	}
	else if(!password_verify ( $password , $row['password'] )){
		session_destroy();
		include ("login.php");
		
		echo "Λανθασμένο username ή password";
	}
	else{
		$_SESSION["loggedin"]=1;
		$_SESSION["access"]=$row['access'];
		$_SESSION["USER"]=$username;
		$_SESSION["UName"]=$row['uname'];
		$_SESSION["USurName"]=$row['usurname'];
		$uname=$row['uname'];
		$usurname=$row['usurname'];
		include ("logo.php");
		echo "<h3> Welcome ".$uname." </h3>";
		if($_SESSION["access"]==3)
			include ("menu.php");

	}
?>
</body>
</html>