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
					include ("menutasks.php"); 
			$fromUser=$_SESSION["USER"];
			$onoma=$_POST['newL'];
			$tname=$_POST['tname'];
			$lesson=$_POST['lesson'];
			$mera=$_POST['day'];
			$StartTime=$_POST['StartTime'];
			$FinTime=$_POST['FinTime'];
			
			$sql="INSERT INTO classes (onoma,teacher,lesson,mera,starts,finish) VALUES ('".$onoma."','".$tname."','".$lesson."','".$mera."','".$StartTime."','".$FinTime."')";
			$result = mysqli_query($myDB, $sql);
	
	
	}
	//echo $sql;
	
echo "<script>
alert('You added a new class');
window.location.href='index1.php';
</script>" 
 ?>				
		
</body>
</html>