<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
		if($_SESSION["loggedin"]!=1){
			echo "Πρέπει να συνδεθείτε";
			include ("login.php");	
		}
		else{
			include ("logo.php");
			include ("dbconnection.php");
			
				if($_SESSION["access"]==3)
					include ("menu.php"); 
			?>
            <br>
            <br>
            <br>
            <br>
            
			<?php
			$rdate=$_GET['rdate'];
			$id=$_GET['id'];
			
            $sql="Delete from payment where rdate='".$rdate."' and studentID=".$id;
			$result = mysqli_query($myDB, $sql);
			echo "<script>
alert('You deleted a receipt');
window.location.href='del_payment.php';
</script>";
		}?>
</body>
</html>