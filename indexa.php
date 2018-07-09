<?php session_start();?>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<?php 
include ("dbconnection.php");
include ("logo.php");
			 
			if (mysqli_connect_errno($myDB))
			{
				echo "<p>Error connecting to the database. Please try again later.</p>";
				exit;
			}
			else{
				$username = $_POST["username"];
				$pass =$_POST["pass"];
				$query = "select * from users where username ='".$username."' and password = '".$pass."'";
				$result = mysqli_query($myDB, $query);
				if (!($row = mysqli_fetch_array($result)))
			{
				session_destroy();
				include 'login.php';
				echo "<p>Λανθασμένο login. Ξαναδοκιμάστε</p>";
				exit;			
			}
			else{
				$_SESSION["USER"]=$username;
				
				$type=$row['access'];
				$_SESSION['user']=$type;
				if($type==1)
					include("menu.php");
			}
				
			}
?>
<form action="" method="post">
<input type="date" name="dt"  /></form>
</hmtl>
