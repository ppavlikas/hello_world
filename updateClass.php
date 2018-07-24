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
					$fromUser=$_SESSION["USER"];
			$id=$_POST['class'];
			$sql="Select * from classes where id=".$id;
			$result = mysqli_query($myDB, $sql);
			$row1 = mysqli_fetch_array($result);
			
			?>
            <br>
            <br>
            <br>
            <br>
            
			
            <p></p>
            <form action="upClass.php" method="post">
            <table border="1px" cellpadding="10" bordercolor=#0dd ><tr>
              <td>
            <input name="class" type="hidden" value="<?php echo $id;?>">
            <label>Name: </label><input name="onoma" value="<?php echo $row1['onoma']; ?>" type="text">
            <p></p>
            <label>Choose a teacher: </label><select name="tname" value="<?php  $row1['teacher'];?>">
			
			<?php
            $sql="Select id,onoma from teacher order by onoma";
			$result = mysqli_query($myDB, $sql);
		while($row = mysqli_fetch_array($result)){
			if($row['id']==$row1['teacher'])
			echo "<option lang='el' value='".$row['id']."' selected>".$row['onoma']."</option>";
			else
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
			if($row['lesson']==$row1['lesson'])
			echo "<option lang='el' value='".$row['lesson']."' selected>".$row['lesson']."</option>";
			else
			echo "<option lang='el' value='".$row['lesson']."'>".$row['lesson']."</option>";
			
		}
			
			?>
			</select>
            <p></p>
            <table>
            <tr><td>Day</td><td>Starts At</td><td>Finish At</td></tr>
            <tr><td><select name="day">
            <?php
			$A=array("Monday","Tuesday","Wednesday","Thrusday","Friday","Saturday");
			for($i=0;$i<6;$i++)
            if($row1['mera']==$A[$i])
			echo "<option selected>".$A[$i]."</option>";
			else
			echo "<option>".$A[$i]."</option>";
			
			
			?>
            </select></td><td><input type="time" name="StartTime" value="<?php echo $row1['starts'];?>"></td><td><input type="time" name="FinTime" value="<?php echo $row1['finish'];?>"></td></tr>
            </table>
            <input name="update" type="submit" value="Update">
            </form>
            <p></p>
            <form action="DeleteConfClass.php" method="post"><input name="id" type="hidden" value="<?php echo $id;?>">
            <input name="onoma" type="hidden" value="<?php echo $row1['onoma'];?>">
            <input name="del" type="submit" value="Delete"> </form></td></tr></table>
            
            <?php		
		}?>
</body>
</html>