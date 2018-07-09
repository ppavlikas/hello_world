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

            <form action="update_teachers.php" method="post">
            <label>Choose a teacher: </label><select name="tname">
			
			<?php
            $sql="Select id,onoma from teacher order by onoma";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['id']."'>".$row['onoma']."</option>";
			
		}
			
			?>
			</select>
            
            <p></p>
            
            <input name="submit" type="submit" value="Show">
            
            </form>
            <p></p>
            <form action="addteacher.php" method="post">
            	<label>Teacher Name:</label><input name="onoma" type="text">
                <p></p>
                <label>Teacher ID:</label><input name="tid" type="text">
                <p></p><label>Teacher Specialty:</label>
                <select name="eid">
                <?php 
			  $sql="Select * from eidikotites order by eidikotita";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['eidikotita']."'>".$row['eidikotita']."</option>";
			
		}
			?>
            </select>
            <p></p>
             <input name="submit" type="submit" value="Add Teacher">
            </form>
            <?php		
		}?>
</body>
</html>