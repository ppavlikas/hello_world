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
			
			$id=$_POST['class'];
			$onoma=$_POST['onoma'];
			$tname=$_POST['tname'];
			$lesson=$_POST['lesson'];
			$day=$_POST['day'];
			$StartTime=$_POST['StartTime'];
			$FinTime=$_POST['FinTime']; 
			
			
			$sql="Update classes set onoma='".$onoma."', teacher =".$tname." , lesson='".$lesson."', mera='".$day."', starts='".$StartTime."', finish='".$FinTime."' where id=".$id;
			//echo $sql;	
			$result = mysqli_query($myDB, $sql);
		
echo "<script>
alert('You edited teacher');
window.location.href='index1.php';
</script>";
		}?>
</body>
</html>