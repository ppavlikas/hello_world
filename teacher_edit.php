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
			$id=$_POST['id'];
			$sql="Update teacher set onoma='".$onoma."', eidikotita ='".$eid."' , tid='".$tid."' where id=".$id;
			//echo $sql;	
			$result = mysqli_query($myDB, $sql);
		
echo "<script>
alert('You edited teacher');
window.location.href='index1.php';
</script>";
			
		}?>
</body>
</html>