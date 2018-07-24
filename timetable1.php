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
			$id=$_POST['student'];
			$sql1="Select * from student_class INNER JOIN classes on classes.id=student_class.classid where studentID=".$id." order by classes.mera,classes.starts ";
			//echo $sql1;
			?>
            <br>
            <br>
            <br>
            <br>
            <form action="timetable1.php" method="post">
            <label>Choose a student: </label><select name="student">
			
			<?php
            $sql="Select id,onoma from students order by onoma";
			
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['id']."'>".$row['onoma']."</option>";
			
		}
		
		?>
   

        
			</select>
            
            <p></p>
            <input name="submit" type="submit" value="Timetable">
            
            </form>
            <?php 
				$sql="select onoma from students where id=".$id;
				$result = mysqli_query($myDB, $sql);
				$row = mysqli_fetch_array($result);
				echo "<p></p> <strong>Timetable of: ".$row['onoma']."</strong><p></p>";
			?>
            <table border="1"><tr>
            <?php
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
		}
		
		
		?>
        <form action="excel.php" method="post">
        <input name="student" type="hidden" value="<?php echo $id; ?>">
        <input name="" type="submit" value="Export to Excel"> </form>
        
</body>
</html>