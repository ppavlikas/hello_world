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
            <form  action="enrollStudents1.php" method="post" >
            <label>Choose a class: </label><select name="class">
			
			<?php
            $sql="Select * from classes";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['id']."'>".$row['onoma']."</option>";
			
		}
			
			?>
			</select>
            
            <input name="enroll"  type="submit" value="Enroll Students">
            
            </form>
            
		<?php } ?>
</body>
</html>