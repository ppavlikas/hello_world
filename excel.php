<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=test.xls");
		
		include ("dbconnection.php");
		$id=$_POST['student'];
			$sql1="Select * from student_class INNER JOIN classes on classes.id=student_class.classid where studentID=".$id." order by classes.mera,classes.starts ";
			$sql="select onoma from students where id=".$id;
				$result = mysqli_query($myDB, $sql);
				$row = mysqli_fetch_array($result);
				echo "<p></p> <strong>Timetable of: ".$row['onoma']."</strong><p></p>";
		echo "<table border='1'><tr>";
            
		$meres=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
		
		for($i=0;$i<6;$i++)
			echo "<th>".$meres[$i]."</th>";
		echo "</tr>";
		
					
		$result = mysqli_query($myDB, $sql1);
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			for($i=0;$i<6;$i++){
				if($row['mera']==$meres[$i]){
					echo "<td>".$row['lesson']." ".$row['starts']."-".$row['finish']."<td>";	
				}
				else
					echo "<td></td>";
			}
			
			echo "</tr>";	
		}
	
		echo "</table>";			
?>
</body>
</html>