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
			
			$onoma=$_POST['tname']; 
			
			$sql="Select * from teacher where id=".$onoma;
			?>
            <br>
            <br>
            <br>
            <br>

            <form action="teacher_edit.php" method="post">
            
			
			<?php
            
			$result = mysqli_query($myDB, $sql);
			$row = mysqli_fetch_array($result);
			echo "<label>Teacher Name:</label><input name='onoma' value='".$row['onoma']."' type='text'>
                <p></p>
                <label>Teacher ID:</label><input name='tid' value='".$row['tid']."' type='text'>";
				echo "<input name='id' value='".$row['id']."' type='hidden'>";
			?>
			       
            <p></p>
            <p></p><label>Teacher Specialty:</label>
                <select name="eid">
                <?php 
			  $sql="Select * from eidikotites order by eidikotita";
			$result = mysqli_query($myDB, $sql);
		while($row1 = mysqli_fetch_array($result)){
			if($row1['eidikotita']==$row['eidikotita'])
			echo "<option lang='el' value='".$row1['eidikotita']."' selected>".$row1['eidikotita']."</option>";
			else
			echo "<option lang='el' value='".$row1['eidikotita']."' >".$row1['eidikotita']."</option>";
			
		}
			?>
            </select>
            <p></p>
            <table><tr><td>
            <input name="submit" type="submit" value="Edit">
            </td>
            </form>
           <form action="DeleteConfTea.php" method="post">
           <td>
           <input name="del" type="submit" value="Delete"><input name="onomaT" type="hidden" value="<?php echo $row['onoma'];?>"><input name="id" type="hidden" value="<?php echo $row['id'];?>"></td></tr></table>
           	<?php
				echo "<input name='id1' value='".$row['id']."' type='hidden'>";
				
			?>
            
           </form>
            <?php		
		}?>
</body>
</html>