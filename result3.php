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
			$toUser=$_POST['fromUser'];
			$taskType=$_POST['ttype'];
			$AF=$_POST['AF'];
			$DOA=$_POST['doa'];
			$DOC=$_POST['doc'];
			$Comments=$_POST['comments'];
			$id=$_POST['ID'];
			if (isset($_POST['update'])){
			$sql="Update tasks set toUser='".$toUser."', taskType='".$taskType."', AF='".$AF."', DOA='".$DOA."', DOC='".$DOC."', Comments='".$Comments."' where taskID=".$id;
			$result = mysqli_query($myDB, $sql);
echo "<br><br><br>";
echo "<br> Η εργασία έχει διορθωθεί";
			}
			else if (isset($_POST['delete'])){
				$sql="Delete from tasks where taskID=".$id;
				$result = mysqli_query($myDB, $sql);
echo "<br><br><br>";
echo "<br> Η εργασία έχει διαγραφεί";
			}
				
 } ?>
</body>
</html>