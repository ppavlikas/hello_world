<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Documents</title>
</head>

<body>

<?php 
		if($_SESSION["loggedin"]!=1){
			echo "Πρέπει να συνδεθείτε";
			include ("login.php");	
		}
		else{
			//include ("logo.php");
			include ("dbconnection.php");
			
				if($_SESSION["access"]==3)
					//include ("menu.php");
					$id=$_SESSION["classID"]; 
			$chk=$_POST['chk'];
			for($i=0;$i<count($chk);$i++){
				$sql="Delete from student_class where classID=".$id." and studentID=".$chk[$i];
			   $result1 = mysqli_query($myDB, $sql);
			   
			}
				
			echo "<script>window.location.href='enrollStudents.php';</script>";
		}?>
</body>
</html>