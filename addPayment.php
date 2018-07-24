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
			
			$id=$_POST['students'];
			$receipt=$_POST['receipt'];
			$amount=$_POST['amount'];
			$rDate=$_POST['rDate'];
			$minas=$_POST['minas'];
			$sql="INSERT into payment(studentID,rDate,rec,poso) values(".$id.",'".$rDate."','".$receipt."',".$amount.")";
			
			$result = mysqli_query($myDB, $sql);
			for($i=0;$i<count($minas);$i++){
				
				if($minas[$i]=="January"){
					
					$sql="Update payment set Jan=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="February"){
					
					$sql="Update payment set Feb=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="March"){
					$sql="Update payment set Mar=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="April"){
					$sql="Update payment set Apr=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="May"){
					$sql="Update payment set Mai=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="June"){
					$sql="Update payment set Jun=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="July"){
					$sql="Update payment set Jul=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="August"){
					$sql="Update payment set Aug=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="September"){
					$sql="Update payment set Sep=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="October"){
					$sql="Update payment set Oct=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="November"){
					$sql="Update payment set Nov=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				if($minas[$i]=="December"){
					$sql="Update payment set Dece=1 where studentID=".$id." and rDate='".$rDate."'";	
					$result = mysqli_query($myDB, $sql);
				}
				
			}
			
           echo "<script>
alert('You added a payment');
window.location.href='new_payment.php';
</script>";
			
		}?>

</body>
</html>