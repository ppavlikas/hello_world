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
			include ("logo.php");
			include ("dbconnection.php");
			
				if($_SESSION["access"]==3)
					include ("menu.php"); 
			$classid=$_POST['class'];
			?>
            <br>
            <br>
            <br>
            <br>
            <form  action="classreport1.php" method="post" >
            <label>Choose a class: </label><select name="class">
			
			<?php
            $sql="Select * from classes";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['id']."'>".$row['onoma']."</option>";
			
		}
			
			?>
			</select>
            
            <input name="update"  type="submit" value="Class Report">
            
            </form>
            
			
			            <?php	
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
		}?>
        <form action="excelclassreport.php" method="post">
        <input name="class" type="hidden" value="<?php echo $classid; ?>">
        <input name="" type="submit" value="Export to Excel"> </form>
</body>
</html>