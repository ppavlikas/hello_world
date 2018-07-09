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
			$dob=$_POST['dob'];
			$taksi=$_POST['taksi'];
			$sxoleio=$_POST['sxoleio'];
			$nameM=$_POST['onomaM'];
			$nameP=$_POST['onomaP'];
			$address=$_POST['address'];
			$phoneM=$_POST['telM'];
			$phoneP=$_POST['telP'];
			$poli=$_POST['city'];
			$tk=$_POST['tk'];
			$email=$_POST['email'];
			$comments=$_POST['comments'];
			
			if(isset($_POST['facebook']))
			$facebook=0;
			else
			$facebook=1;
			$sql="INSERT INTO students (dob,taksi,sxoleio,nameM,nameP,phoneM,phoneP,address,poli,tk,email,comments,facebook,onoma,fromuser) VALUES ('".$dob."','".$taksi."','".$sxoleio."','".$nameM."','".$nameP."','".$phoneM."','".$phoneP."','".$address."','".$poli."','".$tk."','".$email."','".$comments."',".$facebook.",'".$onoma."','".$fromUser."')";
			$result = mysqli_query($myDB, $sql);
	
	$sql="Select id from students where fromuser='".$fromUser."' and onoma='".$onoma."' and dob='".$dob."'";
	
	$result = mysqli_query($myDB, $sql);
	$row = mysqli_fetch_array($result);
	$student_id=$row['id'];
		$chk=$_POST['chk'];
	for($i=0;$i<count($chk);$i++){
		
		$sql="INSERT INTO students_lessons (student_id,lesson) VALUES(".$student_id.",'".$chk[$i]."')";
		$result = mysqli_query($myDB, $sql);
	}
echo "<script>
alert('You added a new student');
window.location.href='index1.php';
</script>";
				
		}?>
</body>
</html>