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
			$onoma=$_POST['onoma'];
			$tid=$_POST['tid'];
			$eid=$_POST['eid'];
			
			$sql="INSERT INTO teacher (onoma,tid,eidikotita) VALUES ('".$onoma."','".$tid."','".$eid."')";
			$result = mysqli_query($myDB, $sql);
		
echo "<script>
alert('You added a new teacher');
window.location.href='index1.php';
</script>";
				
		}?>
</body>
</html>