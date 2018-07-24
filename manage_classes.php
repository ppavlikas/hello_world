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
            <form  action="updateClass.php" method="post" >
            <label>Choose a class: </label><select name="class">
			
			<?php
            $sql="Select * from classes";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['id']."'>".$row['onoma']."</option>";
			
		}
			
			?>
			</select>
            
            <input name="update"  type="submit" value="update">
            
            </form>
            <p></p>
            <form action="addClass.php" method="post">
            <table border="1px" cellpadding="10" bordercolor=#0dd ><tr>
              <td>
            <label><strong>New Class</strong></label>
            <p></p>
            <label>Name: </label><input name="newL" type="text">
            <p></p>
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
            <label>Choose a lesson: </label><select name="lesson">
			
			<?php
            $sql="Select * from lessons";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<option lang='el' value='".$row['lesson']."'>".$row['lesson']."</option>";
			
		}
			
			?>
			</select>
            <p></p>
            <table>
            <tr><td>Day</td><td>Starts At</td><td>Finish At</td></tr>
            <tr><td><select name="day">
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thrusday</option>
            <option>Friday</option>
            <option>Saturday</option>
            </select></td><td><input type="time" name="StartTime"></td><td><input type="time" name="FinTime"></td></tr>
            </table>
            <input name="submit" type="submit" value="Add">
            </td></tr></table>
            </form>
            <?php		
		}?>
</body>
</html>