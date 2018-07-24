<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=class.xls");
		
		include ("dbconnection.php");
		$classid=$_POST['class'];
			$sql="Select * from classes where classes.id=".$classid;
			$result = mysqli_query($myDB, $sql);
			$row1 = mysqli_fetch_array($result);	
			$sql="Select * from classes inner join teacher on teacher.id=classes.teacher where classes.id=".$classid;
			$result = mysqli_query($myDB, $sql);
			$row = mysqli_fetch_array($result);	
			echo "<table><tr><td>Class:".$row1['onoma']."</td></tr>";
			echo "<tr><td>Teacher:".$row['onoma']."</td></tr>";
			
			echo "</table>";
			$sql="Select * from student_class inner join students on student_class.studentID=students.ID where student_class.classID=".$classid;
			$result = mysqli_query($myDB, $sql);
			echo "<p></p><table border='1'>";
			echo "<tr><th>Students</th></tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td>".$row['onoma']."</td></tr>";	
			}
			echo "</table>";
?>
</body>
</html>