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
            $sql="Select * from payment INNER JOIN students ON students.id=payment.studentID order by rdate";
			$result = mysqli_query($myDB, $sql);
			echo "<table><tr><th>Receipt</th><th>Date</th><th>Student</th></tr>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>".$row['rec']."</td><td>".$row['rDate']."</td><td>".$row['onoma']."</td><td><a href='del_payment1.php?id=".$row['id']."&amp;rdate=".$row['rDate']."'>delete</a></td></tr>";
			
		}
			echo "</table>";
			
		}?>
</body>
</html>