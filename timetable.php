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
		}?>
</body>
</html>