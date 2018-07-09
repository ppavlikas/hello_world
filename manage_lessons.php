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
			?>
            <br>
            <br>
            <br>
            <br>
            <form  action="DeleteConf.php" method="post" >
            <label>Choose a lesson: </label><select name="lesson">
			
			<?php
            $sql="Select * from lessons";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['lesson']."'>".$row['lesson']."</option>";
			
		}
			
			?>
			</select>
            <input name="urlDelete" type="hidden" value="DeleteLesson.php">
            <input name="urlBack" type="hidden" value="manage_lessons.php">
            <input name="Delete"  type="submit" value="Delete">
            
            </form>
            <p></p>
            <form action="addLesson.php" method="post">
            <label>New Lesson :</label><input name="newL" type="text">
            
            <input name="submit" type="submit" value="Add">
            
            </form>
            <?php		
		}?>
</body>
</html>